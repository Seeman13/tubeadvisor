<?php

namespace App\Http\Controllers\API\v1;

use Cache;
use Illuminate\Http\JsonResponse;

use OpenApi\Attributes as OA;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\v1\Channel\ChannelRequest as Request;
use App\Repositories\ChannelRepository;

#[OA\Info(version: '0.1', title: 'TubeAdvisor')]
class ChannelController extends Controller
{
    public function __construct(private readonly ChannelRepository $repository) {}

    #[OA\Get(path: '/api/v1/recommendations')]
    #[OA\Response(response: '200', description: 'The data')]
    public function index(Request $request): JsonResponse
    {
        $filters = $request->getQueryParams();
        $sorting = $request->getQuerySorting();

        $cacheKey = 'channels:' . md5(serialize(array_merge($filters, $sorting)));

        $data = Cache::remember($cacheKey, 600, function () use ($filters) {
            return $this->repository->fetchChannels($filters);
        });

        return response()->json($data);
    }
}
