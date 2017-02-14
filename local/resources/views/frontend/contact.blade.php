@extends('frontend/layout')

@section('title', 'Contacto')

@section('content')


    <!-- Inner Header-->
    <section class="inner-banner2 clearfix">
      <div class="container clearfix">
        <h2>Cont&aacute;ctanos</h2>
      </div>
    </section>
    <section class="breadcumb-wrapper">
      <div class="container clearfix">
        <ul class="breadcumb">
          <li><a href="{{url('index')}}">Inicio</a></li>
          <li><span>Cont&aacute;ctanos</span></li>
        </ul>
      </div>
    </section>
    <!-- Contact us Page-->
    <section class="core-projects touch">
      <div class="sectpad touch_bg">
        <div class="container clearfix">
          <h1>Siempre conectado</h1>
          <p>Puedes hablar con nuestros representantes online a cualquier hora. Por favor usa nuestro Live Chat en nuestro sitio web o nuestro sistema de mensajería.</p>
          <h6>por favor se paciente, nosotros responderemos con nuestro soporte 24/7</h6>
          <div class="row touch_middle">
            <div class="col-md-4 open_hours">
              <div class="touch_top-con">
                <ul class="nav">
                  <li class="item">
                    <div class="media">
                      <div class="media-left"><a href="#"><i class="fa fa-map-marker"></i></a></div>
                      <div class="media-body">{{$configuracion->direccion}}</div>
                    </div>
                  </li>
                  <li class="item">
                    <div class="media">
                      <div class="media-left"><a href="#"><i class="fa fa-envelope-o"></i></a></div>
                      <div class="media-body"><a href="mailto:{{$configuracion->email}}">{{$configuracion->email}}</a></div>
                    </div>
                  </li>
                  <li class="item">
                    <div class="media">
                      <div class="media-left"><a href="#"><i class="fa fa-phone"></i></a></div>
                      <div class="media-body">{{$configuracion->telefono}}</div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-8 input_form">
              <form id="contactForm" action="http://demos.pixelatethemes.com/industrial/contact_process.php" method="post">
                <input id="name" type="text" name="name" placeholder="Nombre" class="form-control">
                <input id="email" type="email" name="email" placeholder="Email" class="form-control">
                <input id="subject" type="text" name="subject" placeholder="Asunto" class="form-control">
                <textarea id="message" rows="6" name="message" placeholder="Mensaje" class="form-control"></textarea>
                <div class="row m0">
                  <button type="submit" class="btn btn-default submit">Enviar <i class="fa fa-angle-double-right"></i></button>
                </div>
              </form>
              <div id="success">
                <p>Mensaje enviado correctamente</p>
              </div>
              <div id="error">
                <p>Ups! Ocurri&oacute; un problema</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="map-area">
      <div id="contact-google-map" data-map-lat="20.7596674" data-map-lng="-103.4337567" data-icon-path="{{url('public/frontend/images/map-marker.png')}}" data-map-title="Envato HQ" data-map-zoom="15" class="google-map"></div>
    </section>
@endsection