<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Nikolag\Square\Traits\HasProducts;

class Order extends Model
{
    use HasProducts;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'total','bill_id','user_id','product_id','webproduct_id',
    ];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function product()
    {
        return $this->belongsTo('App\Product');
    }
    public function Webproduct()
    {
        return $this->belongsTo('App\WebProduct');
    }

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;
}