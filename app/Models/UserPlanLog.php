<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $user_id
 * @property integer $plan_id
 * @property float $price
 * @property string $buy_date
 * @property string $created_at
 * @property string $updated_at
 * @property Plan $plan
 * @property User $user
 */
class UserPlanLog extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'plan_id', 'price', 'buy_date', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function plan()
    {
        return $this->belongsTo('App\Models\Plan');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
