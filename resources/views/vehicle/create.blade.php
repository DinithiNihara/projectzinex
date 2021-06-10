@extends('master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <br />
            <h3 aling="center">Add Data</h3>
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

            <form method="post" action="{{ url('vehicle') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" name="regNo" class="form-control" placeholder="Enter Registered No" />
                </div>
                <div class="form-group">
                    <input type="text" name="manufacturer" class="form-control" placeholder="Enter Manufacturer" />
                </div>
                <div class="form-group">
                    <input type="text" name="model" class="form-control" placeholder="Enter Model" />
                </div>
                <div class="form-group">
                    <input type="text" name="type" class="form-control" placeholder="Enter Vehicle Type" />
                </div>
                <div class="form-group">
                    <input type="text" name="mYear" class="form-control" placeholder="Enter Model Year" />
                </div>
                <div class="form-group">
                    <input type="text" name="rYear" class="form-control" placeholder="Enter Registered Year" />
                </div>
                <div class="form-group">
                    <input type="text" name="service" class="form-control" placeholder="Enter Service" />
                </div>
                <div class="form-group">
                    <input type="text" name="cost" class="form-control" placeholder="Enter Cost/per KM" />
                </div>
                <div class="form-group">
                    <input type="text" name="status" class="form-control" placeholder="Enter Status" />
                </div>
                <div class="form-group">
                    <input type="text" name="description" class="form-control" placeholder="Enter Description" />
                </div>

                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value=" Next "/>
                </div>
            </form>
        </div>
    </div>
@endsection
