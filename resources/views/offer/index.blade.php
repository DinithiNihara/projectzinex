@extends('layouts.app')
@section('content')
    <table class="table table-bordered table-striped">
        <tr class="bg-secondary">
            <th>Service Type</th>
            <th>Pickup Location</th>
            <th>Vehicle Type</th>
            <th>Pickup Date</th>
            <th>Pickup Time</th>
            <th>Return Date</th> 
        </tr>
        <tr>
            @foreach ($array as $a)
            <td>{{$a}}</td>
            @endforeach
            
        </tr>
    </table>
    <br>
    <table class="table table-bordered table-striped">
        <tr>
            <th>Vehicle ID</th>
            <th>Manufacturer</th>
            <th>Model</th>
            <th>Vehicle Type</th>
            <th>Model Year</th>
            <th>Cost per KM</th>
            <th>Description</th>
            <th>Submit an Inquiry</th>

            @foreach ($r as $row)
        <tr>
            <form method="post" action="{{url('crequest/create')}}">
                {{csrf_field()}}
            <td>{{ $row->id }}</td>
            <input type="hidden" name="vid" value="{{$row->id}}"/>
            <td>{{ $row->manufacturer }}</td>
            <td>{{ $row->model }}</td>
            <td>{{ $row->type }}</td>
            <td>{{ $row->mYear }}</td>
            <td>{{ $row->cost }}</td>
            <td>{{ $row->description }}</td>

            <input type="hidden" name="service" value="{{$array[0]}}"/>
            <input type="hidden" name="type" value="{{$array[2]}}"/>
            <input type="hidden" name="pickup_date" value="{{$array[3]}}"/>
            <input type="hidden" name="pickup_time" value="{{$array[4]}}"/>
            <input type="hidden" name="return_date" value="{{$array[5]}}"/>

            <td><input type="submit" class="btn btn-info" value="Request"/>
            </td>
            </form>
        </tr>
        @endforeach
    </table>

@endsection
