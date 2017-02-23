@extends('frontend/layout')

@section('title', 'Clientes')

@section('content')


    <!-- Inner Header-->
    <section class="inner-banner2 clearfix">
      <div class="container clearfix">
        <h2>Clientes</h2>
      </div>
    </section>
    <section class="breadcumb-wrapper">
      <div class="container clearfix">
        <ul class="breadcumb">
          <li><a href="index">Inicio</a></li>
          <li><span>Clientes</span></li>
        </ul>
      </div>
    </section>
    <!-- Project  Page-->
    <section class="core-projects sectpad-t">
      <div class="container clearfix">
        <h1>¿Quienes son nuestros clientes?</h1>
     
      </div>
    </section>
    <!-- Testimonials clients-->
        <section class="diff-offer-wrapper">
      <div class="container">
      <div class="row diff-offer">
          <ul>
            
            <li class="we-offer-cont2">
              <p style="text-align: justify;">Para Veagn los clientes son la gran apuesta de valor, el verdadero aval de la compañía y la mayor garantía de nuestra continuidad. Por este motivo, les agradecemos la confianza que nos han brindado durante toda nuestra trayectoria, un apoyo que ha permitido que seamos una empresa consolidada y con gran proyección de futuro.</p>
            </li>
          </ul>
        </div>
        <div class="row">
        <?php $contador=0;?>

        @foreach($clientes as $cliente)
        <div class="col-sm-4 service-info">
            <div class="item">
            <a href="#" class="post-image view image_hover">     
            <img src="{{url($cliente->imagen)}}" alt="" class="img-responsive zoom_img_effect">
            <h4>{{$cliente->nombre}}</h4>
            <br><br>
            </a>
            
                
            </div>
          </div>
          <?php $contador++;?>


          @if($contado==3)
           <div class="clearfix visible-xs-block"></div>
           <?php $contador=0;?>
          @endif
        @endforeach
        </div>
      </div>
    </section>
  @endsection