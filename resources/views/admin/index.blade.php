@extends('admin.layouts.default')

@section('content')

    {{ Route::currentRouteName() }}

    {{ Route::currentRouteName() ? 'true' : 'false' }}

@endsection
