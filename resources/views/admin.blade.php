@extends('master')

@section('content')

    <br><br>

    <div class="col">
        <div class="row">
            <a href="{{ action('App\Http\Controllers\VehicleController@index') }}" class="btn btn-success">Vehicle Stock
                Management</a>
        </div>
        <div class="row">
            <a href="{{ action('App\Http\Controllers\DriverController@index') }}" class="btn btn-warning">Drivers
                Management</a>
        </div>
        <div class="row">
            <a href="{{ action('App\Http\Controllers\RequestController@index') }}" class="btn btn-primary">Customer Request
                Management</a>
        </div>
    </div>


@endsection
