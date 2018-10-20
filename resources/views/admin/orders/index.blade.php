@extends('admin.layouts.default')

@section('content')

        <div>
            <a class="btn btn-primary" href="{{ route('admin.orders.create') }}">Add new order</a>
        </div>

        <br>

        <table class="table fluid">
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
                            <a href="{{ route('admin.order.show', ['id' => $order->id]) }}">{{ presentOrderID($order->id) }}</a>
                            {{-- <a href="{{ route('admin.order.show', ['id' => $order->id]) }}">{{ $order->id }}</a> --}}
                            {{-- <a href="{{ route('admin.order.show', ['id' => $order->id]) }}" class="btn btn-default">Show</a> --}}
                        </th>
                        <td>{{ $order->email }}</td>
                        {{-- <td class="ingredients">{{ $order->ingredients }}</td> --}}
                        {{-- <td>{{ presentIngredients($order->ingredients) }}</td> --}}
                        {{-- <td>{{ unserialize($order->ingredients) }}</td> --}}
                        <td>

                            @foreach ($order->ingredients as $ingredient)
                                <span style="font-size: 90%;" class="badge badge-info">{{ $ingredient }}</span>
                            @endforeach
                            {{ count($order->ingredients) === 5 ? '...' : '' }}
                        </td>

                        <td>{{ $order->total }} Euro</td>
                        {{-- <td>{{ $order->status }}</td> --}}
                        <td>
                            @if($order->status === 1)
                                <span style="font-size: 90%;" class="badge badge-pill badge-warning">Préparer</span>
                            @endif
                            @if($order->status === 0)
                                <span style="font-size: 90%;" class="badge badge-pill badge-danger">Annuler</span>
                            @endif
                            @if($order->status === 2)
                                <span style="font-size: 90%;" class="badge badge-pill badge-primary">Prêt</span>
                            @endif
                            @if($order->status === 3)
                                <span style="font-size: 90%;" class="badge badge-pill badge-success">Livrer</span>
                            @endif
                        </td>
                        <td>
                                {{-- <div class="dropdown">
                                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Action
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item btn-warning" href="{{ route('admin.orders.status', ['id' => $order->id, 'status' => 1]) }}">Préparer</a>
                                            <a class="dropdown-item btn-danger" href="{{ route('admin.orders.status', ['id' => $order->id, 'status' => 0]) }}">Annuler</a>
                                            <a class="dropdown-item btn-primary" href="{{ route('admin.orders.status', ['id' => $order->id, 'status' => 2]) }}">Prêt</a>
                                            <a class="dropdown-item btn-success" href="{{ route('admin.orders.status', ['id' => $order->id, 'status' => 3]) }}">Livrer</a>
                                        </div>
                                      </div> --}}
                            <a style="margin-bottom: 5px" class="btn btn-sm btn-warning" href="{{ route('admin.orders.status', ['id' => $order->id, 'status' => 1]) }}">
                                <i class="fas fa-cogs"></i>
                            </a>
                            <a style="margin-bottom: 5px" class="btn btn-sm btn-danger" href="{{ route('admin.orders.status', ['id' => $order->id, 'status' => 0]) }}">
                                <i class="fas fa-ban"></i>
                            </a>
                            <a style="margin-bottom: 5px" class="btn btn-sm btn-primary" href="{{ route('admin.orders.status', ['id' => $order->id, 'status' => 2]) }}">
                                <i class="fas fa-check"></i>
                            </a>
                            <a style="margin-bottom: 5px" class="btn btn-sm btn-success" href="{{ route('admin.orders.status', ['id' => $order->id, 'status' => 3]) }}">
                                <i class="fas fa-truck"></i>
                            </a>
                            <a href="#" class="btn btn-default"><i class="far fa-eye-slash"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{-- <a class="btn btn-success" href="{{ $orders->onFirstPage() }}">asd</a> --}}
        <div>
            {{ $orders->links() }}
        </div>

@endsection