<?php

namespace App\Models\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Kyslik\ColumnSortable\Sortable;

use App\Models\Channel;

/**
 * Class ChannelScope
 *
 * @package App\Models\Scopes
 */
class ChannelScope extends Channel
{
    use Sortable;

    /**
     * @var array
     */
    private array $sortable = ['average_views', 'engagement_rate'];

    /**
     * @param Builder $query
     * @param string $category
     * @return Builder
     */
    public function scopeCategory(Builder $query, string $category): Builder
    {
        return $query->where('categories.name', $category)->orWhere('categories.alias', 'like', "%$category%");

        // v.2 with nested queries
//        return $query->where('category', static function ($query) use ($category) {
//            $query->select('id')->from('categories')->where('name', $category)->orWhere('alias', 'like', "%$category%");
//        });
    }

    /**
     * @param Builder $query
     * @param string $language
     * @return Builder
     */
    public function scopeLanguage(Builder $query, string $language): Builder
    {
        return $query->where('languages.active', true)->where(static function ($subquery) use ($language) {
            $subquery->where('languages.name', $language)->orWhere('languages.code', $language);
        });

        // v.2 with nested queries
//        return $query->where('language', static function ($query) use ($language) {
//            $query->select('id')->from('languages')
//                ->where('active', true)
//                ->where(static function ($subquery) use ($language) {
//                    $subquery->where('name', $language)->orWhere('code', $language);
//                });
//        });
    }

    /**
     * @param Builder $query
     * @param string $period
     * @return Builder
     */
    public function scopeLast_video_period(Builder $query, string $period): Builder
    {
        return match ($period) {
            'last_7_days' => $query->where('last_video_period', '>=', now()->subDays(7)),
            'last_month'  => $query->where('last_video_period', '>=', now()->subMonth()),
            'last_year'   => $query->where('last_video_period', '>=', now()->subYear()),
            default       => $query
        };
    }

    /**
     * @param Builder $query
     * @param int $total
     * @return Builder
     */
    public function scopeMax_subscribers(Builder $query, int $total): Builder
    {
        return $query->where('subscribers_count', '>=', $total)->orderBy('subscribers_count', 'desc');
    }

    /**
     * @param Builder $query
     * @param int $total
     * @return Builder
     */
    public function scopeMin_subscribers(Builder $query, int $total): Builder
    {
        return $query->where('subscribers_count', '<=', $total)->orderBy('subscribers_count');
    }

    /**
     * @param Builder $query
     * @param string $region
     * @return Builder
     */
    public function scopeRegion(Builder $query, string $region): Builder
    {
        return $query->where('regions.name', $region)->orWhere('regions.code', $region);

        // v.2 with nested queries
//        return $query->where('regions', static function ($query) use ($region) {
//            $query->select('id')->from('regions')->where('name', $region)->orWhere('code', $region);
//        });
    }

    /**
     * @param array $params
     * @return array
     */
    public function search(array $params): array
    {
        $params = array_filter($params, static function ($element) {
            return $element !== null;
        });

        return $this->sortable()
            ->scopes($params)
            ->select([
                'channels.id', 'title', 'categories.name as category', 'subscribers_count', 'average_views',
                'engagement_rate', 'languages.name as language', 'regions.name as region',
                'last_video_period as last_video_published_at'
            ])
            ->leftJoin('categories', 'categories.id', 'channels.category_id')
            ->leftJoin('languages', 'languages.id', 'channels.language_id')
            ->leftJoin('regions', 'regions.id', 'channels.region_id')
            ->orderBy('engagement_rate', 'desc')
            ->orderBy('average_views', 'desc')
            ->limit(10)
            ->get()
            ->toArray();
    }
}
