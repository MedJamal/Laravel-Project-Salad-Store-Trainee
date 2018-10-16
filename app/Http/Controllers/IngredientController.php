<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ingredient;

class IngredientController extends Controller
{
    // Fetch Ingredients function by many IDs
    public static function getIngredients($data) {
        $ids = $data;
        return Ingredient::findMany($ids);
    }

    public function index()
    {
        $ingredients = Ingredient::all();

        // return $ingredients;

        return view('ingredients.index', [ 'ingredients' => $ingredients ]);
        
    }

    public function create()
    {
        return view('ingredients.create');
    }

    public function store(Request $request)
    {
        $ingredient = new Ingredient;

        // ckeck if active
        function presentIsActive( $value ){
            return $value ? true : false;
        }

        $ingredient->name = $request->input('name');
        $ingredient->price = $request->input('price');
        $ingredient->isactive = presentIsActive( $request->input('isactive') );
        $ingredient->image_path = $request->input('image'); // must convert to method for image upload and store in the server and store path in database
        
        $ingredient->save();

        return redirect('/ingredients');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }
}
