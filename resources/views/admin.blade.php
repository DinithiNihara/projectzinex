@extends('master')

@section('content')

<br>

<a href="{{action('App\Http\Controllers\VehicleController@index')}}" class="btn btn-success">Vehicle Stock Management</a>

<a href="{{action('App\Http\Controllers\DriverController@index')}}" class="btn btn-warning">Drivers Management</a>

@endsection