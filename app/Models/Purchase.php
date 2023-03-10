<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Nikolag\Square\Traits\HasProducts;

class Purchase extends Model
{
    use HasFactory,HasProducts;
    protected $fillable = [
        'bill_id','user_id','product_id','webproduct_id',
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
}
