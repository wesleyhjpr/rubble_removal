<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        footer .fa-angle-up{
            font-size: 35px;
            margin-bottom: 20px;
            color: MediumSeaGreen;
        }
        .navbar {
            margin-bottom: 0;
            background-color: MediumSeaGreen  !important;
            z-index: 9999;
            border: 0;
            font-size: 12px !important;
            line-height: 1.42857143 !important;
            letter-spacing: 4px;
            border-radius: 0;
        }
        
        .navbar li a, .navbar .navbar-brand {
            color: #fff !important;
        }
        
        .navbar-nav li a:hover, .navbar-nav li.active a {
            color: #46ff00 !important;           
           {{-- background-color: #fff !important; --}}            
        }
        
        .navbar-dark .navbar-toggler {
            border-color: transparent;
            color: #fff !important;
        }
        .btn-primary {
            background-color: MediumSeaGreen; 
            border-color: #fff;
        }
        .contentPos {
            margin-top:70px;
        }
        .form-control:focus {
            border-color: #3cb370;
            box-shadow: 0 0 0 0.2rem rgba(0, 255, 47, 0.25);
        }
    </style>
      
</head>
<body>
    <div id="app">
        {{-- <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
         comment --}}
         <nav class="navbar navbar-dark bg-dark fixed-top navbar-expand-md">
            <div class="container">
                <a class="navbar-brand" href="#">Logo</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myNavbar">
                        <span class="navbar-toggler-icon"></span>
                 </button> 
                <div class="collapse navbar-collapse" id="myNavbar">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="#about" class="nav-link">ABOUT</a></li>
                        <li class="nav-item"><a href="#services" class="nav-link">SERVICES</a></li>
                        <li class="nav-item"><a href="#portfolio" class="nav-link">PORTFOLIO</a></li>
                        <li class="nav-item"><a href="#pricing" class="nav-link">PRICING</a></li>
                        <li class="nav-item"><a href="#contact" class="nav-link">CONTACT</a></li>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            {{--
                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">{{ __('Register') }}</a></li>
                            --}}
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>                  
        <main class="py-4">
            @yield('content')
        </main>   
        <footer class="container-fluid text-center">
            <a href="#myPage" title="To Top">
              <span class="fa fa-angle-up"></span>
            </a>
        </footer>    
    </div>
    
</body>
</html>
