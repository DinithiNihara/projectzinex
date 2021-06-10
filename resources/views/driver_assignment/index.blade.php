<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Driver Assign</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css"
        rel="stylesheet">
</head>

<body>
    <br><br>
    <form method="post" action="{{ url('vehicle') }}">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-12">
                <br />
                <h3 align="center">Customer Request</h3>
                <br />
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Request ID</th>
                            <th>Title</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Pickup Location</th>
                            <th>Return Location</th>
                            <th>Service Type</th>
                            <th>Vehicle Type</th>
                            <th>Passengers</th>
                            <th>Pickup Date</th>
                            <th>Pickup Time</th>
                            <th>Return Date</th>
                            <th>Return Time</th>
                            <th>Message</th>
                            <th>Vehicle ID</th>
                            <th>Created at</th>
                            <th>Status</th>

                        </tr>
                        <tr>
                            @foreach ($res as $r)
                                <td>{{ $r }}</td>
                                <input type="hidden" name="rid" value="{{$r->id}}"/>
                            @endforeach
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <br><br>
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
            <br>
            <h3 align="center">Assign a Driver</h3>
            <br>
            <select class="form-control" name="dname" id="dname">
                <option selected="true" disabled="disabled">- Choose a Driver -</option>
                @foreach ($drivers as $dr)
                    <option>{{ $dr['id'] }} - {{ $dr['name'] }}</option>
                @endforeach
            </select>
            <input type="hidden" name="did" value="{{$dr['id']}}"/>
            <input type="hidden" name="name" value="{{$dr['name']}}"/>
        </div>
        <br>
        <div class="col-md-9">
        </div>
        <div class="col-md-3">
        <input class="btn btn-primary" type="submit" value="Assign"/>
        </div>
        
    </form>





</body>

</html>
