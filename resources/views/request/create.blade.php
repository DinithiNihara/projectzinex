@extends('master')

@section('content')
<div class="row">
 <div class="col-md-12">
  <br />
  <h3 aling="center">INQUIRY FORM</h3>
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

  <form method="post" action="{{url('request')}}">
   {{csrf_field()}}
   <div class="form-group">
    <label>Title</label>
    <input type="text" name="title" class="form-control"/>
   </div>
   <div class="form-group">
    <label>Your Name</label>
    <input type="text" name="name" class="form-control"/>
   </div>
   <div class="form-group">
    <label>Your Email Address</label>
    <input type="text" name="email" class="form-control"/>
   </div>
   <div class="form-group">
    <label>Your Contact Number</label>
    <input type="text" name="contact" class="form-control"/>
   </div>
   <div class="form-group">
    <label>Pickup Location </label>
    <input type="text" name="p_location" class="form-control"/>
   </div>
   <div class="form-group">
    <label>Return Location</label>
    <input type="text" name="r_loaction" class="form-control"/>
   </div>
   <div class="form-group">
    <label>Service Type</label>
    <input type="text" name="service" class="form-control"/>
   </div>
   <div class="form-group">
    <label>Vehicle Type</label>
    <input type="text" name="vehicle" class="form-control"/>
   </div>
   <div class="form-group">
    <label>Passengers</label>
    <input type="text" name="passengers" class="form-control"/>
   </div>
   <div class="form-group">
    <label>Pickup Date</label>
    <input type="text" name="p_date" class="form-control"/>
   </div>
   <div class="form-group">
    <label>Pickup Time</label>
    <input type="text" name="p_time" class="form-control"/>
   </div>
   <div class="form-group">
    <label>Return Date</label>
    <input type="text" name="r_date" class="form-control"/>
   </div>
   <div class="form-group">
    <label>Return Time</label>
    <input type="text" name="r_time" class="form-control"/>
   </div>
   <div class="form-group">
    <label>Message</label>
    <input type="text" name="message" class="form-control"/>
   </div>
   
   <div class="form-group">
    <input type="submit" class="btn btn-primary" />
   </div>
  </form>
 </div>
</div>
@endsection
