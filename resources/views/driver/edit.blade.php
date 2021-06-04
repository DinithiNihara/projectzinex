@extends('master')

@section('content')

<div class="row">
 <div class="col-md-12">
  <br />
  <h3>Edit Record</h3>
  <br />
  @if(count($errors) > 0)

  <div class="alert alert-danger">
         <ul>
         @foreach($errors->all() as $error)
          <li>{{$error}}</li>
         @endforeach
         </ul>
  @endif
  <form method="post" action="{{action('App\Http\Controllers\DriverController@update', $id)}}">
   {{csrf_field()}}
   <input type="hidden" name="_method" value="PATCH" />
   <div class="form-group">
    <input type="text" name="name" class="form-control" value="{{$driver->name}}" placeholder="Enter Name" />
   </div>
   <div class="form-group">
    <input type="text" name="email" class="form-control" value="{{$driver->email}}" placeholder="Enter Email" />
   </div>
   <div class="form-group">
    <input type="text" name="address" class="form-control" value="{{$driver->address}}" placeholder="Enter Address" />
   </div>
   <div class="form-group">
    <input type="text" name="nic" class="form-control" value="{{$driver->nic}}" placeholder="Enter NIC" />
   </div>
   <div class="form-group">
    <input type="text" name="cno" class="form-control" value="{{$driver->cno}}" placeholder="Enter Contact No" />
   </div>
   <div class="form-group">
    <input type="text" name="status" class="form-control" value="{{$driver->status}}" placeholder="Enter Status" />
   </div>
   <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Edit" />
   </div>
  </form>
 </div>
</div>

@endsection
