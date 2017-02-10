@extends('frontend/layout')

@section('title', 'Inicio')

@section('content')

    <!-- =========home banner start============-->
    <div id="minimal-bootstrap-carousel" data-ride="carousel" class="carousel slide carousel-fade shop-slider full_width ver_new_1_slider">
      <!-- Wrapper for slides-->
      <div role="listbox" class="carousel-inner">
        <div style="background-image:url(http://www.veagn.com/photos/1400/2.png);" class="item active">
          <div class="carousel-caption">
            <div class="thm-container">
              <div class="box valign-top">
                <div class="content text-left pull-right" >
                  <h1 data-animation="animated fadeInLeft" style="margin-top: 300px;background:rgba(0,0,0,0.5);" class="bnrfnt40">El Mejor Diseño para el servicio de agua potable domestico e Industrial.</h1>
         
                </div>
              </div>
            </div>
          </div>
        </div>
        <div style="background-image:url(http://www.veagn.com/photos/1400/1.png);" class="item">
          <div class="carousel-caption">
            <div class="thm-container">
              <div class="box valign-top">
                <div class="content text-left pull-right">
                  <h1 data-animation="animated fadeInLeft"  style="margin-top: 300px;background:rgba(0,0,0,0.5);" class="bnrfnt40">Innovador mecanismo anti moroso que permite Bloquear o Limitar el suministro de agua sin necesidad de dañar la toma domiciliaria.</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div style="background-image:url(http://www.veagn.com/photos/1400/3.png);" class="item">
          <div class="carousel-caption">
            <div class="thm-container">
              <div class="box valign-top">
                <div class="content text-left pull-right">
                  <h1 data-animation="animated fadeInUp" class="bnrfnt40" style="margin-top: 300px;background:rgba(0,0,0,0.5);">Permite atrapar y alojar pequeños sedimentos existentes en el agua , mediante la camara “Y”.</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Controls--><a href="#minimal-bootstrap-carousel" role="button" data-slide="prev" class="left carousel-control"><i class="fa fa-angle-left"></i><span class="sr-only">Previous</span></a><a href="#minimal-bootstrap-carousel" role="button" data-slide="next" class="right carousel-control"><i class="fa fa-angle-right"></i><span class="sr-only">Next</span></a>
    </div>
    <!-- =========home banner end============-->
    <!-- We offer Different Services-->
    <section class="diff-offer-wrapper">
      <div class="container">
        <div class="row diff-offer">
          <ul>
            <li class="we-offer-cont">
              <h2>We offer<span>Different Services</span></h2>
            </li>
            <li class="we-offer-cont2">
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Consect petur adipiscing elit.</p>
            </li>
          </ul>
        </div>
        <div class="row">
          <div class="col-sm-4 service-info">
            <div class="item"><a href="agricultural" class="post-image view image_hover">     <img src="public/frontend/images/services/ser-img1.jpg" alt="" class="img-responsive zoom_img_effect"></a><a href="agricultural">
                <h4>Medidor Clase B</h4></a>
              <p align="justify">Este medidor de agua modelo MJGREEN, ha sido diseñado para el servicio de agua potable doméstico e Industrial. Su sólido y robusto diseño le permiten operar en los sistemas más adversos, también está pre-equipado con la tecnología AMR Ready, para emisión de pulsos para lectura remota. Clase Metrológica B. Presión de trabajo de hasta 12 bar.</p>
              <h6><a href="mechanical">Leer m&aacute;s</a></h6>
            </div>
          </div>
          <div class="col-sm-4 service-info">
            <div class="item"><a href="agricultural" class="post-image view image_hover"><img src="public/frontend/images/services/ser-img2.jpg" alt="" class="img-responsive zoom_img_effect"></a><a href="agricultural">
                <h4>Medidor Clase C</h4></a>
              <p align="justify">Este medidor de agua con modelo MJGREEN, ha sido diseñado para el servicio de agua potable. Su sólido y robusto diseño le permiten operar en los sistemas más adversos, también está Pre-equipado con la tecnología AMR Ready, para emisión de pulsos para lectura remota. Clase Metrológica C. Presión de trabajo de hasta 12 bar.</p>
              <h6><a href="agricultural">Leer m&aacute;s</a></h6>
            </div>
          </div>
          <div class="col-sm-4 service-info">
            <div class="item"><a href="oil" class="post-image view image_hover">    <img src="public/frontend/images/services/ser-img3.jpg" alt="" class="img-responsive zoom_img_effect"></a><a href="oil">
                <h4>Medidor Chorro Único</h4></a>
              <p align="justify
              ">El medidor de Chorro Único de velocidad funciona bajo el principio de movimiento del agua sobre una turbina encapsulada con entrada de un chorro único que incide sobre esta haciéndola girar, este movimiento de la turbina se transmite al registro mediante una transmisión magnética que mide el volumen de agua que se está consumiendo.</p>
              <h6><a href="oil">Leer m&aacute;s</a></h6>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4 service-info">
            <div class="item"><a href="power" class="post-image view image_hover"><img src="public/frontend/images/services/ser-img4.jpg" alt="" class="img-responsive zoom_img_effect"></a><a href="power">
                <h4>Válvula Antifraude</h4></a>
              <p align="justify">El sistema Antifraude Multi-Lock es un innovador mecanismo anti moroso que permite bloquear o limitar el suministro de agua sin necesidad de dañar la toma domiciliaria, además funciona como llave de paso para el usuario.</p>
              <h6><a href="power">Leer m&aacute;s</a></h6>
            </div>
          </div>
          <div class="col-sm-4 service-info">
            <div class="item"><a href="chemical" class="post-image view image_hover"><img src="public/frontend/images/services/ser-img5.jpg" alt="" class="img-responsive zoom_img_effect"></a><a href="chemical">
                <h4>Válvula Check</h4></a>
              <p align="justify">Esta válvula es adecuada para todo tipo de fontanería doméstica y comercial, en general con todos los fluidos no corrosivos.</p>
              <h6><a href="chemical">Leer m&aacute;s</a></h6>
            </div>
          </div>
          <div class="col-sm-4 service-info">
            <div class="item"><a href="meterial" class="post-image view image_hover"><img src="public/frontend/images/services/ser-img6.jpg" alt="" class="img-responsive zoom_img_effect"></a><a href="meterial">
                <h4>Válvula ON /OFF</h4></a>
              <p align="justify">Es un equipo de tecnología y materiales modernos 100% reciclables que protegen el medio ambiente. Evita la sub-medición que no se factura por bajos flujos de agua. Elimina el desperdicio de agua por las fallas por altas presiones de líneas nocturnas de la típica válvula de flotador. Además permite el llenado del depósito con un cierre al 100% sin escurrimientos o rebases, reabre al 100% cuándo el depósito baja su nivel de agua del 8% al 15% dependiendo de su tamaño, sin importar el tiempo.</p>
              <h6><a href="meterial">Leer m&aacute;s</a></h6>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- We offer Different Services-->
    <!-- Control in compliance-->

    <!-- Control in compliance-->
    <!-- Our Services natural resource-->
    <section class="fluid-service-area-home">
      <div class="work-image-ser"><img src="public/frontend/images/services/ser-img-left.jpg" alt=""></div>
      <div class="service-promo">
        <div class="service-t-content">
          <div class="test-quote-sec"><img src="public/frontend/images/testimonial/quote-n.png" alt=""></div>
          <div class="testimonial-t-sec">
            <div class="testimonialn-slider">
              <div class="item">
                <div class="name-content clearfix">
                  <div class="tst-img"><img src="public/frontend/images/testimonial/test-img2.png" alt=""></div>
                  <div class="client-name">
                    <p>Industrial is great firm<span>Michale John (CEO & Founder)</span></p>
                    <ul>
                      <li><a href="#"><i class="fa fa-star"></i></a></li>
                      <li><a href="#"><i class="fa fa-star"></i></a></li>
                      <li><a href="#"><i class="fa fa-star"></i></a></li>
                      <li><a href="#"><i class="fa fa-star"></i></a></li>
                      <li><a href="#"><i class="fa fa-star"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="content clearfix">
                  <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit sed quia non qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit sed quia numquam eius modi. Neque porro quisquam est, qui dolorem ipsum</p>
                </div>
                <div class="sign text-right"><img src="public/frontend/images/testimonial/sign-n.png" alt=""></div>
              </div>
              <div class="item">
                <div class="name-content clearfix">
                  <div class="tst-img"><img src="public/frontend/images/testimonial/test-img2.png" alt=""></div>
                  <div class="client-name">
                    <p>Industrial is great firm<span>Michale John (CEO & Founder)</span></p>
                    <ul>
                      <li><a href="#"><i class="fa fa-star"></i></a></li>
                      <li><a href="#"><i class="fa fa-star"></i></a></li>
                      <li><a href="#"><i class="fa fa-star"></i></a></li>
                      <li><a href="#"><i class="fa fa-star"></i></a></li>
                      <li><a href="#"><i class="fa fa-star"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="content clearfix">
                  <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit sed quia non qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit sed quia numquam eius modi. Neque porro quisquam est, qui dolorem ipsum</p>
                </div>
                <div class="sign text-right"><img src="public/frontend/images/testimonial/sign-n.png" alt=""></div>
              </div>
              <div class="item">
                <div class="name-content clearfix">
                  <div class="tst-img"><img src="public/frontend/images/testimonial/test-img2.png" alt=""></div>
                  <div class="client-name">
                    <p>Industrial is great firm<span>Michale John (CEO & Founder)</span></p>
                    <ul>
                      <li><a href="#"><i class="fa fa-star"></i></a></li>
                      <li><a href="#"><i class="fa fa-star"></i></a></li>
                      <li><a href="#"><i class="fa fa-star"></i></a></li>
                      <li><a href="#"><i class="fa fa-star"></i></a></li>
                      <li><a href="#"><i class="fa fa-star"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="content clearfix">
                  <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit sed quia non qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit sed quia numquam eius modi. Neque porro quisquam est, qui dolorem ipsum</p>
                </div>
                <div class="sign text-right"><img src="public/frontend/images/testimonial/sign-n.png" alt=""></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Our Services natural resource-->
    <!-- LOOKING AN ADEQUATE-->
    <section class="looking-wrapper clearfix">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <div class="indurial-solution-text2">
              <h2>¿POR QUÉ SOMOS LOS MEJORES?</h2>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
            <div class="req-button text-right"><a href="{{url('contact')}}" class="submit">Descubrelo <i class="fa fa-arrow-right"></i></a></div>
          </div>
        </div>
      </div>
    </section>
    <!-- LOOKING AN ADEQUATE-->
    <!-- Lattest news-->
    <div class="container clearfix sectpad-sec">
      <div class="section_header2 common">
        <h2>Últimas noticias</h2>
      </div>
      <div class="row event-pad">
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="news-evn-img"><a href="news" class="image_hover"><img src="public/frontend/images/event/1.jpg" alt="" class="img-responsive zoom_img_effect"></a>
            <div class="event-date">
              <h3>05 <small>Aug</small></h3>
            </div>
          </div>
          <div class="news-evn-cont">
            <div class="news-meta"><a href="news">By: Anjori Meyami</a><a href="news"> Comments: 6</a></div><a href="news">
              <h3>The Surprising Reason College Tuition Is Crazy Expensive</h3></a>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa nt ium doloremque laudantium totam rem aperiam</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="news-evn-img"><a href="news" class="image_hover"><img src="public/frontend/images/event/2.jpg" alt="" class="img-responsive zoom_img_effect"></a>
            <div class="event-date">
              <h3>05 <small>Aug</small></h3>
            </div>
          </div>
          <div class="news-evn-cont">
            <div class="news-meta"><a href="news">By: Anjori Meyami</a><a href="news"> Comments: 6</a></div><a href="news">
              <h3>The Surprising Reason College Tuition Is Crazy Expensive</h3></a>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa nt ium doloremque laudantium totam rem aperiam</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="news-evn-img"><a href="news" class="image_hover"><img src="public/frontend/images/event/3.jpg" alt="" class="img-responsive zoom_img_effect"></a>
            <div class="event-date">
              <h3>05 <small>Aug</small></h3>
            </div>
          </div>
          <div class="news-evn-cont">
            <div class="news-meta"><a href="news">By: Anjori Meyami</a><a href="news"> Comments: 6</a></div><a href="news">
              <h3>The Surprising Reason College Tuition Is Crazy Expensive</h3></a>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusa nt ium doloremque laudantium totam rem aperiam</p>
          </div>
        </div>
      </div>
    </div>
    <!-- product solutions-->
    <section class="our-sol-wrapper clearfix">
      <div class="container clearfix">
        <p>Somos una empresa preocupada por la <span> ecología </span>y el bienestar humano y nuestros productos están diseñados para ser Amigables con el entorno. Usamos <span>Tecnología</span> Verde, tecnología que evita los tóxicos al humano y la contaminación.</p>
      </div>
    </section>
    <!-- our clients & Get in touch-->
@endsection