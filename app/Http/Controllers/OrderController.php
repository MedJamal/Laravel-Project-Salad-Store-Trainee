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

    public function index()
    {
        $orders = Order::all();

        // return unserialize($orders[3]->ingredients);

        // return $orders[3]->ingredients;

        // return strlen($orders);

        foreach ($orders as $key => $order) {

            // $order->ingredients = (unserialize($order->ingredients));

            $order->ingredients = IngredientController::getIngredients(unserialize($order->ingredients))->pluck('name');
        }


        // return $orders;

        return view('orders.index')->with('orders', $orders);
    }

    public function create()
    {
        $ingredients = DB::table('ingredients')->get(['id', 'name']);

        // return $ingredients;

        return view('orders.create')->with('ingredients', $ingredients);
        
        // return view('orders.create', [ 'ingredients' => $ingredients ]);
    }


    public function store(Request $request)
    {
        // return $arr = $request->input('ingredients');
        // return (serialize($arr));
        
        $order = new Order;

        $order->email = $request->input('email');
        $order->ingredients = serialize($request->input('ingredients'));
        $order->total = $request->input('total');
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
