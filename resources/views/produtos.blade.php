@extends('layouts.app')
@section('titulo', 'Electrodomésticos Pazos')

@section('contido')

  <header id="encabezado">
   <div class="capa-verde">
    <div class="container">     
      <div class="row">
        <div class="col-md-6 mx-auto mt-4 text-center">
          <h1>Produtos</h1>
          <p>A nosa tenda ofrece un amplo surtido de electrodomésticos e produtos de electrónica.</p>
        </div>
      </div>
     </div>
    </div>
  </header>

  <!-- Sección de Produtos -->
  <section id="produtos" class="py-5">
    <div class="container">
      <div class="row">
      
      @foreach($produtos as $produto)
        <div class="col-md-3">
          <div class="card text-center mb-3">
            <div class="card-header">
              <h3>{{$produto->nome}}</h3>
            </div>
            <div class="card-body">
              <a href="{{$produto->imaxe}}" data-toggle="lightbox" data-gallery="img-gallery">
			  <img class="card-img-top" src="{{$produto->imaxe}}"></a>
              <p class="card-text">{{$produto->descricion}}</p>
              
              <a href="#" class="btn btn-danger btn-block mt-2">Mercar</a>
            </div>
            <div class="card-footer text-danger">
              <h2>{{$produto->prezo}} €</h2>
            </div>
          </div>
        </div>
        @endforeach
                
      </div>
    </div>
  </section>

  <!-- Preguntas Frecuentes -->
  <section id="faq" class="p-5 bg-info text-white">
    <div class="container">
      <h1 class="text-center">Preguntas Frecuentes</h1>
      <hr>
      <div class="row">
        <div class="col-md-6">
          <div id="acordeon">
            <div class="card">
              <div class="card-header" id="encabezadoAcordeon1">
                <h5 class="mb-0">
                  <a data-toggle="collapse" data-parent="#acordeon" href="#colapsar1">
                    Que garantía recibo nas miñas compras?
                  </a>
                </h5>
              </div>

              <div id="colapsar1" class="collapse">
                <div class="card-body">
                  Depende do produto comprado, entre un e tres anos. Debe comprobalo na documentación que se lle achega dentro da caixa ou envoltorio. Para xustifica-la garantía precisará amosa-la factura de compra.
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="encabezadoAcordeon2">
                <h5 class="mb-0">
                  <a data-toggle="collapse" data-parent="#acordeon" href="#colapsar2">
                    Cal é o prazo de envío?
                  </a>
                </h5>
              </div>

              <div id="colapsar2" class="collapse">
                <div class="card-body">
                  Os envíos pagados con tarceta de crédito/débito entréganse en 2-3 días. So o pedido se paga con transferencia  bancaria ou ingreso a conta ó prazo engádese o periodo de procesamiento do pagamento do banco, que soe ser de 1 a 3 días laborais.
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="encabezadoAcordeon3">
                <h5 class="mb-0">
                  <a data-toggle="collapse" data-parent="#acordeon" href="#colapsar3">
                    Que inclúe a instalación do electrodoméstico?
                  </a>
                </h5>
              </div>

              <div id="colapsar3" class="collapse">
                <div class="card-body">
                  En <strong>Electrodomésticos Pazos</strong> dispoñemos dun servizo de instalación de electrodomésticos chamado <i>Servizo PLUS</i> co que ofrecemos ós nosos clientes unha entraga do electrodomésticos no seu fogar, incluía a súa carga e dubida ó domicilio e unha instalación básica.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div id="accordion">
            <div class="card">
              <div class="card-header" id="encabezadoAcordeon4">
                <h5 class="mb-0">
                  <a data-toggle="collapse" data-parent="#acordeon" href="#colapsar4">
                    Recibín un produto distinto ó comprado
                  </a>
                </h5>
              </div>

              <div id="colapsar4" class="collapse">
                <div class="card-body">              
					En <strong>Electrodomésticos Pazos</strong> movemos tódolos días millerios de referencias nos nosos almacéns, polo que algunha vez pode haber un erro puntual. Nese caso só ten que nos evisar mediante correo electrónico e achegarnos fotos do produto enviado por erro. Pasaremos a recollelo sen coste adicional ningún e enviarémo-lo produto correcto á maior brevidade posible.
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="encabezadoAcordeon5">
                <h5 class="mb-0">
                  <a data-toggle="collapse" data-parent="#acordeon" href="#colapsar5">
                    Podo devolve-lo produto mercado?
                  </a>
                </h5>
              </div>

              <div id="colapsar5" class="collapse">
                <div class="card-body">
                  Si, podes devolve-lo pedido sempre e cundo esteas dentro dos 14 días naturais que marca a lei, sen ningún motivo. Esta devolución chámase <i>Desistimento de compra</i>. Para devolvelo simplemente debes enviarnos un correo electrónico.
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="encabezadoAcordeon6">
                <h5 class="mb-0">
                  <a data-toggle="collapse" data-parent="#acordeon" href="#colapsar6">
                    Podo cambia-los datos da miña factura?
                  </a>
                </h5>
              </div>

              <div id="colapsar6" class="collapse">
                <div class="card-body">
                  Non. A lei non nos permite modifica-las datas nin os datos persoais das facturas, a non ser que se producira un erro na identificación fiscal, pero non se poderá cambiar de titular.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>




@endsection