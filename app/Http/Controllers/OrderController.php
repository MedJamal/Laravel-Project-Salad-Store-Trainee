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
    public function __construct(){

        $this->middleware('auth');

    }
    
    /**
     * Show all orders.
     */
    public function index()
    {
        // Get all orders 
        // $orders = Order::all();
        // return $orders->orderBy('status');

        $orders = Order::select()->orderBy('status', 'desc')->paginate(10);

        // Get selected ingredients name from Ingredients Table
        foreach ($orders as $key => $order) {
            $order->ingredients = IngredientController::getIngredients(unserialize($order->ingredients))
                                                                ->pluck('name')
                                                                ->take(5);
        }

        // return $orders;

        return view('admin.orders.index')->with('orders', $orders);
    }

    public function create()
    {
        $ingredients = DB::table('ingredients')->get(['id', 'name', 'isactive']);

        // return $ingredients;

        return view('admin.orders.create')->with('ingredients', $ingredients);
        
        // return view('admin.orders.create', [ 'ingredients' => $ingredients ]);
    }


    public function store(Request $request)
    {
        // Get selected ingredients price
        $prices = IngredientController::getIngredients($request->input('ingredients'))
                                            ->pluck('price');
        
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
        // $order->status = $request->input('status') ? true : false;
        $order->status = 1;

        $order->save();

        return redirect(route('admin.orders.index'));
    }

    // Set status of order
    public function status($id, $status){

        $order = Order::find($id);

        $order->status = $status;

        $order->save();

        return redirect(route('admin.orders.index'));
        
    }

    public function show($id)
    {
        $order = Order::find($id);
        // Get selected ingredients name from Ingredients Table
        
        $ingredients = IngredientController::getIngredients(unserialize($order->ingredients))
                                                ->pluck('name');

        // return compact('order', 'ingredients');
        // return $order;

        return view('admin.orders.show', compact('order', 'ingredients'));
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
