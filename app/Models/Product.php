<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','description1','description2','description3','description4','description5','description6','price','payment_link',
    ];
    public function purchases()
    {
        return $this->hasMany('App\Purchase');
    }
}
