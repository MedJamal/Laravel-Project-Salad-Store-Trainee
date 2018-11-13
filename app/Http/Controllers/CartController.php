<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cart;
use App\Ingredient;
use Session;
use Auth;

class CartController extends Controller
{
    public function index (){
        // return dd(Session::get('cart'));
        if (!Session::has('cart')) {
            // return redirect()->route('index')->with('error', 'Your cart is empty!');
            return view('cart');
        }

        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        return view('cart', ['ingredients' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function AddToCart(Request $request, $id)
    {
        // return $request . $id;
        $ingredient = Ingredient::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($ingredient, $ingredient->id);

        $request->session()->put('cart', $cart);
        return redirect()->route('index');
    }

    public function RemoveItem($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }

        return redirect()->route('cart.index');
    }

    public function ReduceByOne($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);

        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
        return redirect()->route('cart.index');
    }

        public function IncreaseByOne($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->IncreaseByOne($id);

        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
        return redirect()->route('cart.index');
    }
}
