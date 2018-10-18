@extends('layouts.default')

@section('content')

{{-- Check if guest --}}
@guest

    <!-- Auth start here -->
    <div class="register">
        <div class="container"> 
            <div class="row">
                {{-- SIGN IN start here  --}}
                @include('partials.auth.login')
                
                {{-- SIGN UP start here  --}}
                @include('partials.auth.register')

            </div>
        </div>
    </div>
    <!-- Auth end here -->

@endguest

@endsection