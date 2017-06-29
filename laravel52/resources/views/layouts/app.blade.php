<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>eBorrow</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    {{--for homepage--}}
    <link rel="stylesheet" href="homepage/assets/animate/set.css" />
    <link rel="stylesheet" href="homepage/assets/animate/animate.css" />

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
<img src="image/lines.jpg" width="2400" height="8"/>
<div class="topbar animated fadeInLeftBig"></div>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Branding Image -->
                <a class="logo" href="{{ url('/home') }}">
                    Eborrow
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse" >
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    <li><a href="{{ url('/home') }}">Home</a></li>
                    <li><a href="#">About</a></li>
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{route('myspace')}}"><i class="fa fa-btn fa-sign-out"></i>My space</a></li>
                                <li class="divider"></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <br/>
    <br/>
    <br/>
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4">
                            <h5>ABOUT</h5>
                            <p><a href="#">About eBorrow</a></p>
                            <p><a href="#">News</a></p>
                            <p><a href="#">Conditions Générales</a></p>
                            <p><a href="#">Join us?</a></p>
                        </div>
                        <div class="col-md-4">
                            <h5>Support</h5>
                            <p><a href="#">Contact us</a></p>
                            <p><a href="#">My Account</a></p>
                            <p><a href="#">Advice</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-4">
                            <p>
                            <h6>Suivez-Nous:</h6>
                            <img src="image/facebook.png" class="img-rounded" width="62" height="62">
                            <img src="image/twitter.jpg" class="img-rounded" width="50" height="50">
                            </p>
                        </div>
                        <div class="col-md-4">
                            <form role="form">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" placeholder="You want?">
                                </div>
                                <button type="submit" class="btn btn-primary">Research</button>'
                            </form>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- JavaScripts -->
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>--}}
    {{--<script src="{{ elixir('js/app.js') }}"></script>--}}
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>
