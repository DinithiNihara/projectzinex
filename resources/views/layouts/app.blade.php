<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.3/jquery.timepicker.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.3/jquery.timepicker.min.js"></script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css"
        rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>


    <style>
        /* Modify the background color */
        .navbar-custom {
            background-color: #ef1818;
            color: white;
        }

        /* Modify the font color */
        .navbar-dark {
            font-family: Arial, Helvetica, sans-serif;
        }

        /*modify the navbar padding*/
        .navbar-size {
            padding: 0;
        }

        /*offer bar style*/
        nav {
            width: 100%;
            box-sizing: content-box;
            background: #353535;
        }

        /* footer styles*/
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #353535;
            color: white;
            text-align: center;
        }
        ul{
            list-style-type: none;
        }

    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark .navbar-color navbar-custom shadow-sm">
            <div class="container ">
                <a class="navbar-brand navbar-size" href="#"><img src={{ asset('images/logo.png') }}
                        width="160" /></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <div class="container">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                        </div>
                        <div class="container">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Services</a>
                            </li>
                        </div>
                        <div class="container">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Rates
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Usual Rate</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Wedding Car Rate</a>
                                </div>
                            </li>
                        </div>
                        <div class="container">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contact_Us</a>
                            </li>
                        </div>

                    </ul>

                </div>



                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <nav class="navbar navbar-expand-xl navbar-light">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form method="post" action="{{url('offers/search')}}">
                    {{csrf_field()}}
                    <ul class="navbar-nav mr-auto">
                        <div class="container">
                            <select class="form-control" name="service">
                                <option selected="true" disabled="disabled">Service Type</option>
                                <option value="tours">Tours</option>
                                <option value="wedding">Weddings/ Events</option>
                            </select>
                        </div>

                        <div class="container">
                            <select class="form-control" name="location">
                                <option selected="true" disabled="disabled">
                                    Pickup Location</option>
                                <option value="BIA">Bandaranayake International Airport</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <div class="container">
                            <select class="form-control" name="type">
                                <option selected="true" disabled="disabled">Vehicle Type</option>
                                <option value="Car">Car</option>
                                <option value="Van">Van</option>
                                <option value="SUV">SUV</option>
                                <option value="Bus">Bus</a></option>
                                <option value="Any_vehicle">Any vehicle</a></option>
                            </select>
                        </div>

                        <div class="container">
                            <input class="date form-control" type="text" name="pickup_date" placeholder="Pickup Date" required>
                        </div>

                        <div class="container">
                            <input type="text" id="timepicker" class="form-control" name="pickup_time" placeholder="Pickup Time" required>
                        </div>

                        <div class="container">
                            <input class="date form-control" type="text" placeholder="Return Date" name="return_date" required>
                        </div>
                        <div class="container">
                            <input type="submit" class="btn navbar-custom" value="Show Offers" />
                        </div>
                    </ul>
                </form>

            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <div class="footer">
        <h4>Quick links</h4>
        <ul>
            <li href="#">Home <span class="sr-only">(current)</span></li>
            <li href="#">Services</li>
            <li href="#">Rates</li>
            <li href="#">Contact Us</li>
        </ul>
    </div>

    <script type="text/javascript">
        $('.date').datepicker({
            format: 'mm-dd-yyyy'
        });

        $("#timepicker").timepicker();

    </script>


</body>


</html>
