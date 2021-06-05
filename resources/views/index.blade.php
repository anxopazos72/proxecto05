@extends('layouts.app')
@section('titulo', 'Electrodomésticos Pazos')

@section('contido')
  <!-- Carrusel de imaxes -->
  <section id="presentacion">
    <div id="carrusel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carrusel" data-slide-to="0" class="active"></li>
        <li data-target="#carrusel" data-slide-to="1"></li>
        <li data-target="#carrusel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item carrusel-imaxe-1 active">
          <div class="container">
            <div class="carousel-caption d-none d-sm-block text-right mb-5">
              <h1 class="display-3 d-inline">Reparación</h1>
              <p class="lead d-inline-block mt-3">Arranxo de avarías más comúns en electrodomésticos de todo tipo e condición: televisores, lavavadoras, frigoríficos, radios,...</p>
            </div>
          </div>
        </div>

        <div class="carousel-item carrusel-imaxe-2">
          <div class="container">
            <div class="carousel-caption d-none d-sm-block text-right mb-5">
              <h1 class="display-3 d-inline">Venda</h1>
              <p class="lead d-inline-block mt-3">Amplo surtido de electrodomésticos e produtos electrónicos de consumo á venda para satisface-las súas necesidades e para o seu confort.</p>
            </div>
          </div>
        </div>

        <div class="carousel-item carrusel-imaxe-3">
          <div class="container">
            <div class="carousel-caption d-none d-sm-block text-right mb-5">
              <h1 class="display-3 d-inline">Profesionalidade</h1>
              <p class="lead d-inline-block mt-3">Atención personalizada ó cliente conforme ós seus intereses e últimas novidades en produtos de electrónica, imaxe, son, telefonía, etc.</p>
            </div>
          </div>
        </div>
      </div>

      <a href="#carrusel" data-slide="prev" class="carousel-control-prev">
        <span class="carousel-control-prev-icon"></span>
      </a>

      <a href="#carrusel" data-slide="next" class="carousel-control-next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </section>

  <!-- Sección de liñas de produtos -->
  <section id="lina-iconas" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-3 text-center">
          <i class="fa fa-archive mb-2"></i>
          <h3>Liña branca</h3>
          <p>Estufas, fornos, lavadoras, lavavaixelas, frigoríficos, secadoras.</p>
        </div>
        <div class="col-md-4 mb-3 text-center">
          <i class="fa fa-adjust mb-2"></i>
          <h3>Liña marrón</h3>
          <p>Televisores, radios, vídeos, equipos de música, telefonía.</p>
        </div>
        <div class="col-md-4 mb-3 text-center">
          <i class="fa fa-calculator mb-2"></i>
          <h3>Pequeno electrodoméstico</h3>
          <p>Cafeteiras, aspiradoras, batidoras, fritidoras, pranchas</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Sección de Tien21 -->
  <section id="tien21" class="p-5">
    <div class="capa-verde">
      <div class="row">
        <div class="col">
          <div class="container pt-3">
            <h1>Tien 21</h1>
            <p class="d-none d-md-block">40 anos contigo. Seguimos moi preto de ti. Máis de 800 tendas ó teu servizo</p>
            <a href="https://www.tien21.es/" target="_blank" class="btn btn-outline-light mb-2"><i class="fa fa-tv"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Sección da tenda -->
  <section id="tenda" class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-6 align-self-center">
          <h3>A nosa tenda</h3>
          <p>Queres coñecer que produtos están agardando por ti, que aparatos che van face-la vida máis sinxela e máis entretida?</p>
          <a href="/produtos" class="btn btn-outline-danger btn-lg mb-2">Entrar</a>
        </div>
        <div class="col-md-6 align-self-center">
          <a href="produtos.html"><img src="img/pazos.jpg" id="pazos" class="img-fluid"  alt="Electrodomésticos Pazos"></a>
        </div>
      </div>
    </div>
  </section>

  <!-- Vídeo -->
  <section id="video-play">
    <div class="capa-verde">
      <div class="row">
        <div class="col">
          <div class="container p-5">
            <a
              href="#"
              class="video"
              data-video="https://www.youtube.com/embed/resPD0KaT8E"
              data-toggle="modal"
              data-target="#videoModal"
            >
              <i class="fa fa-play"></i>
            </a>
            <h1>Que facemos?</h1>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Newsletter -->
  <section id="newsletter" class="text-center p-5 bg-info text-white">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1>Subscríbase á nosa newsletter</h1>
          <p>Recibirá as últimas noticias e detalles sobre os produtos máis recentes ó seu dispor.</p>
          @if(Session::has('newsletter_enviada'))
               <div class="alert alert-success" role="alert">
               {{Session::get('newsletter_enviada')}}
               </div>
          @endif
          <form class="form-inline justify-content-center" method="POST" action="{{route('newsletter')}}">
          @csrf
            <label class="sr-only" for="nome">Nome completo</label>
            <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" name="nome" placeholder="Nome">

            <label class="sr-only" for="email">Enderezo electrónico</label>
            <input type="email" class="form-control mb-2 mr-sm-2 mb-sm-0" name="email" placeholder="Enderezo electrónico">
            <button class="btn btn-outline-light text-dark" type="submit">Enviar</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  
    <!-- Modal do vídeo -->
  <div class="modal fade" id="videoModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <button class="close" data-dismiss="modal"><span>&times;</span></button>
          <iframe src="" height="350" width="100%" frameborder="0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>

@endsection