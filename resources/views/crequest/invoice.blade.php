@extends('master')

@section('content')

    <br>
    <a href="{!! url('/crequest') !!}" class="btn btn-warning">
        <- Customer Requests</a>
            <div class="row">
                <div class="col-md-12">
                    <br />
                    <h3>Invoice</h3>
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
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Total</label>
                                    <input type="text" name="email" value="{{ $crequest->email }}" class="form-control" />
                                </div>
                            </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Pay" />
                        </div>
                    </form>
                </div>
            </div>

        @endsection
