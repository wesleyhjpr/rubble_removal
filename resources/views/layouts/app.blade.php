<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Pinheiros entulhos e móveis velhos') }}</title>
    <link rel="icon" href="{{ asset('logo.png') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        body{
            background-color: #fff !important;
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
        .navbar-nav li a:hover, .navbar-nav li.active a, .navbar-dark .navbar-nav .nav-link.active {
            color: hsla(0,0%,100%,.5) !important;          
           {{-- background-color: #fff !important; --}}            
        }
        
        .navbar-dark .navbar-toggler {
            border-color: transparent;
            color: #fff !important;
        }
        .btn-primary:active {
            background-color: #31905c !important; 
            border-color: #fff !important;
        }
        .btn-primary:hover {
            background-color: #38a568; 
            border-color: #fff;
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
        .jumbotron { 
            color: #000;
           {{--  padding: 100px 25px; --}}    
        }
        footer .fa-angle-up{
            font-size: 35px;
            margin-bottom: 20px;
            color: MediumSeaGreen;
        }
        .bg-grey {
            background-color: #f6f6f6;
        }
        .container-fluid {
            padding: 60px 50px;
        }
        .logo-small {
            color: MediumSeaGreen;
            font-size: 50px;
            padding-bottom: 10px;
        }
        .logo {
            color: MediumSeaGreen;
            font-size: 200px;
        }
        @media screen and (max-width: 768px) {
            .col-sm-4 {
                text-align: center;
                margin: 25px 0;
            }
        }
        .thumbnail {
            padding: 0 0 15px 0;
            border: none;
            border-radius: 0;
        }
        
        .card-body img {
            width: 100%;
            height: 100%;
            margin-bottom: 10px;
        }
        .carousel-control-next, .carousel-control-prev {
            background-image: none;
            color: #52b32b;
        }
        .carousel-control-prev:hover, .carousel-control-next:hover {
            color: MediumSeaGreen;
        }
        .carousel-control-prev:focus, .carousel-control-next:focus {
            color: #2c8855;
        }
        .carousel-indicators li {
            background-color: #dcffd9;
        }        
        .carousel-indicators li.active {
            background-color: MediumSeaGreen;
        }        
        .carousel-item h4 {
            font-size: 19px;
            line-height: 1.375em;
            font-weight: 400;
            font-style: italic;
            margin: 70px 0;
        }        
        .carousel-item span {
            font-style: normal;
        }
        .fa-angle-right, .fa-angle-left{
            font-size: 35px;    
        }
        .card {
            border: 1px solid MediumSeaGreen; 
            border-radius:0;
            transition: box-shadow 0.5s;
        }
        
        .card:hover {
            box-shadow: 5px 0px 40px rgba(0,0,0, .2);
        }
        
        .card-footer .btn:hover {
            border: 1px solid MediumSeaGreen;
            background-color: #fff !important;
            color: MediumSeaGreen;
        }
        
        .card-header {
            color: #fff !important;
            background-color: MediumSeaGreen !important;
            padding: 25px;
            border-bottom: 1px solid transparent;
            border-top-left-radius: 0px;
            border-top-right-radius: 0px;
            border-bottom-left-radius: 0px;
            border-bottom-right-radius: 0px;
        }
        
        .card-footer {
            background-color: #fff !important;
        }
        
        .card-footer h3 {
            font-size: 32px;
        }
        
        .card-footer h4 {
            color: #aaa;
            font-size: 14px;
        }
        
        .card-footer .btn {
            margin: 15px 0;
            background-color: MediumSeaGreen;
            color: #fff;
        }
        .slideanim {visibility:hidden;}
        .slide {
            /* The name of the animation */
            animation-name: slide;
            -webkit-animation-name: slide; 
            /* The duration of the animation */
            animation-duration: 1s; 
            -webkit-animation-duration: 1s;
            /* Make the element visible */
            visibility: visible; 
        }
        .zoom {
            transition: transform .2s; /* Animation */
        }        
        .zoom:hover {
            transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
            padding-right: 25px;
            padding-left: 25px;
        }
        .vl {
            border-color: MediumSeaGreen;
            height: 1px;
            margin-bottom: 0px;
        }

        /* Go from 0% to 100% opacity (see-through) and specify the percentage from when to slide in the element along the Y-axis */
        @keyframes slide {
            0% {
                opacity: 0;
                transform: translateY(70%);
            } 
            100% {
                opacity: 1;
                transform: translateY(0%);
            } 
        }
        @-webkit-keyframes slide {
            0% {
                opacity: 0;
                -webkit-transform: translateY(70%);
            } 
            100% {
                opacity: 1;
                -webkit-transform: translateY(0%);
            }
        }
        @media screen and (max-width: 768px) {
            .col-sm-4 {
              text-align: center;
              margin: 25px 0;
            }
            .btn-lg {
                width: 100%;
                margin-bottom: 35px;
            }
          }
          @media screen and (max-width: 480px) {
            .logo {
                font-size: 150px;
            }
          }
          .nav-item a {
            color: #3cb370;
          }
          .nav-item a:hover{
            color: #2f8c57;
          }
    </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60"> 
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
                <a class="navbar-brand" style="padding-bottom: 0px; padding-top: 0px;"href={{Request::is('login')? '/' : '#myPage'}}>
                    <img src="{{ asset('logo_1.svg') }}" alt="CTA Bagulhos" style=" height: 33px;">
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myNavbar">
                        <span class="navbar-toggler-icon"></span>
                 </button> 
                <div class="collapse navbar-collapse" id="myNavbar">
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"  data-toggle="collapse" data-target=".navbar-collapse.show"><a href={{Request::is('login')? '/#about' : '#about'}} class="nav-link">SOBRE</a></li>
                        <li class="nav-item"  data-toggle="collapse" data-target=".navbar-collapse.show"><a href={{Request::is('login')? '/#services' : '#services'}} class="nav-link">SERVIÇOS</a></li>
                        <li class="nav-item"  data-toggle="collapse" data-target=".navbar-collapse.show"><a href={{Request::is('login')? '/#portfolio' : '#portfolio'}} class="nav-link">PORTFOLIO</a></li>
                        <li class="nav-item"  data-toggle="collapse" data-target=".navbar-collapse.show"><a href={{Request::is('login')? '/#termo-de-contrato' : '#termo-de-contrato'}} class="nav-link">TERMO DE CONTRATO</a></li>
                        <li class="nav-item"  data-toggle="collapse" data-target=".navbar-collapse.show"><a href={{Request::is('login')? '/#contact' : '#contact'}} class="nav-link">CONTATO</a></li>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show"><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
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
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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
            <a href="#myPage" title="Para o Topo">
              <span class="fa fa-angle-up"></span>
            </a>
            <p>Todos os direitos reservados.</p>
        </footer>
        <script>
            function slideLogo(){
                $(".slideanim").each(function(){
                    var pos = $(this).offset().top;
                    
                    var winTop = $(window).scrollTop();
                    if (pos < winTop + 600) {
                        $(this).addClass("slide");
                    }
                });
            }
            @if (!Request::is('login'))
            $('.navbar-brand img').hide(); 
            $(document).scroll(function () {
                var y = $(this).scrollTop();
                console.log("position: ", y);
                if(y < 376){
                    $('.navbar-brand img').hide();
                }
                if(y > 377){
                    $('.navbar-brand img').show();
                }else if(y > 332){
                    $('.navbar-brand img').show();
                }
            });
                $(document).ready(function(){                         
                    // Add smooth scrolling to all links in navbar + footer link                    
                    $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
                        // Make sure this.hash has a value before overriding default behavior
                        if (this.hash !== ""){
                        // Prevent default anchor click behavior
                        event.preventDefault();
                    
                        // Store hash
                        var hash = this.hash;
                        // Using jQuery's animate() method to add smooth page scroll
                        // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                        $('html, body').animate({
                            scrollTop: $(hash).offset().top
                        }, 900, function(){
                    
                            // Add hash (#) to URL when done scrolling (default click behavior)
                            window.location.hash = hash;
                        });
                        } // End if
                    });
                    if(window.location.hash){
                        slideLogo();
                    }                  
                    $(window).scroll(function() {
                        slideLogo();
                    });
                    })
                @endif
        </script>    
    </div>
    
</body>
</html>
