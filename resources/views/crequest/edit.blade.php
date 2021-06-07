@extends('master')

@section('content')

    <br>
    <a href="{!! url('/crequest') !!}" class="btn btn-warning">
        <- Customer Requests</a>
            <div class="row">
                <div class="col-md-12">
                    <br />
                    <h3>Edit Record</h3>
                    <br />
                    @if (count($errors) > 0)

                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                    @endif
                    <form method="post" action="{{ action('App\Http\Controllers\RequestController@update', $id) }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PATCH" />

                        <div class="row">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <label>Title</label>
                                    <select class="form-control" name="title" id="title">
                                        <option value="Dr." {{ $crequest->title == 'Dr.' ? 'selected' : '' }}>Dr.</option>
                                        <option value="Rev." {{ $crequest->title == 'Rev.' ? 'selected' : '' }}>Rev.
                                        </option>
                                        <option value="Mr." {{ $crequest->title == 'Mr.' ? 'selected' : '' }}>Mr.</option>
                                        <option value="Mrs." {{ $crequest->title == 'Mrs.' ? 'selected' : '' }}>Mrs.
                                        </option>
                                        <option value="Miss" {{ $crequest->title == 'Miss' ? 'selected' : '' }}>Miss
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <div class="form-group">
                                    <label>Your Name</label>
                                    <input type="text" name="name" value="{{ $crequest->name }}" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Your Email Address</label>
                                    <input type="text" name="email" value="{{ $crequest->email }}" class="form-control" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Your Contact Number</label>
                                    <input type="text" name="contact" value="{{ $crequest->contact }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Pickup Location </label>
                            <input type="text" name="p_location" value="{{ $crequest->p_location }}"
                                class="form-control" />
                        </div>
                        <div class="form-group">
                            <label>Return Location</label>
                            <input type="text" name="r_location" value="{{ $crequest->r_location }}"
                                class="form-control" />
                        </div>
                        <div class="form-group">
                            <label>Service Type</label>
                            <select class="form-control" name="service" id="service">
                                <option value="Self_Drive" {{ $crequest->service == 'Self_Drive' ? 'selected' : '' }}>Self
                                    Drive</option>
                                <option value="Tours" {{ $crequest->service == 'Tours' ? 'selected' : '' }}>Tours</option>
                                <option value="Weddings&Events"
                                    {{ $crequest->service == 'Weddings&Events' ? 'selected' : '' }}>Weddings & Events
                                </option>
                                <option value="Airport_Transfers"
                                    {{ $crequest->service == 'Airport_Transfers' ? 'selected' : '' }}>Airport/ City
                                    Transfers</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Vehicle Type</label>
                            <select class="form-control" name="vehicle" id="vehicle">
                                <option value="Car" {{ $crequest->vehicle == 'Car' ? 'selected' : '' }}>Car</option>
                                <option value="Van" {{ $crequest->vehicle == 'Van' ? 'selected' : '' }}>Van</option>
                                <option value="SUV" {{ $crequest->vehicle == 'SUV' ? 'selected' : '' }}>SUV</option>
                                <option value="Bus" {{ $crequest->vehicle == 'Bus' ? 'selected' : '' }}>Bus</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Passengers</label>
                            <select class="form-control" name="passengers" id="passengers">
                                <option value="1_4" {{ $crequest->passengers == '1_4' ? 'selected' : '' }}>1-4</option>
                                <option value="5_12" {{ $crequest->passengers == '5_12' ? 'selected' : '' }}>5-12</option>
                                <option value="13_20" {{ $crequest->passengers == '13_20' ? 'selected' : '' }}>12-20
                                </option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Pickup Date</label>
                                    <input type="date" name="p_date" value="{{ $crequest->p_date }}"
                                        class="form-control" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Pickup Time</label>
                                    <input type="time" name="p_time" value="{{ $crequest->p_time }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Return Date</label>
                                    <input type="date" name="r_date" value="{{ $crequest->r_date }}"
                                        class="form-control" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Return Time</label>
                                    <input type="time" name="r_time" value="{{ $crequest->r_time }}"
                                        class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea type="text" name="message" class="form-control" cols="10"
                                rows="4">{{ $crequest->message }}</textarea>
                        </div>


                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Edit" />
                        </div>
                    </form>
                </div>
            </div>

        @endsection
