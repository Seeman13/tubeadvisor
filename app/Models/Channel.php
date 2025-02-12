<?php

namespace App\Models;

use Eloquent;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

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
     * Field names.
     *
     * @var array
     */
    public static array $attributeLabels = [
        'id'                => 'ID',
        'title'             => 'Title',
        'subscribers_count' => 'Total subscribers',
        'average_views'     => 'AVG views',
        'engagement_rate'   => 'ER rate',
        'category_id'       => 'Category',
        'language_id'       => 'Language',
        'region_id'         => 'Region',
        'last_video_period' => 'Last video period',
        'created_at'        => 'Created at',
        'updated_at'        => 'Updated at'
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
}
