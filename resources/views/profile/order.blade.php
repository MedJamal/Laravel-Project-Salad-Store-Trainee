@extends('layouts.default')

@section('content')

<!-- bread-crumb start here -->
<div class="bread-crumb">
    <img src="/images/top-banner.jpg" class="img-responsive" alt="banner-top" title="banner-top">
    <div class="container">
        <div class="matter">
            <h2><span>Organic</span> Confirmation</h2>
            <ul class="list-inline">
                <li>
                    <a href="/">ACCUEIL</a>
                </li>
                <li>
                    <a href="#">Confirmation</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- bread-crumb end here -->

@include('partials.session')

<!-- confirm start here -->
<div class="confirm">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 colxs-12">
                <div class="commontop text-left">
                    <h4>
                        DÉTAILS DE LA COMMANDE [ id:{{ presentOrderID($order->id) }} ]
                        <i class="icon_star_alt"></i>
                        <i class="icon_star_alt"></i>
                        <i class="icon_star_alt"></i>
                    </h4>
                </div>
                <h5>Détails du panier</h5>
                <table>
                    @foreach ($order->ingredients as $ingredient)
                        <tr>
                            <td style="width:18%;"><a href="#">{{ $ingredient['name'] }}</a></td>
                            <td style="width:12%;">:</td>
                            <td style="width:45%;"><span>€{{ $ingredient['price'] }}</span></td>
                        </tr>
                    @endforeach
                </table>
                <h3>Prix total<span>€{{ $order->total }}</span></h3>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 text-center">
                <div class="image">
                    <img src="/images/confirmation.png" class="img-responsive" alt="confirm" title="confirm">
                </div>
                <h2>Commande reçue avec succès</h2>
                <p>Merci pour votre achat</p>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                <div class="buttons">
                    <button type="button" class="btn-primary" onclick="location.href='{{ route('index') }}'">Retour à la accueil</button>
                    {{-- <button type="button" class="btn-primary" onclick="location.href='shop.html'">continue shopping</button> --}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- confirm end here -->

@endsection