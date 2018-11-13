<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ingredient;
use App\Ingredientscategory;

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
        $categories = Ingredientscategory::all();

        return view('admin.ingredients.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $ingredient = new Ingredient;

        // ckeck if active
        function presentIsActive( $value ){
            return $value ? true : false;
        }
        
        // Handle image upload
        $image = $request->file('image');
        $fileNameToStore = time().'.'. $image->getClientOriginalName();
        $image->move(public_path('images/ingredients'), $fileNameToStore);

        $ingredient->name = $request->input('name');
        $ingredient->ingredientscategory_id = $request->input('ingredientscategory_id');
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
        $ingredient = Ingredient::find($id);
        $categories = Ingredientscategory::all();

        return view('admin.ingredients.edit', compact('ingredient', 'categories'));
    }

    public function update (Request $request, $id){

        $ingredient = Ingredient::find($id);

        // ckeck if active
        function presentIsActive( $value ){
            return $value ? true : false;
        }
        
        // Handle image upload if image has been submited
        if($request->hasFile('image')){
            // Handle image upload
            $image = $request->file('image');
            $fileNameToStore = time().'.'. $image->getClientOriginalName();
            $image->move(public_path('images/ingredients'), $fileNameToStore);
            
            //save image to table
            $ingredient->image_path = $fileNameToStore;
        }

        $ingredient->name = $request->input('name');
        $ingredient->ingredientscategory_id = $request->input('ingredientscategory_id');
        $ingredient->price = $request->input('price');
        $ingredient->isactive = presentIsActive( $request->input('isactive') );
        
        
        $ingredient->save();

        return redirect()->back()->with('success', $ingredient->name.' has been edited!');
    }

    public function delete($id){
        $ingredient = Ingredient::find($id);

        $ingredient->delete();

        /**
         * Must add the delete statment for storage
         */

        return redirect(route('admin.ingredients.index'))->with('success', $ingredient->name.' has been deleted!');
    }
}
