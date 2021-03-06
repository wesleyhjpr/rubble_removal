@extends('layouts.app')

@section('content')
{{-- <div class="jumbotron text-center bg-grey">
    <img class="img-responsive" src="{{ asset('logo.svg') }}" alt="CTA Bagulhos" style="width: 216px; height: 206px;">
    <h1>Pinheiros entulhos<br> cata bagulho e móveis</h1> 
</div> --}}
<div id="demo" class="carousel slide text-center bg-grey" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
      <li data-target="#demo" data-slide-to="3"></li>
      <li data-target="#demo" data-slide-to="4"></li>
      <li data-target="#demo" data-slide-to="5"></li>
      <li data-target="#demo" data-slide-to="6"></li>
      <li data-target="#demo" data-slide-to="7"></li>
      <li data-target="#demo" data-slide-to="8"></li>
      <li data-target="#demo" data-slide-to="9"></li>
      <li data-target="#demo" data-slide-to="10"></li>
      <li data-target="#demo" data-slide-to="11"></li>
      <li data-target="#demo" data-slide-to="12"></li>
    </ul>
    
    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="img-fluid" src="{{ asset('_img/carousel_1.jpg') }}" alt="Pinheiros cata entulhos">
      </div>
      <div class="carousel-item">
        <img class="img-fluid" src="{{ asset('_img/carousel_12.jpg') }}" alt="entulho cata bagulho">
      </div>
      <div class="carousel-item">
        <img class="img-fluid" src="{{ asset('_img/carousel_3.jpg') }}" alt="entulho papeis velhos">
      </div>
      <div class="carousel-item">
        <img class="img-fluid" src="{{ asset('_img/carousel_4.jpg') }}" alt="entulho pode de arvores">
      </div>
      <div class="carousel-item">
        <img class="img-fluid" src="{{ asset('_img/carousel_5.jpg') }}" alt="entulho gesso">
      </div> 
      <div class="carousel-item">
        <img class="img-fluid" src="{{ asset('_img/carousel_6.jpg') }}" alt="entulho madeira">
      </div>
      <div class="carousel-item">
        <img class="img-fluid" src="{{ asset('_img/carousel_7.jpg') }}" alt="entulho moveis velhos">
      </div>
      <div class="carousel-item">
        <img class="img-fluid" src="{{ asset('_img/carousel_8.jpg') }}" alt="entulho geladeira">
      </div>
      <div class="carousel-item">
        <img class="img-fluid" src="{{ asset('_img/carousel_9.jpg') }}" alt="entulho fogão">
      </div>
      <div class="carousel-item">
        <img class="img-fluid" src="{{ asset('_img/carousel_10.jpg') }}" alt="entulho metais">
      </div>
      <div class="carousel-item">
        <img class="img-fluid" src="{{ asset('_img/carousel_11.jpg') }}" alt="entulho sofá">
      </div>
      <div class="carousel-item">
        <img class="img-fluid" src="{{ asset('_img/carousel_2.jpg') }}" alt="entulho limpo">
      </div>
      <div class="carousel-item">
        <img class="img-fluid" src="{{ asset('_img/carousel_13.jpg') }}" alt="entulho 24 horas">
      </div>     
    </div>
    
    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="fas fa-angle-left" aria-hidden="true"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="fas fa-angle-right" aria-hidden="true"></span>
    </a>
  </div>
<div id="sobre-a-pinheiros-remocao-de-entulhos-e-moveis-velhos" class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
            <h2>Sobre a empresa</h2>
            <p>Olá, bem vindo a Pinheiros Entulhos. Somos uma empresa no qual oferecemos um serviço especializado em <b>retirada de entulho</b> e <b>Descarte de móveis usados</b> com o menor custo beneficio. Estando a mais de um ano no mercado a Pinheiros Entulhos realiza a <b>retirada de entulhos</b> e <b>retirada móveis velhos</b>, oferecendo um serviço de qualidade e comprometimento com nossos clientes.
                <br><br><strong>Trabalhamos com os serviços tais como:</strong>
                <br>Descarte de moveis usados
                <br>Remoção de entulhos
                <br>Retirada de Gesso
                <br>Retirada de entulhos em geral
                <br>Pode de árvores e troncos
                <br>Retirada de metais
                <br>Retirada de ferro velho
                <br>Retirada de papelão.
                <br><br>Tudo o que não for de sua serventia e esteja acumulando sujeira, nós fazemos a <b>remoção</b>!</p> 
            {{-- <p>Lorem ipsum..</p>
            <button class="btn btn-default btn-lg">Get in Touch</button>
            --}}
        </div>
        <div class="col-sm-4">
            <span class="fas fa-hand-holding-usd logo"></span>
        </div>
    </div>
</div>
    
<div class="container-fluid bg-grey">
    <div class="row">
        <div class="col-sm-4">
            <span class="fas fa-recycle logo slideanim"></span> 
        </div>
        <div class="col-sm-8">
            <h2>Retirada de entulhos do jeito certo</h2>
            <p>Nossa equipe especialista em <b>remoção de entulhos</b> é a solução perfeita para garntir que, qualquer tipo de <b>entulho</b> seja descartado da maneira correta para preservação do meio ambiente de acordo com as diretrizes da legislação.
                A entrega dos residuos é feita em locais de despejos legais de acordo com as leis antidumping, no qual se enquadra o descarte legal de <b>entulhos</b>.
                A <b>retirada de entulhos</b> é feita a partir de construções onde se tem <b>entulhos</b> de edificios, residuos de jardins, residuos comerciais e domesticos, e também, realizamos o <b>descarte de móveis</b> usados ou que não é de sua serventia.</p> 
        </div>
    </div>
</div>
<!-- Container (Services Section) -->
<div id="servicos-de-remocao-de-entulhos-e-moveis-velhos" class="container-fluid text-center">
  <h2>SERVIÇOS</h2>
  <h4>O que nós oferecemos</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4 zoom">
      <span class="fas fa-map-marker-alt logo-small"></span>
      <h4>COLETA</h4>
      <p>Temos várias equipes várias  especializada para melhor atendê-los em sua residência, condomínio, empresa, casa de campo e etc... Seja lá onde for estaremos a sua disposição!</p>
    </div>
    <div class="col-sm-4 zoom">
      <span class="fas fa-eraser logo-small"></span>
      <h4>REMOVER</h4>
      <p>Nós removemos tudo e qualquer coisa, não espere que seus escombros sejam removidos. Ligue-nos para removermos seus escombros.</p>
    </div>
    <div class="col-sm-4 zoom">
      <span class="fas fa-recycle logo-small"></span>
      <h4>RECICLAR</h4>
      <p>Levamos muito a sério o descarte de entulho, garantimos que o entulho seja entregue aos locais de despejo municipais.</p>
    </div>
  </div>
</div>
<div id="portfolio" class="container-fluid text-center bg-grey">
    <h2>Portfolio</h2>
    <h4>O que nós fazemos</h4>
    <br>
    <div class="row text-center slideanim">
        <div class="col-md-4">
            <div class="card card-body">
                <img src="{{ asset('_img/movel_velho.jpg') }}" alt="Gesso">
               {{--  <p><strong>Lorem ipsum</strong>
                </p>
                <p>Yes, we built Paris</p> --}}
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-body">
                <img src="{{ asset('_img/fogao_velho.jpg') }}" alt="entulhos de gesso">
                {{-- <p><strong>Lorem ipsum</strong>
                </p>
                <p>We built New York</p> --}}
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-body">
                <img src="{{ asset('_img/rubble(4).jpeg') }}" alt="saco de entulho">
                {{-- <p><strong>Lorem ipsum</strong>
                </p>
                <p>Yes, San Fran is ours</p> --}}
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
        <h4>"Essa empresa é a melhor. Eu estou muito satisfeito com o resultado!"<br><span style="font-style:normal;">Juliana Lopes.</span></h4>
    </div>
    <div class="carousel-item">
      <h4>"Uma única palavra... WOW!!"<br><span style="font-style:normal;">João Soares.</span></h4>
    </div>
    <div class="carousel-item">
      <h4>"Ótimo serviço prestado!"<br><span style="font-style:normal;">Bruno Silva.</span></h4>
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
<div class="col-12"><hr class="vl" align="center" width="50%"></div></div>

<div id="termo-de-contrato-remocao-de-entulhos-e-moveis-velhos" class="container-fluid">
    {{-- <div class="text-center">
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
    </div> --}}
    <h2 class="text-center"><strong>Termo de prestação de serviços<strong></h2>
    <br>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs slideanim" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#menu0">Para contratação</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu1">Formato de trabalho</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu2">Remoção de material fracionado</a>
        </li>
        <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu3">Atendimento</a>
        </li>
        <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#menu4">Preço dos serviços</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content slideanim">
        <div id="menu0" class="container tab-pane active"><br>
            <h3>Para contratação Informe:</h3>
            <p>Nome completo ou Razão Social
                <br>Cpf ou CNPJ
                <br>Endereço com cep
                <br>Telefone do contato, celular
                <br>Telefone da pessoa na obra
                <br>Quantidade estimada
                <br>Data de agendamento
            </p>
        </div>
        <div id="menu1" class="container tab-pane fade"><br>
            <h3>Formato de trabalho:</h3>
            <p>Remoção   
                <br>A remoção de materiais através de sacos tem como objetivo a inspeção e classificação dos materiais.
                <br>Classificamos os materiais em 4 tipos principais, entulho limpo, recicláveis, inservíveis e poluentes, damos assim destino correto dos materiais visando a manutenção e prevenção ao meio ambiente.
                <br>Não retiramos lixo orgânico, hospitalar, resíduos industriais e etc.
                <br>Sacos de entulhos que estiverem contaminados com resto de comida também não serão removidos.
            </p>
        </div>
        <div id="menu2" class="container tab-pane fade"><br>
            <h3>Remoção de material fracionado:</h3>
            <p>
                Todo material fracionado ou de pequeno porte deve estar acondicionado em sacos de rafia (sacos brancos de polipropileno); esse tipo de saco é encontrado em depósito de materiais de construção e padarias, é a mesma embalagem de farinha de trigo, estes sacos tem aproximadamente 75 litros.
                <br>Não removemos materiais em sacos de lixo preto ou de pouca resistência.                    
                <br>Peso e acondicionamento dos sacos;                    
                <br>Tendo como objetivo atender as normas técnicas de segurança do trabalho. Os sacos devem ter no máximo 30 kg.
                <br>Nossas equipes estão equipadas com balanças e pesarão os sacos na hora da remoção.
                <br>Caso não tenha balança acondicione os materiais da seguinte maneira: 
                <br>    
                <br>Alvenaria (resto de pisos, paredes, azulejos)&emsp;&emsp;&emsp;&emsp;- Sacos pela metade.                    
                <br>Madeira, plásticos, papelão, volumosos etc.&emsp;&emsp;&emsp;&emsp;- Sacos cheios                    
                <br>Terra, pedra, areia                        &emsp;&emsp;&emsp;&emsp;- Sacos menos que a metade                    
                <br>Gesso                                      &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;- Sacos quase cheios.
                <br>    
                <br>Os sacos não devem ser fechados, amarrados e não podem estar danificados (rasgados ou com furos).
                <br>    
                <br>Caso você cliente não tenha acondicionado desta maneira, temos duas soluções para a remoção:
                <br>Os materiais maiores que o saco, serão removidos inteiros, e cobrado o valor proporcional ao seu volume a sacos de entulhos; ex. tábua de 2,00 m por 20 cm igual a 1 saco, porta de 2,10 X 0,80 = 2 sacos.
                <br>
                <br>Opção 1 - Cobrar o dobro do valor do saco e estes não podem passar de 45 kg.
                Opção 2 - Retiramos o excesso de peso do saco e acondicionamos em um novo saco cobrando pelo novo saco mais o ensacamento.
            </p>
        </div>
        <div id="menu3" class="container tab-pane fade"><br>
            <h3>Atendimento:</h3>
            <p>
                Ligamos entre 30 minutos a 1 hora antes de nos deslocarmos para o cliente, evitando que você fique preso no local aguardando nossa equipe.
                <br>Nossas equipes saem do Butantã e nosso expediente começa às 8:00 da manhã.
                <br>Para melhor aproveitamento do dia, trabalhamos com roteiro, não tendo possibilidade de marcamos hora. 
                <br>Caso necessite de um horário aproximado, informamos a ordem de atendimento logo de manhã (é só ligar) estimamos o horário que nossa equipe deve estar no local, mas nunca marcamos hora devido oscilação do trânsito e atendimento de cada cliente.
            </p>
        </div>
        <div id="menu4" class="container tab-pane fade"><br>
            <h3>Preço dos serviços:</h3>
            <p>
                Nós estamos com o melhor custo benefício do mercado até o final do ano para você que está reformando ou construindo sua casa, apartamento, ou sua empresa.
                <br>Entre em contato com nossa equipe e vamos fazer um bom negócio para ambos os lados.
                <br><br><h4>obrigado!</h4>
                {{--<br>Serviço mínimo em apto com elevador e o nosso veículo parando próximo do elevador&emsp;&emsp;&emsp;&emsp;- R$ 140,00
                <br>
                <br>Taxa de deslocamento do veículo (contratação) até 49 sacos &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;- R$ 40,00
                <br>Obs: Nos múltiplos de 50 sacos não será cobrada a taxa de deslocamento
                <br>
                <br>
                <br>Remoção de sacos de entulho ensacados pelo cliente preço por saco
                <br>
                <br>Remoção com deslocamento até 15 m sem obstáculos (escada, rampa e etc.)
                <br>de 1 a 15 sacos                                                           &emsp;&emsp;&emsp;&emsp;&emsp;- R$ 6,00
                <br>de 16 a 35 sacos                                                          &emsp;&emsp;&emsp;&emsp;- R$ 5,00
                <br>de 36 a 50 sacos                                                          &emsp;&emsp;&emsp;&emsp;- R$ 4,00 
                <br>
                <br>Preços a acrescentar a remoção:
                <br>
                Material Poluentes (classe 3, causam mau a saúde) acrescentar a remoção --}}
            </p>
        </div>
    </div>
