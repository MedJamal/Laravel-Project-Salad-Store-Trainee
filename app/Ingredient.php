<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    public function ingredientscategories()
    {
        return $this->belongsTo('App\Ingredientscategory');
    }
}
