<?php

namespace App\Models;

use Eloquent;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Lang;

/**
 * @property string $id                        ID
 * @property string $title                     Title
 * @property int $subscribers_count            Total subscribers
 * @property int $average_views                AVG views
 * @property float $engagement_rate            ER rate
 * @property Category|null $category_id        ID category
 * @property Language|null $language_id        ID language
 * @property Region|null $region_id            ID region
 * @property Carbon|null $last_video_period    Last video period
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property-read Category $category
 * @property-read Language $language
 * @property-read Region $region
 *
 * @package App\Models
 * @mixin Eloquent
 */
class Channel extends Model
{
    /**
     * @var string
     */
    public $table = 'channels';

    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;

    /**
     * @var array<string, string>
     */
    protected $casts = [
        'id'                => 'string',
        'title'             => 'string',
        'subscribers_count' => 'integer',
        'average_views'     => 'integer',
        'engagement_rate'   => 'float',
        'category_id'       => 'integer',
        'language_id'       => 'integer',
        'region_id'         => 'integer',
        'last_video_period' => 'datetime:Y-m-d',
        'created_at'        => 'datetime',
        'updated_at'        => 'datetime'
    ];

    /**
     * Validation rules.
     *
     * @var array
     */
    public static array $rules = [
        'title'             => 'required|string|max:100',
        'subscribers_count' => 'integer|digits_between:1,20',
        'average_views'     => 'integer|digits_between:1,20',
        'engagement_rate'   => 'decimal:2',
        'category_id'       => 'nullable|integer|digits_between:1,3|max:255|exists:categories,id',
        'language_id'       => 'nullable|integer|digits_between:1,3|max:255|exists:languages,id',
        'region_id'         => 'nullable|integer|digits_between:1,3|max:255|exists:regions,id',
    ];

    /**
     * @return BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * @return BelongsTo
     */
    public function language(): BelongsTo
    {
        return $this->belongsTo(Language::class);
    }

    /**
     * @return BelongsTo
     */
    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class);
    }

    /**
     * Field names.
     *
     * @return array
     */
    public function attributeLabels(): array
    {
        return [
            'id'                => 'ID',
            'title'             => Lang::get('labels.title'),
            'subscribers_count' => Lang::get('labels.subscribers_count'),
            'average_views'     => Lang::get('labels.average_views'),
            'engagement_rate'   => Lang::get('labels.engagement_rate'),
            'category_id'       => Lang::get('labels.category_id'),
            'language_id'       => Lang::get('labels.language_id'),
            'region_id'         => Lang::get('labels.region_id'),
            'last_video_period' => Lang::get('labels.last_video_period'),
            'created_at'        => Lang::get('labels.created_at'),
            'updated_at'        => Lang::get('labels.updated_at'),
        ];
    }
}
