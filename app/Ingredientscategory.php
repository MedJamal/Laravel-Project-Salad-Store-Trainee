<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredientscategory extends Model
{
    public function ingredients()
    {
        return $this->hasMany('App\Ingredient');
    }
}
