@extends('admin.layouts.default')

@section('content')

    <div class="container">

        <br>

        <div class="put-left">
            <h3>Orders:</h3>
        </div>

        <div>
            <a class="btn btn-primary" href="{{ route('admin.orders.create') }}">Add new order</a>
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
                        {{-- <td class="ingredients">{{ $order->ingredients }}</td> --}}
                        {{-- <td>{{ presentIngredients($order->ingredients) }}</td> --}}
                        {{-- <td>{{ unserialize($order->ingredients) }}</td> --}}
                        <td>
                            @foreach ($order->ingredients as $ingredient)
                                <span class="badge badge-info">{{ $ingredient }}</span>
                            @endforeach
                        </td>

                        <td>{{ $order->total }} Euro</td>
                        {{-- <td>{{ $order->status }}</td> --}}
                        <td>
                            @if($order->status === 1)
                                <span class="badge badge-pill badge-warning">Préparer</span>
                            @endif
                            @if($order->status === 0)
                                <span class="badge badge-pill badge-danger">Annuler</span>
                            @endif
                            @if($order->status === 2)
                                <span class="badge badge-pill badge-primary">Prêt</span>
                            @endif
                            @if($order->status === 3)
                                <span class="badge badge-pill badge-success">Livrer</span>
                            @endif
                        </td>
                        <td>
                            <a class="btn btn-sm btn-warning" href="{{ route('admin.orders.status', ['id' => $order->id, 'status' => 1]) }}">Préparer</a>
                            <a class="btn btn-sm btn-danger" href="{{ route('admin.orders.status', ['id' => $order->id, 'status' => 0]) }}">Annuler</a>
                            <a class="btn btn-sm btn-primary" href="{{ route('admin.orders.status', ['id' => $order->id, 'status' => 2]) }}">Prêt</a>
                            <a class="btn btn-sm btn-success" href="{{ route('admin.orders.status', ['id' => $order->id, 'status' => 3]) }}">Livrer</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection