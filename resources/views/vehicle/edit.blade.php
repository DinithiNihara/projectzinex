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
  <form method="post" action="{{action('App\Http\Controllers\VehicleController@update', $id)}}">
   {{csrf_field()}}
   <input type="hidden" name="_method" value="PATCH" />
   <div class="form-group">
    <input type="text" name="regNo" class="form-control" value="{{$vehicle->regNo}}" placeholder="Enter Registered No" />
   </div>
   <div class="form-group">
    <input type="text" name="manufacturer" class="form-control" value="{{$vehicle->manufacturer}}" placeholder="Enter Manufacturer" />
   </div>
   <div class="form-group">
    <input type="text" name="model" class="form-control" value="{{$vehicle->model}}" placeholder="Enter Model" />
   </div>
   <div class="form-group">
    <input type="text" name="type" class="form-control" value="{{$vehicle->type}}" placeholder="Enter Type" />
   </div>
   <div class="form-group">
    <input type="text" name="mYear" class="form-control" value="{{$vehicle->mYear}}" placeholder="Enter Model Year" />
   </div>
   <div class="form-group">
    <input type="text" name="rYear" class="form-control" value="{{$vehicle->rYear}}" placeholder="Enter Registered Year" />
   </div>
   <div class="form-group">
    <input type="text" name="cost" class="form-control" value="{{$vehicle->cost}}" placeholder="Enter Cost/per KM" />
   </div>
   <div class="form-group">
    <input type="text" name="status" class="form-control" value="{{$vehicle->status}}" placeholder="Enter Status" />
   </div>
   <div class="form-group">
    <input type="text" name="description" class="form-control" value="{{$vehicle->description}}" placeholder="Enter Description" />
   </div>
   <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Edit" />
   </div>
  </form>
 </div>
</div>

@endsection
