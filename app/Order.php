<?php

namespace App;

use App\Order;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    public function ingredients() {

        // return $this->hasMany('App\Ingredient', 'name', 'ingredients');
        // return $this->hasMany('App\Ingredient');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }
    
}
