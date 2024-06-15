<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property float $price
 * @property string $description
 * @property integer $duration
 * @property string $created_at
 * @property string $updated_at
 * @property UserPlan[] $userPlans
 * @property UserPlanLog[] $userPlanLogs
 */
class Plan extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'price', 'description', 'duration', 'created_at', 'updated_at'];

    protected function price(): Attribute
    {
        $exchangeRates = [
            'en' => 1,
            'jp' => 156.90
        ];

        return Attribute::make(
            get: fn (float $value) => floor($exchangeRates[app()->getLocale()] * $value)
        );
    }

    public function getDuration()
    {
        return str_replace(' ago', '', Carbon::now()->subDays($this->duration)->diffForHumans());
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userPlans()
    {
        return $this->hasMany('App\Models\UserPlan');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userPlanLogs()
    {
        return $this->hasMany('App\Models\UserPlanLog');
    }
}
