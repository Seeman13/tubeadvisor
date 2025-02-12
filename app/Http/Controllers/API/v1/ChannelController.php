<?php

namespace App\Http\Controllers\API\v1;

use Cache;
use Illuminate\Http\JsonResponse;

use App\Http\Controllers\Controller;
use App\Http\Requests\ChannelRequest as Request;
use App\Repositories\ChannelRepository;

class ChannelController extends Controller
{
    public function __construct(private readonly ChannelRepository $repository) {}

    /**
     * @param Request $request
     * @return JsonResponse
     */
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
