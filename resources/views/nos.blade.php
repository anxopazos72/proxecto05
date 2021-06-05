@extends('layouts.app')
@section('titulo', 'Electrodomésticos Pazos - Sobre nós')

@section('contido')

  <header id="encabezado">
   <div class="capa-verde">
    <div class="container">     
      <div class="row">
        <div class="col-md-6 mx-auto mt-4 text-center">
          <h1>Sobre nós</h1>
          <p>A nosa tenda ofrece un servizo personalizado en electrodomésticos e mais en produtos de electrónica.</p>
        </div>
      </div>
     </div>
    </div>
  </header>

  <!-- Sección Sobre nós -->
  <section id="nos" class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <h1>Un pouco de historia</h1>
          <p>A nosa tenda comezou a súa andaina en 1970, fundada por Vicente Pazos Piñeiro. Tralo seu triste falecemento o labor foi continuado pola súa muller María del Carmen Viña ata a súa xubilación. Actualmente atópase na dirección Pablo Pazos Viña coa axuda de Antonio Pazos Viña.</p>
          <p>Ó redor do ano 2000 iniciou unha etapa de expansión do negocio, ampliando os espazos adicados á atención ó publico e mailo obradoiro na parte posterior do edificio. Durante o crise económica a partir do 2008 en adiante, continuou consolidando a súa posición como líder do negocio da venda e reparación de electrodomésticos no eido do concello de Oroso e arredores.</p>
        </div>
        <div class="col-md-5">
          <img src="img/vicente.jpg" alt="" class="about-img img-fluid d-none d-md-block rounded-circle">
        </div>
      </div>
    </div>
  </section>

  <!-- Google Maps -->
  <section id="google-maps" class="bg-secondary py-5">
  	<div class="container">
    	<div class="row">
        	<div class="col">
            	<h1 class="text-center text-white mb-4">A nosa localización</h1>
                <iframe id="mapa" class="mx-auto d-block border border-primary rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2919.5398297954475!2d-8.444483285001386!3d42.966900879150764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2e5658f0e8d39f%3A0x7bb2ccd8cd300b8b!2sAvenida%20da%20Grabanxa%2C%2016%2C%2015888%20Sig%C3%BCeiro%2C%20A%20Coru%C3%B1a%2C%20Espa%C3%B1a!5e0!3m2!1sgl!2shu!4v1589272414798!5m2!1sgl!2shu"  allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </div>  
  </section>

@endsection