@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <h1>Company</h1> 
    <p>We specialize in blablabla</p> 
</div>
<div id="about" class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
        <h2>Sobre a página da empresa</h2>
        <h4>Lorem ipsum..</h4> 
        <p>Lorem ipsum..</p>
        <button class="btn btn-default btn-lg">Get in Touch</button>
        </div>
        <div class="col-sm-4">
        <span class="fas fa-signal logo slideanim"></span>
        </div>
    </div>
</div>
    
<div class="container-fluid bg-grey">
    <div class="row">
        <div class="col-sm-4">
        <span class="fas fa-globe-americas logo slideanim"></span> 
        </div>
        <div class="col-sm-8">
        <h2>Nossos Valores</h2>
        <h4><strong>MISSÃO:</strong> Nossa missão lorem ipsum..</h4> 
        <p><strong>VISÃO:</strong> Nossa visão Lorem ipsum..</p>
        </div>
    </div>
</div>
<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVIÇOS</h2>
  <h4>O que nós oferecemos</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="fas fa-power-off logo-small"></span>
      <h4>POWER</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="fas fa-heart logo-small"></span>
      <h4>LOVE</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="fas fa-lock logo-small"></span>
      <h4>JOB DONE</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="fas fa-leaf logo-small"></span>
      <h4>GREEN</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="fas fa-certificate logo-small"></span>
      <h4>CERTIFIED</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="fas fa-wrench logo-small"></span>
      <h4 style="color:#303030;">HARD WORK</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
</div>
<div id="portfolio" class="container-fluid text-center bg-grey">
        <h2>Portfolio</h2>
        <h4>O que nós criamos</h4>
        <br>
    <div class="row text-center slideanim">
        <div class="col-md-4">
            <div class="card card-body">
                <img src="https://www.w3schools.com/bootstrap/paris.jpg" alt="Paris">
                <p><strong>Paris</strong>
                </p>
                <p>Yes, we built Paris</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-body">
                <img src="https://www.w3schools.com/bootstrap/newyork.jpg" alt="New York">
                <p><strong>New York</strong>
                </p>
                <p>We built New York</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-body">
                <img src="https://www.w3schools.com/bootstrap/sanfran.jpg" alt="San Francisco">
                <p><strong>San Francisco</strong>
                </p>
                <p>Yes, San Fran is ours</p>
            </div>
        </div>
    </div>
</div>
<br>
<h2  class="text-center">O que nossos consumidores dizem</h2>
<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
    <h4>"Essa empresa é a melhor. Eu estou muito satisfeito com o resultado!"<br><span style="font-style:normal;">Michael Roe, Vice President, Comment Box</span></h4>
    </div>
    <div class="carousel-item">
      <h4>"Uma única palavra... WOW!!"<br><span style="font-style:normal;">John Doe, Salesman, Rep Inc</span></h4>
    </div>
    <div class="carousel-item">
      <h4>"Eu poderia ... ser mais feliz com esta empresa?"<br><span style="font-style:normal;">Chandler Bing, Actor, FriendsAlot</span></h4>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
    <span class="fas fa-angle-left" aria-hidden="true"></span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" data-slide="next">
     <span class="fas fa-angle-right" aria-hidden="true"></span>
  </a>
</div>

<div id="pricing" class="container-fluid">
    <div class="text-center">
        <h2>Preços</h2>
        <h4>Escolha um plano de pagamento que funcione para você</h4>
    </div>
    <div class="row slideanim">
        <div class="col-sm-4">
        <div class="card text-center">
            <div class="card-header">
            <h1>Basic</h1>
            </div>
            <div class="card-body">
            <p><strong>20</strong> Lorem</p>
            <p><strong>15</strong> Ipsum</p>
            <p><strong>5</strong> Dolor</p>
            <p><strong>2</strong> Sit</p>
            <p><strong>Endless</strong> Amet</p>
            </div>
            <div class="card-footer">
            <h3>R$19</h3>
            <h4>por mês</h4>
            <button class="btn btn-lg">Saiba mais.</button>
            </div>
        </div> 
        </div> 
        <div class="col-sm-4">
        <div class="card  text-center">
            <div class="card-header">
            <h1>Pro</h1>
            </div>
            <div class="card-body">
            <p><strong>50</strong> Lorem</p>
            <p><strong>25</strong> Ipsum</p>
            <p><strong>10</strong> Dolor</p>
            <p><strong>5</strong> Sit</p>
            <p><strong>Endless</strong> Amet</p>
            </div>
            <div class="card-footer">
            <h3>R$29</h3>
            <h4>por mês</h4>
            <button class="btn btn-lg">Saiba mais.</button>
            </div>
        </div> 
        </div> 
        <div class="col-sm-4">
        <div class="card text-center">
            <div class="card-header">
            <h1>Premium</h1>
            </div>
            <div class="card-body">
            <p><strong>100</strong> Lorem</p>
            <p><strong>50</strong> Ipsum</p>
            <p><strong>25</strong> Dolor</p>
            <p><strong>10</strong> Sit</p>
            <p><strong>Endless</strong> Amet</p>
            </div>
            <div class="card-footer">
            <h3>R$49</h3>
            <h4>por mês</h4>
            <button class="btn btn-lg">Saiba mais.</button>
            </div>
        </div> 
        </div> 
    </div>
</div>

<div id="contact" class="container-fluid bg-grey">
    <h2 class="text-center">CONTATO</h2>
    <div class="row">
        <div class="col-sm-5">
        <p>Contacte-nos e vamos retornar para você dentro de 24 horas.</p>
        <p><span class="fas fa-map-marker-alt"></span> R. Paulo Gontijo de Carvalho, 452 - Cerqueira César, São Paulo - SP, 05404-020</p>
        <p><span class="fas fa-mobile-alt"></span> 11 96120 0106<br>&nbsp;&nbsp; 95215 5204</p>
        <p><span class="fas fa-envelope"></span> pinheirosentulhos@gmail.com</p> 
        </div>
        <div class="col-sm-7 slideanim">
        <div class="row">
            <div class="col-sm-6 form-group">
            <input class="form-control" id="name" name="name" placeholder="Nome" type="text" required>
            </div>
            <div class="col-sm-6 form-group">
            <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
            </div>
        </div>
        <textarea class="form-control" id="comments" name="comments" placeholder="Comentário" rows="5"></textarea><br>
        <div class="row">
            <div class="col-sm-12 form-group">
            <button class="btn btn-default pull-right" type="submit">Enviar</button>
            </div>
        </div> 
        </div>
    </div>
</div>
<div id="map" style="height:400px;width:100%;"></div>
    <script>
        // Initialize and add the map
        function initMap() {
          // The location of Uluru
          var pinheirosLoc = {lat: -23.5628873, lng: -46.6840374};
          // The map, centered at Uluru
          var map = new google.maps.Map(
              document.getElementById('map'), {
                zoom: 15, 
                center: pinheirosLoc,
                styles:                 
                [
                    {
                        "featureType": "administrative",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#444444"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "all",
                        "stylers": [
                            {
                                "color": "#f2f2f2"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "color": "#c2ebaf"
                            }
                        ]
                    },
                    {
                        "featureType": "poi.park",
                        "elementType": "labels.text",
                        "stylers": [
                            {
                                "visibility": "on"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "all",
                        "stylers": [
                            {
                                "saturation": -100
                            },
                            {
                                "lightness": 45
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "color": "#ffffff"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "color": "#e1e1e1"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "color": "#ffffff"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "color": "#e2e2e2"
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "color": "#ffffff"
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "color": "#e1e1e1"
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            },
                            {
                                "saturation": "0"
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "color": "#e1e1e1"
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "all",
                        "stylers": [
                            {
                                "color": "#46bcec"
                            },
                            {
                                "visibility": "on"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "visibility": "on"
                            },
                            {
                                "saturation": "0"
                            },
                            {
                                "color": "#aadaff"
                            }
                        ]
                    }
                ]
                
            });
          // The marker, positioned at Uluru
          var marker = new google.maps.Marker({position: pinheirosLoc, map: map});
        }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAGgE7ZIGQRsrQf-AYfcCHaUj1ZN0w6l8s&callback=initMap">
    </script>
{{-- 
<div class="container contentPos">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
--}}
@endsection
