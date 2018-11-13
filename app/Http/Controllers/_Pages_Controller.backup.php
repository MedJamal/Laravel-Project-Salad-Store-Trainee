<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ingredient;
use App\Order;
use App\Cart;
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
        $ingredients = Ingredient::select()->where('isactive', true)->take(8)->get();

        if (Session::has('cart')) {
            $oldCart = Session::get('cart');
            $cart = new Cart($oldCart);
            $cartIds = $cart->presentIngredientsIDs();
            foreach ($ingredients as $ingredient) {
                $ingredient->isInCart = false;
            }
    
            foreach ($ingredients as $ingredient) {
                $ingredient->isInCart = in_array($ingredient->id, $cartIds) ? true : false ;
            }
        } 

        // return dd(Session::get('cart'));
        // Grab 12 ingredients from database in random order.
        // $ingredients = Ingredient::select()->take(24)->inRandomOrder()->get();
        // return $ingredients = Ingredient::select()->where('isactive', true)->take(24)->get();
        // return $ingredients;
        // return view with data
        return view('index', compact('ingredients', 'cartIds'));
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
