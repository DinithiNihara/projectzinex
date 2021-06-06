@extends('master')

@section('content')

<br>
<a href="{!!url('/admin')!!}" class="btn btn-danger"> <- Admin Panel</a>

<div class="row">
 <div class="col-md-12">
  <br />
  <h3 align="center">Vehicle Data</h3>
  <br />
  @if($message = Session::get('success'))
  <div class="alert alert-success">
   <p>{{$message}}</p>
  </div>
  @endif
  <div align="right">
   <a href="{{route('vehicle.create')}}" class="btn btn-primary">Add</a>
   <br />
   <br />
  </div>
  <table class="table table-bordered table-striped">
   <tr>
    <th>Vehicle ID</th>
    <th>Registered No</th>
    <th>Manufacturer</th>
    <th>Model</th>
    <th>Vehicle Type</th>
    <th>Model Year</th>
    <th>Registered Year</th>
    <th>Cost per KM</th>
    <th>Status</th>
    <th>Description</th>
    <th>Added date</th>
    <th>Edit</th>
    <th>Delete</th>
   </tr>
   @foreach($vehicles as $row)
   <tr>
    <td>{{$row['id']}}</td>
    <td>{{$row['regNo']}}</td>
    <td>{{$row['manufacturer']}}</td>
    <td>{{$row['model']}}</td>
    <td>{{$row['type']}}</td>
    <td>{{$row['mYear']}}</td>
    <td>{{$row['rYear']}}</td>
    <td>{{$row['cost']}}</td>
    <td>{{$row['status']}}</td>
    <td>{{$row['description']}}</td>
    <td>{{$row['created_at']}}</td>
    <td><a href="{{action('App\Http\Controllers\VehicleController@edit', $row['id'])}}" class="btn btn-warning">Edit</a></td>
    <td> <form method="post" class="delete_form" action="{{action('App\Http\Controllers\VehicleController@destroy', $row['id'])}}">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="DELETE" />
        <button type="submit" class="btn btn-danger">Delete</button>
       </form></td>
   </tr>
   @endforeach
  </table>
 </div>
</div>

<script>
    $(document).ready(function(){
     $('.delete_form').on('submit', function(){
      if(confirm("Are you sure you want to delete it?"))
      {
       return true;
      }
      else
      {
       return false;
      }
     });
    });
    </script>
@endsection