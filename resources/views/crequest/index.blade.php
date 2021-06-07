<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel CRUD</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css"
        rel="stylesheet">
</head>

<body>

    <div class="container-fluid">
        <br>
        <a href="{!! url('/admin') !!}" class="btn btn-danger">
            <- Admin Panel</a>

                <div class="row">
                    <div class="col-md-12">
                        <br />
                        <h3 align="center">Customer Requests</h3>
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
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                @foreach ($crequest as $row)
                                    <tr>
                                        <td>{{ $row['id'] }}</td>
                                        <td>{{ $row['title'] }}</td>
                                        <td>{{ $row['name'] }}</td>
                                        <td>{{ $row['email'] }}</td>
                                        <td>{{ $row['contact'] }}</td>
                                        <td>{{ $row['p_location'] }}</td>
                                        <td>{{ $row['r_location'] }}</td>
                                        <td>{{ $row['service'] }}</td>
                                        <td>{{ $row['vehicle'] }}</td>
                                        <td>{{ $row['passengers'] }}</td>
                                        <td>{{ $row['p_date'] }}</td>
                                        <td>{{ $row['p_time'] }}</td>
                                        <td>{{ $row['r_date'] }}</td>
                                        <td>{{ $row['r_time'] }}</td>
                                        <td>{{ $row['message'] }}</td>
                                        <td><a href="{{ action('App\Http\Controllers\RequestController@edit', $row['id']) }}"
                                                class="btn btn-warning">Edit</a></td>
                                        <td>
                                            <form method="post" class="delete_form"
                                                action="{{ action('App\Http\Controllers\RequestController@destroy', $row['id']) }}">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="_method" value="DELETE" />
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>

                <script>
                    $(document).ready(function() {
                        $('.delete_form').on('submit', function() {
                            if (confirm("Are you sure you want to delete it?")) {
                                return true;
                            } else {
                                return false;
                            }
                        });
                    });

                </script>


    </div>

</body>

</html>
