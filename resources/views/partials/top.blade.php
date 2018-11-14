<!--top start here -->
<div class="top">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
                <ul class="list-inline pull-left icon">
                    <li>
                        <a href="contactus.html">
                            <i class="icon_phone"></i> Call us : +123 456 7890
                        </a>
                    </li>
                    <li>
                        <a href="contactus.html">
                            <i class="fa fa-envelope"></i> Email : organicfoodsfruits@gmail.com
                        </a>
                    </li>
                </ul>
                <ul class="list-inline pull-right  icons">
                    {{-- <li class="dropdown currency">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon_cog"></i> Setting</a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a href="#"><i class="fa fa-usd"></i> Currency</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">&#8364; Euro</a>
                                    </li>
                                    <li>
                                        <a href="#">&#163; Pound Sterling</a>
                                    </li>
                                    <li>
                                        <a href="#">$ US Dollar</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a href="#"><i class="icon_globe-2"></i> Language</a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#">English</a>
                                    </li>
                                    <li>
                                        <a href="#">Hindi</a>
                                    </li>
                                    <li>
                                        <a href="#">Punjabi</a>
                                    </li>
                                    <li>
                                        <a href="#">Urdu</a>
                                    </li>
                                    <li>
                                        <a href="#">Tamil</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li> --}}
                    <li class="dropdown cart">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon_cart"></i> Panier</a>
                        <ul class="dropdown-menu">
                            <li>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="text-center">
                                                <img src="{{ asset('images\header1\deal-img6.png') }}" class="img-responsive" alt="img" title="img">
                                            </td>
                                            <td class="text-left">
                                                <a href="#">Your Product Title</a>
                                                <p>1 x $ 15.00</p>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" title="Remove" class="btn btn-danger btn-xs"><i class="icon_close"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <img src="{{ asset('images\header1\deal-img3.png') }}" class="img-responsive" alt="img" title="img">
                                            </td>
                                            <td class="text-left">
                                                <a href="#">Your Product Title</a>
                                                <p>1 x $ 15.00</p>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" title="Remove" class="btn btn-danger btn-xs"><i class="icon_close"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">
                                                <img src="{{ asset('images\header1\deal-img1.png') }}" class="img-responsive" alt="img" title="img">
                                            </td>
                                            <td class="text-left">
                                                <a href="#">Your Product Title</a>
                                                <p>1 x $ 15.00</p>
                                            </td>
                                            <td class="text-center">
                                                <button type="button" title="Remove" class="btn btn-danger btn-xs"><i class="icon_close"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-left" colspan="3">
                                                <h4><i class="icofont icofont-ui-delete"></i> Clear your cart <span class="text-right">Sub Total - $ 45.00</span></h4>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="buttons">
                                    <button class="btn-primary" type="button" onclick="location.href='{{ route('cart.index') }}'"><i class="icon_cart"></i> View Cart</button>
                                    <button class="btn-primary" type="button" onclick="location.href='checkout.html'"><i class="icon_box-checked"></i> Checkout</button>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown login">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon_profile"></i>
                            @guest
                                Mon compte
                            @else
                                {{ Auth::user()->name }}
                            @endguest
                        </a>
                        <ul class="dropdown-menu">
                            <li> 
                                {{-- CSS issue --}}
                                <button type="button" class="fac">Facebook</button>
                                <button type="button" class="go">Google+</button>
                            </li>
                            {{-- Dashboard --}}
                            @auth
                                @if(Auth::user()->is_admin ==1)
                                    <li>
                                        <a href="{{ route('admin.index') }}"><i class="icon_profile"></i>Dashboard</a>
                                    </li>
                                @endif
                            @endauth
                            <li>
                                <a href="#"><i class="icon_profile"></i>Mon compte</a>
                            </li>
                            <li>
                                <a href="{{ route('user.orders') }}"><i class="icon_archive"></i>Mes commandes</a>
                            </li>	
                            <li>
                                <a href="#"><i class="icon_heart"></i>Wishlist</a>
                            </li>
                            {{-- Auth buttons --}}
                            {{-- Check if the user is auth or guest --}}
                            @guest
                                <li class="des text-center">Si tu es êtes un nouvel utilisateur</li>
                                {{-- If you are a new user --}}
                                <li class="text-center">
                                    <a href="{{ route('auth') }}">Inscrire maintenant</a>
                                </li>
                                <li>
                                    <button class="btn" type="button" onclick="location.href='{{ route('auth') }}'">S'identifier</button>
                                </li>
                            @else
                                <li>
                                    {{-- <a class="btn" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        Logout
                                    </a> --}}
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                    </form>
                                    <button class="btn" type="button" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnecter</button>
                                </li>
                            @endguest
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--top end here -->