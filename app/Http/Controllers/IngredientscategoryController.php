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

    public function store(Request $request){
        
        $category = new Ingredientscategory;

        $category->name = $request->input('name');
        $category->slug = str_slug($request->input('name'));

        $category->save();

        return redirect()->back()->with('success', 'The new category "' . $category->name .'" has been created!');
    }

    public function update(Request $request, $id){

        $category = Ingredientscategory::find($id);

        $category->name = $request->input('name');
        $category->slug = str_slug($request->input('name'));

        $category->save();

        return redirect()->back()->with('success', $category->name.' has been edited !');

        // return $category = Ingredientscategory::find($id);

        // return view('admin.ingredientscategory.index', compact('category'));
    }

    public function delete($id){
        $category = Ingredientscategory::find($id);

        $category->delete();

        return redirect()->back()->with('success', $category->name.' has been deleted!');
    }

}


