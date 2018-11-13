<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Home</title>
<!-- Bootstrap stylesheet -->
<link href="{{asset('bootstrap\css\bootstrap.css')}}" rel="stylesheet">
<!-- crousel css -->
<link href="{{asset('js\owl-carousel\owl.carousel.css')}}" rel="stylesheet" type="text/css">
<!--bootstrap select-->
<link href="{{asset('js\dist\css\bootstrap-select.css')}}" rel="stylesheet" type="text/css">
<!-- font -->
<link href="https://fonts.googleapis.com/css?family=Fira+Sans:300,400,500,600,700,800,900" rel="stylesheet">
<!-- font-awesome -->
<link href="{{asset('font-awesome\css\font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('css\ele-style.css')}}" rel="stylesheet" type="text/css">
<!-- stylesheet -->
<link href="{{asset('css\style.css')}}" rel="stylesheet" type="text/css">

{{-- Laravel token --}}
<meta name="csrf-token" content="{{ csrf_token() }}" />

<body>
    <!--top start here -->
    @include('partials.top')
    
    <!-- header start here-->
    @include('partials.header')
    
    @yield('content')
    
    <!-- footer start here -->
    <footer>
        <!-- container start here -->
        @include('partials.footer.container')

        <!-- powered start here -->
        @include('partials.footer.powered')
    </footer>
    <!-- footer end here -->
    

    <!-- jquery -->
    <script src="{{ asset('js\jquery.2.1.1.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('bootstrap\js\bootstrap.min.js') }}"></script>
    <!--bootstrap select-->
    <script src="{{ asset('js\dist\js\bootstrap-select.js') }}"></script>
    <!--internal js-->
    <script src="{{ asset('js\internal.js') }}"></script>
    <!-- owlcarousel js -->
    <script src="{{ asset('js\owl-carousel\owl.carousel.min.js') }}"></script>

    {{-- <script src="{{ asset('js\addToCart.js') }}"></script> --}}
</body>
</html>