<?php

namespace App\Models;

use Eloquent;

use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\{Collection, Model};
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

use App\Observers\CategoryObserver;

/**
 * @property int $id ID
 * @property string $name Name
 * @property string|null $alias Alias
 * @property bool $active Active
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property-read Collection<int, Channel> $channels
 * @property-read int|null $channels_count
 *
 * @package App\Models
 * @mixin Eloquent
 */
#[ObservedBy([CategoryObserver::class])]
class Category extends Model
{
    /**
     * @var string
     */
    public $table = 'categories';

    /**
     * @var array<string, string>
     */
    protected $casts = [
        'name'       => 'string',
        'alias'      => 'string',
        'active'     => 'boolean',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    /**
     * @return HasMany
     */
    public function channels(): HasMany
    {
        return $this->hasMany(Channel::class)->select('id', 'name', 'alias')->where('active', true);
    }
}
