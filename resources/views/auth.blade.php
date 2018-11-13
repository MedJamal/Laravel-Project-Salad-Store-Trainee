@extends('layouts.default')

@section('content')

{{-- Check if guest --}}
@guest
    {{-- <div class="alert alert-warning" role="alert">
        A simple warning alert—check it out!
    </div>
    @if ($errors->has('email'))
        @foreach ($errors->all() as $error)
            
        @endforeach
    @endif --}}

    @if ($errors->all())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

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