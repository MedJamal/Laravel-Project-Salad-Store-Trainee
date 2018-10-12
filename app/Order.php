<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    public function ingredients() {

        return $this->hasMany('App\Ingredient', 'name', 'ingredients');

    }
}
