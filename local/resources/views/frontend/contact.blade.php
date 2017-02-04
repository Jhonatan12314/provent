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
          <h1>Stat connected</h1>
          <p>You can talk to our online representative at any time. Please use our Live Chat System on our website or<br>Fill up below instant messaging programs.</p>
          <h6>Please be patient, We will get back to you. Our 24/7 Support, <span>General Inquireies Phone: + 0987 654 321</span></h6>
          <div class="row touch_middle">
            <div class="col-md-4 open_hours">
              <div class="touch_top-con">
                <ul class="nav">
                  <li class="item">
                    <div class="media">
                      <div class="media-left"><a href="#"><i class="fa fa-map-marker"></i></a></div>
                      <div class="media-body">Calle 2 de febrero N°3405-A, Hogares de Nuevo México, C.P. 45120, Zapopan, Jalisco, México</div>
                    </div>
                  </li>
                  <li class="item">
                    <div class="media">
                      <div class="media-left"><a href="#"><i class="fa fa-envelope-o"></i></a></div>
                      <div class="media-body"><a href="mailto:contacto@veagn.com">contacto@veagn.com</a></div>
                    </div>
                  </li>
                  <li class="item">
                    <div class="media">
                      <div class="media-left"><a href="#"><i class="fa fa-phone"></i></a></div>
                      <div class="media-body">(01) 3336 6377 26/36</div>
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
      <div id="contact-google-map" data-map-lat="-37.812802" data-map-lng="144.956981" data-icon-path="images/map/map-marker.png" data-map-title="Envato HQ" data-map-zoom="12" class="google-map"></div>
    </section>
@endsection