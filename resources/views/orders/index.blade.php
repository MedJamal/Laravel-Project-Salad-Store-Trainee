@extends('layouts.default')

@section('content')

    <div class="container">

        <br>

        <div class="put-left">
            <h3>Orders:</h3>
        </div>

        <div>
            <a class="btn btn-primary" href="{{ route('orders.create') }}">Add new order</a>
        </div>

        <br>

        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Email</th>
                    <th scope="col">Ingredients</th>
                    <th scope="col">Total</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <th scope="row">
                            {{ $order->id }}
                        </th>
                        <td>{{ $order->email }}</td>
                        <td class="ingredients">{{ $order->ingredients }}</td>
                        {{-- <td>{{ presentIngredients($order->ingredients) }}</td> --}}
                        {{-- <td>{{ unserialize($order->ingredients) }}</td> --}}
                        <td>{{ $order->total }}</td>
                        <td>{{ $order->status }}</td>
                        <td>
                            <button class="btn btn-sm btn-success">Edit</button>
                            <button class="btn btn-sm btn-danger">Delet</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection