<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id', 'name', 'detail', 'price', 'image', 'image_1', 'image_2',  'status'
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}
