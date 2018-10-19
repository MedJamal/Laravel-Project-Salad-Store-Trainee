<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ingredient;

class IngredientController extends Controller
{
    // Handle authontifications
    public function __construct(){

        $this->middleware('auth');

    }

    // Fetch Ingredients function by many IDs
    public static function getIngredients($data) {
        $ids = $data;
        return Ingredient::findMany($ids);
    }

    public function index()
    {
        $ingredients = Ingredient::all();

        // return $ingredients;

        return view('admin.ingredients.index', [ 'ingredients' => $ingredients ]);
        
    }

    public function create()
    {
        return view('admin.ingredients.create');
    }

    public function store(Request $request)
    {
        $ingredient = new Ingredient;

        // ckeck if active
        function presentIsActive( $value ){
            return $value ? true : false;
        }

        // validate([
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // ]);
        
        $image = $request->file('image');
        $fileNameToStore = time().'.'. $image->getClientOriginalName();
            
        $image->move(public_path('images/ingredients'), $fileNameToStore);

        $ingredient->name = $request->input('name');
        $ingredient->price = $request->input('price');
        $ingredient->isactive = presentIsActive( $request->input('isactive') );
        $ingredient->image_path = $fileNameToStore;
        
        $ingredient->save();

        return redirect(route('admin.ingredients.index'));
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
