<?php

namespace App\Repositories;

use App\Models\Scopes\ChannelScope;

/**
 * Class ChannelRepository
 * @package App\Repositories
 */
class ChannelRepository
{
    public function __construct(private ChannelScope $model) {}

    /**
     * @param array $filters
     * @return array
     */
    public function fetchChannels(array $filters = []): array
    {
        return $this->model->search($filters);
    }
}
