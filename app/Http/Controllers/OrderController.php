<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Added by MedJamal
 */
use Illuminate\Support\Facades\DB;

use App\Order;
use App\Ingredient;

class OrderController extends Controller
{
    /**
     * Show all orders.
     */
    public function index()
    {
        // Get all orders 
        $orders = Order::all();

        // Get selected ingredients name from Ingredients Table
        foreach ($orders as $key => $order) {
            $order->ingredients = IngredientController::getIngredients(unserialize($order->ingredients))->pluck('name');
        }

        // return $orders;

        return view('orders.index')->with('orders', $orders);
    }

    public function create()
    {
        $ingredients = DB::table('ingredients')->get(['id', 'name', 'isactive']);

        // return $ingredients;

        return view('orders.create')->with('ingredients', $ingredients);
        
        // return view('orders.create', [ 'ingredients' => $ingredients ]);
    }


    public function store(Request $request)
    {
        // Get selected ingredients price
        $prices = IngredientController::getIngredients($request->input('ingredients'))->pluck('price');
        
        // Convert from $prices variable array to float
        foreach($prices as $i => $price){
            $prices[$i] =(float)$price;
        }

        $order = new Order;

        // Calculate order total price

        $orderTotal = 0;
        
        foreach ( $prices as $price) {
            $orderTotal += $price;
        }

        // Store all data to DB Orders

        $order->email = $request->input('email');
        $order->ingredients = serialize($request->input('ingredients'));
        // $order->total = $request->input('total');
        $order->total = $orderTotal;
        $order->status = $request->input('status') ? true : false;

        $order->save();
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
