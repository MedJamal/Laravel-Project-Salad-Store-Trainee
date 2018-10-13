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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();

        // return $orders;

        return view('orders.index')->with('orders', $orders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ingredients = DB::table('ingredients')->get(['id', 'name']);

        // return $ingredients;

        return view('orders.create')->with('ingredients', $ingredients);
        
        // return view('orders.create', [ 'ingredients' => $ingredients ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
