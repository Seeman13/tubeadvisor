<?php
namespace Tests\Unit\Controllers\API\v1;

use Mockery;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Cache;
use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

use App\Http\Controllers\API\v1\ChannelController;
use App\Http\Requests\ChannelRequest as Request;
use App\Repositories\ChannelRepository;

class ChannelControllerTest extends TestCase
{
    protected $channelRepositoryMock;
    protected ChannelController $controller;

    protected function setUp(): void
    {
        parent::setUp();

        $this->channelRepositoryMock = Mockery::mock(ChannelRepository::class);
        $this->controller = new ChannelController($this->channelRepositoryMock);

        $this->app->instance(ChannelRepository::class, $this->channelRepositoryMock);
    }

    protected function tearDown(): void
    {
        Mockery::close();
        parent::tearDown();
    }

    protected function createRequest(array $params = []): Request
    {
        return Request::create('/api/v1/recommendations', 'GET', $params);
    }

    protected function assertResponseEquals(array $expectedData, JsonResponse $response): void
    {
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals(json_encode($expectedData), $response->getContent());
    }

    public static function filterDataProvider(): array
    {
        return [
            'filter_by_category' => [
                ['category' => '1'],
                [['id' => '1', 'title' => 'Channel 1', 'category_id' => 1]],
            ],
            'filter_by_language' => [
                ['language' => 'en'],
                [['id' => '1', 'title' => 'Channel 1', 'language_id' => 1]],
            ],
            'filter_by_region' => [
                ['region' => 'us'],
                [['id' => '1', 'title' => 'Channel 1', 'region_id' => 1]],
            ],
            'filter_by_last_video_period' => [
                ['last_video_period' => 'last_7_days'],
                [['id' => '1', 'title' => 'Channel 1', 'last_video_period' => now()->subDays(5)]],
            ],
            'filter_by_min_subscribers' => [
                ['min_subscribers' => 1000],
                [['id' => '1', 'title' => 'Channel 1', 'subscribers_count' => 1000]],
            ],
            'filter_by_max_subscribers' => [
                ['max_subscribers' => 5000],
                [['id' => '1', 'title' => 'Channel 1', 'subscribers_count' => 5000]],
            ],
        ];
    }

    #[DataProvider('filterDataProvider')]
    public function test_filters(array $filters, array $fakeChannels): void
    {
        $this->channelRepositoryMock
            ->shouldReceive('fetchChannels')
            ->once()
            ->with($filters)
            ->andReturn($fakeChannels);

        $request = $this->createRequest($filters);
        $response = $this->controller->index($request);

        $this->assertResponseEquals($fakeChannels, $response);
    }

    public static function sortDataProvider(): array
    {
        return [
            'sort_by_average_views_asc' => [
                ['sort' => 'average_views', 'direction' => 'asc'],
                [
                    ['id' => '1', 'title' => 'Channel 1', 'average_views' => 1000],
                    ['id' => '2', 'title' => 'Channel 2', 'average_views' => 2000],
                ],
            ],
            'sort_by_average_views_desc' => [
                ['sort' => 'average_views', 'direction' => 'desc'],
                [
                    ['id' => '2', 'title' => 'Channel 2', 'average_views' => 2000],
                    ['id' => '1', 'title' => 'Channel 1', 'average_views' => 1000],
                ],
            ],
            'sort_by_engagement_rate_asc' => [
                ['sort' => 'engagement_rate', 'direction' => 'asc'],
                [
                    ['id' => '1', 'title' => 'Channel 1', 'engagement_rate' => 0.5],
                    ['id' => '2', 'title' => 'Channel 2', 'engagement_rate' => 0.7],
                ],
            ],
            'sort_by_engagement_rate_desc' => [
                ['sort' => 'engagement_rate', 'direction' => 'desc'],
                [
                    ['id' => '2', 'title' => 'Channel 2', 'engagement_rate' => 0.7],
                    ['id' => '1', 'title' => 'Channel 1', 'engagement_rate' => 0.5],
                ],
            ],
        ];
    }

    #[DataProvider('sortDataProvider')]
    public function test_sorting(array $sortParams, array $fakeChannels): void
    {
        $this->channelRepositoryMock
            ->shouldReceive('fetchChannels')
            ->once()
            ->andReturn($fakeChannels);

        $request = $this->createRequest($sortParams);
        $response = $this->controller->index($request);

        $this->assertResponseEquals($fakeChannels, $response);
    }

    public static function channelDataProvider(): array
    {
        return [
            [
                [
                    ['id' => '1', 'title' => 'Channel 1'],
                    ['id' => '2', 'title' => 'Channel 2'],
                ]
            ],
            [
                [
                    ['id' => '3', 'title' => 'Channel 3'],
                    ['id' => '4', 'title' => 'Channel 4'],
                    ['id' => '5', 'title' => 'Channel 5'],
                ]
            ],
        ];
    }

    #[DataProvider('channelDataProvider')]
    public function test_cache_data_on_first_request(array $fakeChannels): void
    {
        $request = $this->createRequest();

        $this->channelRepositoryMock
            ->shouldReceive('fetchChannels')
            ->never();

        $cacheKey = 'channels:' . md5(serialize($request->getQueryParams()));
        Cache::shouldReceive('remember')
            ->once()
            ->with($cacheKey, 600, Mockery::type('Closure'))
            ->andReturn($fakeChannels);

        $response = $this->controller->index($request);

        $this->assertResponseEquals($fakeChannels, $response);
    }

    #[DataProvider('channelDataProvider')]
    public function test_return_cached_data_on_subsequent_request(array $fakeChannels): void
    {
        $request = $this->createRequest();

        $this->channelRepositoryMock
            ->shouldReceive('fetchChannels')
            ->never();

        $cacheKey = 'channels:' . md5(serialize($request->getQueryParams()));
        Cache::shouldReceive('remember')
            ->once()
            ->with($cacheKey, 600, Mockery::type('Closure'))
            ->andReturn($fakeChannels);

        $response = $this->controller->index($request);

        $this->assertResponseEquals($fakeChannels, $response);
    }

    #[DataProvider('channelDataProvider')]
    public function test_cache_invalidation_on_different_parameters(array $fakeChannels): void
    {
        $fakeChannels2 = [['id' => '2', 'title' => 'Channel 2']];

        $this->channelRepositoryMock
            ->shouldReceive('fetchChannels')
            ->never()
            ->with(['category' => '1'])
            ->andReturn($fakeChannels);

        $this->channelRepositoryMock
            ->shouldReceive('fetchChannels')
            ->never()
            ->with(['category' => '2'])
            ->andReturn($fakeChannels2);

        $cacheKey1 = 'channels:' . md5(serialize(['category' => '1']));
        $cacheKey2 = 'channels:' . md5(serialize(['category' => '2']));

        Cache::shouldReceive('remember')
            ->once()
            ->with($cacheKey1, 600, Mockery::type('Closure'))
            ->andReturn($fakeChannels);

        Cache::shouldReceive('remember')
            ->once()
            ->with($cacheKey2, 600, Mockery::type('Closure'))
            ->andReturn($fakeChannels2);

        $request1 = $this->createRequest(['category' => '1']);
        $response1 = $this->controller->index($request1);
        $this->assertResponseEquals($fakeChannels, $response1);

        $request2 = $this->createRequest(['category' => '2']);
        $response2 = $this->controller->index($request2);
        $this->assertResponseEquals($fakeChannels2, $response2);
    }
}
