@extends('admin.layouts.default')

@section('content')

<div class="card">
    <div class="card-header">           
        {{-- <h5>Order : {{ $order->id }}</h5> --}}
        <h5>Order : {{ presentOrderID($order->id) }}</h5>
    </div>
    <div class="card-body">
        <h5 class="card-title">{{ $order->email }}</h5>
        @foreach ($ingredients as $ingredient)
            <span style="font-size: 100%;" class="badge badge-info">{{ $ingredient}}</span>
        @endforeach
        <h5 class="card-title">{{ $order->total }}</h5>
        <h5 class="card-title">
            @if($order->status === 1)
                <span style="font-size: 80%;" class="badge badge-pill badge-warning">Préparer</span>
            @endif
            @if($order->status === 0)
                <span style="font-size: 80%;" class="badge badge-pill badge-danger">Annuler</span>
            @endif
            @if($order->status === 2)
                <span style="font-size: 80%;" class="badge badge-pill badge-primary">Prêt</span>
            @endif
            @if($order->status === 3)
                <span style="font-size: 80%;" class="badge badge-pill badge-success">Livrer</span>
            @endif
        </h5>
    </div>
</div>

@endsection