<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function orderproduct()
    {
        return $this->hasMany('App\Models\OrderProduct');
    }
}
