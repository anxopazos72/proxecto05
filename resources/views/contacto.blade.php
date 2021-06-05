@extends('layouts.app')
@section('titulo', 'Electrodomésticos Pazos - Contacto')

@section('contido')

  <header id="encabezado">
   <div class="capa-verde">
    <div class="container">     
      <div class="row">
        <div class="col-md-6 mx-auto mt-4 text-center">
          <h1>Contacto</h1>
          <p>Non dubides en poñerte en contacto connosco para calquera cuestión</p>
        </div>
      </div>
     </div>
    </div>
  </header>

  <!-- Información e Formulario de contacto -->
  <section id="contact" class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card bg-light p-4">
            <div class="card-body text-info">
              <h4>Enderezo</h4>
              <p>Avda Grabanxa, 16. Sigüeiro</p>
              <h4>Email</h4>
              <p>electropazos@hotmail.com</p>
              <h4>Teléfono</h4>
              <p>981 691 436</p>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <div class="card p-4">
            <div class="card-body">
              <h3 class="text-center">Enche este formulario</h3>
              @if(Session::has('mensaxe_enviada'))
               <div class="alert alert-success text-center" role="alert">
               {{Session::get('mensaxe_enviada')}}
               </div>
        	  @endif
              <hr>              
              <form action="{{route('mensaxe')}}" method="post">
              @csrf
              <div class="row">          
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" name="nome" placeholder="Nome">
                    @error('nome')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" name="apelidos" placeholder="Apelidos">
                    @error('apelidos')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email">
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="tel" class="form-control" name="telefono" placeholder="Teléfono">
                  </div>
                </div>
                
                
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea class="form-control" name="mensaxe" placeholder="Mensaxe" ></textarea>
                    @error('mensaxe')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                </div>
                <div class="col-md-12">
                  <input type="submit" class="btn btn-outline-danger btn-block">
                </div>                                
              </div>
              </form>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Sección de empregados -->
  <section id="empregados" class="py-5 text-center bg-info text-white">
    <div class="container">
      <h1>Os nosos empregados</h1>
      <hr>
      <div class="row">
        <div class="col-md-3">
          <a href="img/persoa1.jpg" data-toggle="lightbox" data-gallery="img-gallery">
          	<img src="img/persoa1.jpg" alt="Luisa Martínez" class="img-fluid rounded-circle mb-2">
           </a>
          <h4>Luisa Martínez</h4>
          <small>Vendas</small>
        </div>
        <div class="col-md-3">
         <a href="img/persoa2.jpg" data-toggle="lightbox" data-gallery="img-gallery">
          <img src="img/persoa2.jpg" alt="Margarida Pérez" class="img-fluid rounded-circle mb-2">
         </a>
          <h4>Margarida Pérez</h4>
          <small>Márketing</small>
        </div>
        <div class="col-md-3">
         <a href="img/persoa3.jpg" data-toggle="lightbox" data-gallery="img-gallery">
          <img src="img/persoa3.jpg" alt="Pablo Pazos" class="img-fluid rounded-circle mb-2">
         </a>
          <h4>Pablo Pazos</h4>
          <small>Director</small>
        </div>
        <div class="col-md-3">
         <a href="img/persoa4.jpg" data-toggle="lightbox" data-gallery="img-gallery">
          <img src="img/persoa4.jpg" alt="Antonio Pazos" class="img-fluid rounded-circle mb-2">
         </a>	
          <h4>Antonio Pazos</h4>
          <small>Recepcionista</small>
        </div>
      </div>
    </div>
  </section>

@endsection