@extends('layouts.default')

@section('content')

{{--
    User Orders 
--}}

<div class="bread-crumb">
        <img src="images\top-banner.jpg" class="img-responsive" alt="banner-top" title="banner-top">
        <div class="container">
            <div class="matter">
                <h2><span>Organic</span> MES COMMANDES</h2>
                <ul class="list-inline">
                    <li>
                        <a href="{{ route('index') }}">Accueil</a>
                    </li>
                    <li>
                        <a href="{{ route('user.orders') }}">MES COMMANDES</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- bread-crumb end here -->


    <div class="container">
        <br>
        @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
        @endif
        
        @if(session('error'))
            <div class="alert alert-danger">
                {{session('error')}}
            </div>
        @endif
    </div>
    
    
    {{-- List Ingredients --}}
    <div class="mycart user-orders">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <form method="post" enctype="multipart/form-data">
                        <div class="table-responsive">
                        @if(count($orders) > 0)
                            <table class="table listproducts">
                                <thead>
                                    <tr>
                                        <td class="text-left">N° de commande</td>
                                        <td class="text-left">Liste des ingrédients</td>
                                        <td class="text-center">Prix total</td> {{-- for qty of item --}}
                                        <td class="text-center">Statut</td>
                                        <td class="text-center">Heure et date</td>
                                    </tr>
                                </thead>
                                <tbody>
                                        @foreach ($orders as $order)
                                            <tr>
                                                <td class="text-left">
                                                    <a href="{{ route('user.order.show', ['id' => $order->id ]) }}">{{ presentOrderID($order->id) }}</a>
                                                </td>
                                                <td class="text-left">
                                                    @foreach ($order->ingredients as $key => $ingredient)
                                                        <span style="font-size: 70%;" class="badge badge-info">
                                                            {{ $ingredient }}
                                                        </span>
                                                    @endforeach
                                                    {{ count($order->ingredients) === 5 ? '...' : '' }}
                                                </td>
                                                <td class="text-center">
                                                    €{{ $order->total }}
                                                </td>
                                                <td class="text-center">
                                                    @if($order->status === 1)
                                                        <span style="" class="">Préparer</span>
                                                    @endif
                                                    @if($order->status === 0)
                                                        <span style="" class="">Annuler</span>
                                                    @endif
                                                    @if($order->status === 2)
                                                        <span style="" class="">Prêt</span>
                                                    @endif
                                                    @if($order->status === 3)
                                                        <span style="" class="">Livrer</span>
                                                    @endif
                                                </td>
                                                <td class="text-center">
                                                    {{ $order->created_at }}
                                                </td>
                                            </tr>
                                        @endforeach
                                </tbody>
                            </table>
                        @else
                            <div class="alert alert-info text-center">
                                Vous n'avez pas encore de commande!
                            </div>
                        @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection