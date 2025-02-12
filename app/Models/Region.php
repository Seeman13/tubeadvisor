<?php

namespace App\Models;

use Eloquent;

use Illuminate\Database\Eloquent\{Collection, Model};
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * @property int $id ID
 * @property string $name Name
 * @property string $code Code
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Collection<int, Channel> $channels
 * @mixin Eloquent
 */
class Region extends Model
{
    /**
     * @var string
     */
    public $table = 'regions';

	/**
	 * @var array<string, string>
	 */
	protected $casts = [
		'name'       => 'string',
		'code'       => 'string',
		'created_at' => 'datetime',
		'updated_at' => 'datetime'
	];

    /**
     * @return HasMany
     */
    public function channels(): HasMany
    {
        return $this->hasMany(Channel::class)->select('id', 'name', 'code');
    }
}
