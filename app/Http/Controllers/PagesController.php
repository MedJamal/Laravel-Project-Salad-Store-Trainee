<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ingredient;
use App\Order;
use App\Cart;
use App\Ingredientscategory;
// use App\User;
use Session;
use Auth;

class PagesController extends Controller
{

    public function __construct(){
        $this->middleware('auth', ['except' => ['index', 'contactus']]);
    }

    // Home Page of the App
    public function index (){
        $categories = Ingredientscategory::all();
        $ingredients = Ingredient::all();
        
        return view('index', compact('categories', 'ingredients'));
    }

    

    public function shop(){
        $categories = Ingredientscategory::all();
        $ingredients = Ingredient::all();
        // return $ingredients = Ingredient::where('isactive', '=', true )->get();
        
        return view('shop.index', compact('categories', 'ingredients'));
    }



    public function userOrders(){
        // Grep all orders that belongs to auth-user
        $orders = Order::where('user_id', auth()->user()->id)->orderBy('created_at', 'desc')->get();
        
        // here must check if no orders to redirect back with error

        // Get selected ingredients name from Ingredients Table
        foreach ($orders as $key => $order) {
            $order->ingredients = IngredientController::getIngredients(unserialize($order->ingredients))
                                                                ->pluck('name')
                                                                ->take(5);
        }

        return view('profile.orders', compact('orders'));
    }

    public function userOrderShow($id){
        // Grep order that belongs to auth-user

        if( auth()->user()->id !== Order::find($id)->user_id) {
            return redirect()->back()->with('error', 'You are not allowed to look at this page');
        }
        $order = Order::find($id);

        // here must check if no order to redirect back with error

        // $order->ingredients = IngredientController::getIngredients(unserialize($order->ingredients))->pluck('name');
        $order->ingredients = IngredientController::getIngredients(unserialize($order->ingredients));
        
        // return $order;

        return view('profile.order', compact('order'));
    }

    /**
     * Contact function
     */
    public function contactus(){

        return view('contactus');

    }
}
