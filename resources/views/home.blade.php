@extends('layouts.plantilla')


@section('content')

<header>
 
</header>

<main role="main">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label=" :  " preserveAspectRatio="xMidYMid slice" focusable="false"><title> </title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em"> </text></svg> -->
        <img class="d-block w-100" src="{{ asset('dist/img/banner-p1.png') }}" alt="slide 1">
        <div class="container">
          <div class="carousel-caption text-left">
           <!--  <h1>Título 1.</h1>
            <p>Contenido 1.</p> -->
            <!-- <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p> -->
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('dist/img/banner-p2.png') }}" alt="slide 2">
        <div class="container">
          <div class="carousel-caption">
           <!--  <h1>Título 2.</h1>
            <p>Contenido 2.</p> -->
          <!--   <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p> -->
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('dist/img/banner-c1.png') }}" alt="slide 3">
        <div class="container">
          <div class="carousel-caption">
           <!--  <h1>Título 2.</h1>
            <p>Contenido 2.</p> -->
          <!--   <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p> -->
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('dist/img/banner-c2.png') }}" alt="slide 4">
        <div class="container">
          <div class="carousel-caption">
           <!--  <h1>Título 2.</h1>
            <p>Contenido 2.</p> -->
          <!--   <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p> -->
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('dist/img/banner-c3.png') }}" alt="slide 5">
        <div class="container">
          <div class="carousel-caption">
           <!--  <h1>Título 2.</h1>
            <p>Contenido 2.</p> -->
          <!--   <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p> -->
          </div>
        </div>
      </div>

     <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('dist/img/banner-c4.png') }}" alt="slide 6">
        <div class="container">
          <div class="carousel-caption">
           <!--  <h1>Título 2.</h1>
            <p>Contenido 2.</p> -->
          <!--   <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p> -->
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <img class="d-block w-100" src="{{ asset('dist/img/banner-c5.png') }}" alt="slide 7">
        <div class="container">
          <div class="carousel-caption">
           <!--  <h1>Título 2.</h1>
            <p>Contenido 2.</p> -->
          <!--   <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p> -->
          </div>
        </div>
      </div>

    </div>
    <button class="carousel-control-prev" type="button" data-target="#myCarousel" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#myCarousel" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Siguiente</span>
    </button>
  </div>


  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Content Wrapper. Contains page content -->
     <div class="wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          @if ( session('mensaje') )
            <div class="alert alert-success text-center"><h5>{{ session('mensaje') }}</h5></div>
          @endif
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="tittle-h1">Carroza No. 1</h1>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
    
        <!-- Main content -->
        <section class="content">
    
          <!-- Default box -->
          <div class="card card-solid">
            <div class="card-body">
              <div class="row">
                <div class="col-12 col-sm-6 jaime">
                  <h3 class="d-inline-block d-sm-none">Homenaje a los Mitos y Leyendas del Huila</h3>
                  <div class="col-12">
                    <img src="dist/img/carroza-1-1.jpeg" class="product-image thumb1" alt="Product Image">
                  </div>
                  <div class="col-12 product-image-thumbs">
                    <div class="product-image-thumb thumb1 active"><img src="dist/img/carroza-1-1.jpeg" alt="Carroza Image1"></div>
                    <div class="product-image-thumb thumb1"><img src="dist/img/carroza-1-2.png" alt="Carroza Image2"></div>
                    <div class="product-image-thumb thumb1"><img src="dist/img/carroza-1-3.jpg" alt="Carroza Image3"></div>
                    <div class="product-image-thumb thumb1"><img src="dist/img/carroza-1-4.jpg" alt="Carroza Image4"></div>
                   <!--  <div class="product-image-thumb thumb1"><img src="dist/img/photo5.jpg" alt="Carroza Image5"></div> -->
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <h3 class="my-3">Homenaje a los Mitos y Leyendas del Huila</h3>
                  <p>Parametros: Reina, Edecán, Grupo de danza, Comparsa, Grupo de rajaleñas</p>
    
                  <hr>
    
                  <div class="py-2 px-3 mt-4">
                    <h5 class="mb-0">
                      Centro de Desarrollo Agroempresarial y Turístico del Huila
                    </h5>
                    <h4 class="mt-0">
                      <small>Muestra cultural "Homenaje a la cultura y folclor Plateño"</small>
                    </h4>
                  </div>
    
                  <div class="mt-4">
                    <div class="btn btn-primary btn-lg btn-flat" data-toggle="modal" data-target="#modal-default">
                      <i class="fa-solid fa-thumbs-up fa-lg mr-2"></i>
                      Registrar voto
                    </div>
                    <div class="btn btn-default btn-lg btn-flat">
                      <!-- <i class="fas fa-heart fa-lg mr-2"></i> -->
                      <i class="fa-solid fa-heart fa-beat fa-lg mr-2"></i>
                      Carroza 1
                    </div>
                  </div>
                </div>
              </div>
              <div class="row mt-4">
                <nav class="w-100">
                  <div class="nav nav-tabs" id="product-tab" role="tablist">
                    <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Descripción</a>
                  </div>
                </nav>
                <div class="tab-content p-3" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"> MITOS: llamamos mitos en general a una serie de personificaciones de fuerzas naturales. LEYENDAS: son narraciones que tienen principio en recuerdos históricos, o en hazañas. Los mitos y leyendas convergen en la imaginación, la veneración por los orígenes, por lo mágico y extraordinario de la existencia. </div>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
              <div class="modal-content">
                <form action="{{route('voto.store')}}" method="post">
                  @csrf
                <div class="modal-header">
                  <h4 class="modal-title">Carroza No. 1</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Homenaje a los Mitos y Leyendas del Huila</p>
                  <div class="form-group">
                    <label for="modalInputIdent">Número de Identificación</label>
                    <div class="input-group mb-2 mr-sm-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-user"></i></div>
                      </div>
                      <input type="number" name="modalInputIdent" class="form-control" id="modalInputIdent" placeholder="Número de Identificación" required>
                    </div>
                    @error('modalInputIdent')
                        <br>
                        <small>*{{$message}}</small>
                        <br>
                      @enderror

                  </div>
                  <div class="form-group">
                    <label for="modalInputEmail">Correo electrónico</label>
                    <div class="input-group mb-2 mr-sm-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa-solid fa-envelope"></i></div>
                      </div>
                      <input type="email" name="modalInputEmail" class="form-control" id="modalInputEmail" placeholder="Email" required>
                      <input type="hidden" name="modalInputCarroza" class="form-control" value="C1">
                    </div>
                  </div>

                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                  <button type="button" class="btn btn-primary">Registrar voto</button>
                </div>
              </form>
              </div>
            <!-- /.modal-content -->
          </div>
        <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->



       <!-- Content Header (Page header) -->
       <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Carroza No. 2</h1>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
    
          <!-- Default box -->
          <div class="card card-solid">
            <div class="card-body">
              <div class="row">
                <div class="col-12 col-sm-6">
                  <h3 class="d-inline-block d-sm-none">Homenaje a los trajes típicos del baile San Juanero Huilense</h3>
                  <div class="col-12">
                    <img src="dist/img/carroza-2-1.jpeg" class="product-image thumb2" alt="Product Image">
                  </div>
                  <div class="col-12 product-image-thumbs">
                    <div class="product-image-thumb thumb2 active"><img src="dist/img/carroza-2-1.jpeg" alt="Carroza Image1"></div>
                    <div class="product-image-thumb thumb2" ><img src="dist/img/carroza-2-2.png" alt="Carroza Image2"></div>
                    <div class="product-image-thumb thumb2" ><img src="dist/img/carroza-2-3.jpg" alt="Carroza Image3"></div>
                    <div class="product-image-thumb thumb2" ><img src="dist/img/carroza-2-4.jpg" alt="Carroza Image4"></div>
                    <!-- <div class="product-image-thumb thumb2" ><img src="dist/img/photo5.jpg" alt="Carroza Image5"></div> -->
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <h3 class="my-3">Homenaje a los trajes típicos del baile San Juanero Huilense</h3>
                  <p>Parametros: Reina, Edecán, Grupo de danza, Comparsa, Grupo de rajaleñas</p>
    
                  <hr>
                  
                  <div class="py-2 px-3 mt-4">
                    <h5 class="mb-0">
                      Centro de Desarrollo Agroempresarial y Turístico del Huila
                    </h5>
                    <h4 class="mt-0">
                      <small>Homenaje a la cultura y folclor Plateño </small>
                    </h4>
                  </div>
                
                  <div class="mt-4">
                      <div class="btn btn-primary btn-lg btn-flat" data-toggle="modal" data-target="#modal-carroza2">
                      <!-- <i class="fas fa-cart-plus fa-lg mr-2"></i> -->
                        <i class="fa-solid fa-thumbs-up fa-lg mr-2"></i>
                        Registrar voto
                      </div>
      
                      <div class="btn btn-default btn-lg btn-flat">
                        <!-- <i class="fas fa-heart fa-lg mr-2"></i> -->
                        <i class="fa-solid fa-heart fa-beat fa-lg mr-2"></i>
                        Carroza 2
                      </div>
                    </div>
                </div>
              </div>
              <div class="row mt-4">
                <nav class="w-100">
                  <div class="nav nav-tabs" id="product-tab" role="tablist">
                    <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Descripción</a>
                  </div>
                </nav>
                <div class="tab-content p-3" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"> Majestuosidad y creatividad. Los trajes del hombre y la mujer que hoy se lucen en las fiestas sampedrinas, fueron inspirados en los vestidos de los antepasados, pero mejorados sustancialmente por sugerencia de los mismos parejos para facilitar los movimientos del baile. Para bailar el sanjuanero las mujeres lucen vestidos decorados con bordados, flores, zapatos planos y una corona de flores naturales que destaca la belleza femenina. Los hombres también visten de blanco; una camisa, pantalón delgado, un pañuelo rojo y un sombrero pintao. El traje tí­pico del hombre está conformado por sombrero de pieza (suaceño) o de pindo, camisa blanca o de colores con pechera bordada, en colores o hecha en tela rayada en otro color, pañuelo rabo'e gallo rojo en satí­n, poncho o ruana calentana, cinturón de tres hebillas, pantalón a rayas de paño o dril samacá y bota. El parejo calza alpargatas de fique. </div>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <div class="modal fade" id="modal-carroza2">
            <div class="modal-dialog">
              <div class="modal-content">
                <form action="{{route('voto.store')}}" method="post">
                  @csrf
                <div class="modal-header">
                  <h4 class="modal-title">Carroza No. 2</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Homenaje a los trajes típicos del baile San Juanero Huilense</p>
                  <div class="form-group">
                    <label for="modalInputIdent">Número de Identificación</label>
                    <div class="input-group mb-2 mr-sm-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-user"></i></div>
                      </div>
                      <input type="number" name="modalInputIdent" class="form-control" id="modalInputIdent" placeholder="Número de Identificación" required>
                    </div>

                  </div>
                  <div class="form-group">
                    <label for="modalInputEmail">Correo electrónico</label>
                    <div class="input-group mb-2 mr-sm-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa-solid fa-envelope"></i></div>
                      </div>
                      <input type="email" name="modalInputEmail" class="form-control" id="modalInputEmail" placeholder="Email" required>
                      <input type="hidden" name="modalInputCarroza" class="form-control" value="C2">
                    </div>
                  </div>

                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                  <button type="button" class="btn btn-primary">Registrar voto</button>
                </div>
              </form>
              </div>
            <!-- /.modal-content -->
          </div>
        <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->


        <!-- Content Header (Page header) -->
       <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Carroza No. 3</h1>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
    
          <!-- Default box -->
          <div class="card card-solid">
            <div class="card-body">
              <div class="row">
                <div class="col-12 col-sm-6">
                  <h3 class="d-inline-block d-sm-none">Homenaje a la gastronomía de las fiestas Sampredrinas en el Municipio de La Plata</h3>
                  <div class="col-12">
                    <img src="dist/img/carroza-3-1.jpeg" class="product-image thumb3" alt="Product Image">
                  </div>
                  <div class="col-12 product-image-thumbs">
                    <div class="product-image-thumb thumb3 active"><img src="dist/img/carroza-3-1.jpeg" alt="Carroza Image1"></div>
                    <div class="product-image-thumb thumb3" ><img src="dist/img/carroza-3-2.png" alt="Carroza Image2"></div>
                    <div class="product-image-thumb thumb3" ><img src="dist/img/carroza-3-3.jpg" alt="Carroza Image3"></div>
                    <div class="product-image-thumb thumb3" ><img src="dist/img/carroza-3-4.jpg" alt="Carroza Image4"></div>
                    <!-- <div class="product-image-thumb thumb3" ><img src="dist/img/photo2.png" alt="Carroza Image5"></div> -->
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <h3 class="my-3">Homenaje a la gastronomía de las fiestas Sampredrinas en el Municipio de La Plata</h3>
                  <p>Parametros: Reina, Edecán, Grupo de danza, Comparsa, Grupo de rajaleñas.</p>
    
                  <hr>

                  <div class="py-2 px-3 mt-4">
                    <h5 class="mb-0">
                      Centro de Desarrollo Agroempresarial y Turístico del Huila
                    </h5>
                    <h4 class="mt-0">
                      <small>Homenaje a la cultura y folclor Plateño </small>
                    </h4>
                  </div>
    
                  <div class="mt-4">
                      <div class="btn btn-primary btn-lg btn-flat" data-toggle="modal" data-target="#modal-carroza3">
                      <!-- <i class="fas fa-cart-plus fa-lg mr-2"></i> -->
                        <i class="fa-solid fa-thumbs-up fa-lg mr-2"></i>
                        Registrar voto
                      </div>
      
                      <div class="btn btn-default btn-lg btn-flat">
                        <!-- <i class="fas fa-heart fa-lg mr-2"></i> -->
                        <i class="fa-solid fa-heart fa-beat fa-lg mr-2"></i>
                        Carroza 3
                      </div>
                    </div>
                </div>
              </div>
              <div class="row mt-4">
                <nav class="w-100">
                  <div class="nav nav-tabs" id="product-tab" role="tablist">
                    <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Descripción</a>
                  </div>
                </nav>
                <div class="tab-content p-3" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">  En San Pedro es la oportunidad de probar delicias culinarias en las diferentes muestras gastronómicas que se presentan a lo largo de las celebraciones. Usualmente, la Feria Gastronómica que acompaña estas fiestas se deleitan, en diferentes puestos de comida, allí se pueden degustar los mejores platos regionales como: La mistela: un almíbar de frutas con aguardiente. Achiras: bizcochos crujientes de harina. Asado Huilense: un asado de cerdo marinado con cerveza y especias que se realiza en un horno de leña. Los insulsos: una especie de natilla o tamal que puede ser de maíz o arroz, según la región donde se pruebe. Un plan complementario a este tour gastronómico durante las fiestas de San Pedro es pasar por los puestos de artesanías aledaños para comprar prendas o accesorios autóctonos. Un ejemplo de esto es el Sombrero de Suaza, una réplica de una chiva o buses escalera y ponchos, entre otros. </div>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <div class="modal fade" id="modal-carroza3">
            <div class="modal-dialog">
              <div class="modal-content">
                <form action="{{route('voto.store')}}" method="post">
                  @csrf
                <div class="modal-header">
                  <h4 class="modal-title">Carroza No. 3</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Homenaje a la gastronomía de las fiestas Sampredrinas en el Municipio de La Plata</p>
                  <div class="form-group">
                    <label for="modalInputIdent">Número de Identificación</label>
                    <div class="input-group mb-2 mr-sm-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-user"></i></div>
                      </div>
                      <input type="number" name="modalInputIdent" class="form-control" id="modalInputIdent" placeholder="Número de Identificación" required>
                    </div>

                  </div>
                  <div class="form-group">
                    <label for="modalInputEmail">Correo electrónico</label>
                    <div class="input-group mb-2 mr-sm-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa-solid fa-envelope"></i></div>
                      </div>
                      <input type="email" name="modalInputEmail" class="form-control" id="modalInputEmail" placeholder="Email" required>
                      <input type="hidden" name="modalInputCarroza" class="form-control" value="C3">
                    </div>
                  </div>

                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                  <button type="button" class="btn btn-primary">Registrar voto</button>
                </div>
              </form>
              </div>
            <!-- /.modal-content -->
          </div>
        <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->


        <!-- Content Header (Page header) -->
       <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Carroza No. 4</h1>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
    
          <!-- Default box -->
          <div class="card card-solid">
            <div class="card-body">
              <div class="row">
                <div class="col-12 col-sm-6">
                  <h3 class="d-inline-block d-sm-none">Homenaje a los concursos tradicionales del San Pedro</h3>
                  <div class="col-12">
                    <img src="dist/img/carroza-4-1.jpeg" class="product-image thumb4" alt="Product Image">
                  </div>
                  <div class="col-12 product-image-thumbs">
                    <div class="product-image-thumb thumb4 active"><img src="dist/img/carroza-4-1.jpeg" alt="Carroza Image1"></div>
                    <div class="product-image-thumb thumb4" ><img src="dist/img/carroza-4-2.png" alt="Carroza Image2"></div>
                    <div class="product-image-thumb thumb4" ><img src="dist/img/carroza-4-3.jpg" alt="Carroza Image3"></div>
                    <div class="product-image-thumb thumb4" ><img src="dist/img/carroza-4-4.jpg" alt="Carroza Image4"></div>
                  <!--   <div class="product-image-thumb thumb4" ><img src="dist/img/photo2.png" alt="Carroza Image5"></div> -->
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <h3 class="my-3">Homenaje a los concursos tradicionales del San Pedro</h3>
                  <p>Parametros: Reina, Edecán, Grupo de danza, Comparsa, Grupo de rajaleñas.</p>
    
                  <hr>

                  <div class="py-2 px-3 mt-4">
                    <h5 class="mb-0">
                      Centro de Desarrollo Agroempresarial y Turístico del Huila
                    </h5>
                    <h4 class="mt-0">
                      <small>Homenaje a la cultura y folclor Plateño </small>
                    </h4>
                  </div>
    
                 <div class="mt-4">
                      <div class="btn btn-primary btn-lg btn-flat" data-toggle="modal" data-target="#modal-carroza4">
                      <!-- <i class="fas fa-cart-plus fa-lg mr-2"></i> -->
                        <i class="fa-solid fa-thumbs-up fa-lg mr-2"></i>
                        Registrar voto
                      </div>
      
                      <div class="btn btn-default btn-lg btn-flat">
                        <!-- <i class="fas fa-heart fa-lg mr-2"></i> -->
                        <i class="fa-solid fa-heart fa-beat fa-lg mr-2"></i>
                        Carroza 4
                      </div>
                    </div>
                </div>
              </div>
              <div class="row mt-4">
                <nav class="w-100">
                  <div class="nav nav-tabs" id="product-tab" role="tablist">
                    <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Descripción</a>
                  </div>
                </nav>
                <div class="tab-content p-3" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"> Encuentros de música, danza y concursos. Son espacios culturales que tienen como objetivo afianzar la identidad cultural huilense; se presentan danzas departamentales, nacionales e internacionales, concursos de baile del bambuco tradicional y de Sanjuanero Huilense y encuentros de música departamental, rajaleñas, música campesina, rumba opita, música nacional e internacional, carrera de encostalados, la vara de premio. </div>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          
          <div class="modal fade" id="modal-carroza4">
            <div class="modal-dialog">
              <div class="modal-content">
                <form action="{{route('voto.store')}}" method="post">
                  @csrf
                <div class="modal-header">
                  <h4 class="modal-title">Carroza No. 4</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Homenaje a los concursos tradicionales del San Pedro</p>
                  <div class="form-group">
                    <label for="modalInputIdent">Número de Identificación</label>
                    <div class="input-group mb-2 mr-sm-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-user"></i></div>
                      </div>
                      <input type="number" name="modalInputIdent" class="form-control" id="modalInputIdent" placeholder="Número de Identificación" required>
                    </div>

                  </div>
                  <div class="form-group">
                    <label for="modalInputEmail">Correo electrónico</label>
                    <div class="input-group mb-2 mr-sm-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa-solid fa-envelope"></i></div>
                      </div>
                      <input type="email" name="modalInputEmail" class="form-control" id="modalInputEmail" placeholder="Email" required>
                      <input type="hidden" name="modalInputCarroza" class="form-control" value="C4">
                    </div>
                  </div>

                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                  <button type="button" class="btn btn-primary">Registrar voto</button>
                </div>
              </form>
              </div>
            <!-- /.modal-content -->
          </div>
        <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

          
        <!-- Content Header (Page header) -->
       <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>Carroza No. 5</h1>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
    
          <!-- Default box -->
          <div class="card card-solid">
            <div class="card-body">
              <div class="row">
                <div class="col-12 col-sm-6">
                  <h3 class="d-inline-block d-sm-none">Homenaje al origen de las festividades Sampedrinas en el Municipio de La Plata</h3>
                  <div class="col-12">
                    <img src="dist/img/carroza-5-1.jpeg" class="product-image thumb5" alt="Product Image">
                  </div>
                  <div class="col-12 product-image-thumbs">
                    <div class="product-image-thumb thumb5 active"><img src="dist/img/carroza-5-1.jpeg" alt="Carroza Image1"></div>
                    <div class="product-image-thumb thumb5" ><img src="dist/img/carroza-5-2.png" alt="Carroza Image2"></div>
                    <div class="product-image-thumb thumb5" ><img src="dist/img/carroza-5-3.jpg" alt="Carroza Image3"></div>
                    <div class="product-image-thumb thumb5" ><img src="dist/img/carroza-5-4.jpg" alt="Carroza Image4"></div>
                   <!--  <div class="product-image-thumb thumb5" ><img src="dist/img/photo2.jpg" alt="Carroza Image5"></div> -->
                  </div>
                </div>
                <div class="col-12 col-sm-6">
                  <h3 class="my-3">Homenaje al origen de las festividades Sampedrinas en el Municipio de La Plata</h3>
                  <p>Parametros: Reina, Edecán, Grupo de danza, Comparsa, Grupo de rajaleñas.</p>
    
                  <hr>

                  <div class="py-2 px-3 mt-4">
                    <h5 class="mb-0">
                      Centro de Desarrollo Agroempresarial y Turístico del Huila
                    </h5>
                    <h4 class="mt-0">
                      <small>Homenaje a la cultura y folclor Plateño </small>
                    </h4>
                  </div>
    
                  <div class="mt-4">
                      <div class="btn btn-primary btn-lg btn-flat" data-toggle="modal" data-target="#modal-carroza5">
                      <!-- <i class="fas fa-cart-plus fa-lg mr-2"></i> -->
                        <i class="fa-solid fa-thumbs-up fa-lg mr-2"></i>
                        Registrar voto
                      </div>
      
                      <div class="btn btn-default btn-lg btn-flat">
                        <!-- <i class="fas fa-heart fa-lg mr-2"></i> -->
                        <i class="fa-solid fa-heart fa-beat fa-lg mr-2"></i>
                        Carroza 5
                      </div>
                    </div>
                </div>
              </div>
              <div class="row mt-4">
                <nav class="w-100">
                  <div class="nav nav-tabs" id="product-tab" role="tablist">
                    <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Descripción</a>
                  </div>
                </nav>
                <div class="tab-content p-3" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"> En época marcada por la violencia en Colombia, en 1958 en la Villa de San Sebastián de La Plata, nace un sentimiento de esperanza de paz, pues a través del folclor las personas hallaron el camino para superar  disputas políticas uniéndose en un mismo goce festivo: la fiesta sanpedrina, caracterizada en palabras de Carlos Julio Ibatá Quesada, por “la música nuestra con sus coplas, rajaleñas, bambucos y torbellinos”, así se organiza el primer festival sanpedrino en La Plata, bajo un ambiente dónde la sangre de una misma patria era derramada entre hermanos. </div>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

           <div class="modal fade" id="modal-carroza5">
            <div class="modal-dialog">
              <div class="modal-content">
                <form action="{{route('voto.store')}}" method="post">
                  @csrf
                <div class="modal-header">
                  <h4 class="modal-title">Carroza No. 5</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Homenaje al origen de las festividades Sampedrinas en el Municipio de La Plata</p>
                  <div class="form-group">
                    <label for="modalInputIdent">Número de Identificación</label>
                    <div class="input-group mb-2 mr-sm-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fas fa-user"></i></div>
                      </div>
                      <input type="number" name="modalInputIdent" class="form-control" id="modalInputIdent" placeholder="Número de Identificación" required>
                    </div>

                  </div>
                  <div class="form-group">
                    <label for="modalInputEmail">Correo electrónico</label>
                    <div class="input-group mb-2 mr-sm-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa-solid fa-envelope"></i></div>
                      </div>
                      <input type="email" name="modalInputEmail" class="form-control" id="modalInputEmail" placeholder="Email" required>
                      <input type="hidden" name="modalInputCarroza" class="form-control" value="C5">
                    </div>
                  </div>

                </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                  <button type="button" class="btn btn-primary">Registrar voto</button>
                </div>
              </form>
              </div>
            <!-- /.modal-content -->
          </div>
        <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->


      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


  </div><!-- /.container -->


@endsection()

