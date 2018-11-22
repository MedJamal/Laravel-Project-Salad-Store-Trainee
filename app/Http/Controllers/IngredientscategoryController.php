<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ingredientscategory;

// use App\Ingredient;

class IngredientscategoryController extends Controller
{
    public function index(){

        $categories = Ingredientscategory::all();

        return view('admin.ingredientscategory.index', compact('categories'));
    }

    public function store(Request $request){
        
        // handle the unique category name by the slug in table
        $category = Ingredientscategory::where('slug', str_slug($request->input('name')))->first();

        if ($category){
            return redirect()->back()->with('error', 'Already "' . $category->name .'" category exist!');
        } else {
            $category = new Ingredientscategory;

            $category->name = $request->input('name');
            $category->slug = str_slug($request->input('name'));
    
            $category->save();
    
            return redirect()->back()->with('success', 'The new category "' . $category->name .'" has been created!');
        }

        // $category = new Ingredientscategory;

        // $category->name = $request->input('name');
        // $category->slug = str_slug($request->input('name'));

        // $category->save();

        // return redirect()->back()->with('success', 'The new category "' . $category->name .'" has been created!');
    }

    public function update(Request $request, $id){

        // handle the unique category name by the slug in table
        $category = Ingredientscategory::where('slug', str_slug($request->input('name')))->first();

        if ($category){
            return redirect()->back()->with('error', 'Already "' . $category->name .'" category exist!');
        } else {
            $category = Ingredientscategory::find($id);

            $category->name = $request->input('name');
            $category->slug = str_slug($request->input('name'));
    
            $category->save();
    
            return redirect()->back()->with('success', $category->name.' has been edited !');
        }

        // $category = Ingredientscategory::find($id);

        // $category->name = $request->input('name');
        // $category->slug = str_slug($request->input('name'));

        // $category->save();

        // return redirect()->back()->with('success', $category->name.' has been edited !');
    }

    public function delete($id){
        $category = Ingredientscategory::find($id);

        $category->delete();

        return redirect()->back()->with('success', $category->name.' has been deleted!');
    }

}


