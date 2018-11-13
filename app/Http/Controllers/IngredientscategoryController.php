<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ingredientscategory;

class IngredientscategoryController extends Controller
{
    public function index(){

        $categories = Ingredientscategory::all();

        return view('admin.ingredientscategory.index', compact('categories'));
    }

    public function edit($id){

        return $category = Ingredientscategory::find($id);

        return view('admin.ingredientscategory.index', compact('category'));
    }
}
