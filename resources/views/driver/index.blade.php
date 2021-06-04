@extends('master')

@section('content')

<div class="row">
 <div class="col-md-12">
  <br />
  <h3 align="center">Driver Data</h3>
  <br />
  @if($message = Session::get('success'))
  <div class="alert alert-success">
   <p>{{$message}}</p>
  </div>
  @endif
  <div align="right">
   <a href="{{route('driver.create')}}" class="btn btn-primary">Add</a>
   <br />
   <br />
  </div>
  <table class="table table-bordered table-striped">
   <tr>
    <th>Driver ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Address</th>
    <th>NIC</th>
    <th>Contact No</th>
    <th>Status</th>
    <th>Added date</th>
    <th>Edit</th>
    <th>Delete</th>
   </tr>
   @foreach($drivers as $row)
   <tr>
    <td>{{$row['id']}}</td>
    <td>{{$row['name']}}</td>
    <td>{{$row['email']}}</td>
    <td>{{$row['address']}}</td>
    <td>{{$row['nic']}}</td>
    <td>{{$row['cno']}}</td>
    <td>{{$row['status']}}</td>
    <td>{{$row['created_at']}}</td>
    <td><a href="{{action('App\Http\Controllers\DriverController@edit', $row['id'])}}" class="btn btn-warning">Edit</a></td>
    <td> <form method="post" class="delete_form" action="{{action('App\Http\Controllers\DriverController@destroy', $row['id'])}}">
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