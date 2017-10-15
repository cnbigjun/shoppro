<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    public function cart()
    {
        return $this->belongsTo('App\Cart');
    }

    public function good()
    {
        return $this->belongsTo('App\Good','goods_id');
    }
}
