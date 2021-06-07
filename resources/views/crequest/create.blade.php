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
                    <input type="text" name="p_location" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Return Location</label>
                    <input type="text" name="r_location" class="form-control" />
                </div>
                <div class="form-group">
                    <label>Service Type</label>
                    <select class="form-control" name="service" id="service">
                        <option selected="true" disabled="disabled">Please Select </option>
                        <option value="Self_Drive">Self Drive</option>
                        <option value="Tours">Tours</option>
                        <option value="Weddings&Events">Weddings & Events</option>
                        <option value="Airport_Transfers">Airport/ City Transfers</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Vehicle Type</label>
                    <select class="form-control" name="vehicle" id="vehicle">
                        <option value="Car" selected>Car</option>
                        <option value="Van">Van</option>
                        <option value="SUV">SUV</option>
                        <option value="Bus">Bus</option>
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
                            <input type="date" name="p_date" class="form-control" />
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Pickup Time</label>
                            <input type="time" name="p_time" class="form-control" />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Return Date</label>
                            <input type="date" name="r_date" class="form-control" />
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