</div>

<div id="contato-pinheiros-remocao-de-entulhos-e-moveis-velhos" class="container-fluid bg-grey">
    <h2 class="text-center">CONTATO</h2>
    <div class="row">
        <div class="col-sm-5">
            <p>Contacte-nos e vamos retornar para você dentro de 24 horas.</p>
            <p><span class="fas fa-map-marked-alt"></span> R. Paulo Gontijo de Carvalho, 452 - Cerqueira César, São Paulo - SP, 05404-020</p>
            <p><span class="fas fa-mobile-alt"></span> 11 <a href="https://api.whatsapp.com/send?1=pt_BR&phone=5511961200106">96120 0106</a> | <a href="https://api.whatsapp.com/send?1=pt_BR&phone=5511952155204">95215 5204</a></p>
            <p><span class="fas fa-envelope"></span> pinheirosentulhos@gmail.com</p> 
        </div>
        <div class="col-sm-7 slideanim">
            {!! Form::open(['url' => '/salvar']) !!}
            <div class="row">
                <div class="col-sm-6 form-group">
                    {!! Form::text('nome', null, ['class' => 'form-control', 'placeholder' => 'Nome', 'id' => 'nome', 'required'])!!}
                </div>
                <div class="col-sm-6 form-group">                 
                    {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'E-mail', 'id' => 'email', 'required']) !!}                    
                </div>
            </div>            
            {!! Form::textarea('comentario', null, ['class' => 'form-control', 'placeholder' => 'Comentário - Por favor colocar número de telefone.', 'id' => 'comentario', 'rows' => '5', 'required']) !!}<br>            
            <div class="row">
                <div class="col-sm-12 form-group"> 
                    {!! Form::submit('Enviar', ['class' => 'btn btn-default pull-right']) !!}
                </div>
            </div>
            {!! Form::close() !!}
            <script>
                    $( document ).ready(function() {
                        $(".alert").fadeTo(3500, 500).slideUp(500, function(){
                        $(".alert").slideUp(500);
                        });
                    });                   
            </script>
                @if(Session::has('mensagem_sucesso'))
                    <div  class="alert alert-success">{{Session::get('mensagem_sucesso')}}</div>
                @endif 
        </div>
    </div>
</div>
<div id="map" style="height:400px;width:100%;"></div>
    <script>
        // Initialize and add the map
        function initMap() {
          // The location of Pinheiros
          -23.5605453, -46.6798854
          var pinheirosLoc = {lat: -23.5605453, lng: -46.6798854};
          // The map, centered at Pinheiros
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
          // The marker, positioned at Pinheiros
          var marker = new google.maps.Marker({position: pinheirosLoc, map: map});
        }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0gOBF1i9vAsXJF-KVVAQ9hJVNe3pSUFM&callback=initMap">
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
