@extends('master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <br />
            <h3 aling="center">INQUIRY FORM</h3>
            <br />
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ \Session::get('success') }}</p>
                </div>
            @endif

           
            <form method="post" action="{{ url('crequest') }}">
                {{ csrf_field() }}

                <input type="hidden" name="vid" value={{$array[5]}} />

                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Title</label>
                            <select class="form-control" name="title" id="title">
                                <option value="Dr.">Dr.</option>
                                <option value="Rev.">Rev.</option>
                                <option value="Mr." selected>Mr.</option>
                                <option value="Mrs.">Mrs.</option>
                                <option value="Miss">Miss</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="form-group">
                            <label>Your Name</label>
                            <input type="text" name="name" class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Your Email Address</label>
                            <input type="text" name="email" class="form-control" />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Your Contact Number</label>
                            <input type="text" name="contact" class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Pickup Location </label>
                    <input type="text" name="p_location" class="form-control"/>
                </div>
                <div class="form-group">
                    <label>Return Location</label>
                    <input type="text" name="r_location" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Service Type</label>
                    <select class="form-control" name="service" id="service" >
                        <option selected="true" disabled="disabled">Please Select </option>
                        <option value="Tours" {{ $array[0] == 'tours' ? 'selected' : '' }}>Tours</option>
                        <option value="Weddings&Events" {{ $array[0] == 'wedding' ? 'selected' : '' }}>Weddings & Events</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Vehicle Type</label>
                    <select class="form-control" name="vehicle" id="vehicle" >
                        <option value="Car" {{ $array[1] == 'Car' ? 'selected' : '' }}>Car</option>
                        <option value="Van" {{ $array[1] == 'Van' ? 'selected' : '' }}>Van</option>
                        <option value="SUV" {{ $array[1] == 'SUV' ? 'selected' : '' }}>SUV</option>
                        <option value="Bus" {{ $array[1] == 'Bus' ? 'selected' : '' }}>Bus</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Passengers</label>
                    <select class="form-control" name="passengers" id="passengers">
                        <option value="1_4" selected>1-4</option>
                        <option value="5_12">5-12</option>
                        <option value="13_20">13-20</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Pickup Date</label>
                            <input type="date" name="p_date" class="form-control" value="{{$array[2]}}"/>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Pickup Time</label>
                            <input type="time" name="p_time" class="form-control"/>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Return Date</label>
                            <input type="date" name="r_date" class="form-control" value="{{$array[4]}}"/>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Return Time</label>
                            <input type="time" name="r_time" class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea type="text" name="message" class="form-control" cols="10" rows="4"></textarea>
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" />
                </div>
            </form>
           
        </div>
    </div>
@endsection
