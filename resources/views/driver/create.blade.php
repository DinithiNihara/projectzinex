@extends('master')

@section('content')
<div class="row">
 <div class="col-md-12">
  <br />
  <h3 aling="center">Add Data</h3>
  <br />
  @if(count($errors) > 0)
  <div class="alert alert-danger">
   <ul>
   @foreach($errors->all() as $error)
    <li>{{$error}}</li>
   @endforeach
   </ul>
  </div>
  @endif
  @if(\Session::has('success'))
  <div class="alert alert-success">
   <p>{{ \Session::get('success') }}</p>
  </div>
  @endif

  <form method="post" action="{{url('driver')}}">
   {{csrf_field()}}
   <div class="form-group">
    <input type="text" name="name" class="form-control" placeholder="Enter Name" />
   </div>
   <div class="form-group">
    <input type="text" name="email" class="form-control" placeholder="Enter Email" />
   </div>
   <div class="form-group">
    <input type="text" name="address" class="form-control" placeholder="Enter Address" />
   </div>
   <div class="form-group">
    <input type="text" name="nic" class="form-control" placeholder="Enter NIC" />
   </div>
   <div class="form-group">
    <input type="text" name="cno" class="form-control" placeholder="Enter Contact No" />
   </div>
   <div class="form-group">
    <input type="text" name="status" class="form-control" placeholder="Enter Status" />
   </div>
   <div class="form-group">
    <input type="submit" class="btn btn-primary" />
   </div>
  </form>
 </div>
</div>
@endsection