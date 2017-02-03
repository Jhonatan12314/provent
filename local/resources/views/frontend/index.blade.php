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
    <section class="container ind-common-pad2 clearfix">
      <div class="quality-wrapper text-center">
        <div class="vision tab-panel fade in">
          <h2>A hight level Quality Control in compliance with National and In International regulations and standards</h2>
          <p>
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Consect petur adipiscing elit. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur.
          </p>
        </div>
        <div class="values tab-panel fade hide">
          <h2>A hight level Quality Control in compliance with National and In International regulations and standards</h2>
          <p>
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Consect petur adipiscing elit. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur.
          </p>
        </div>
        <div class="mission tab-panel fade hide">
          <h2>A hight level Quality Control in compliance with National and In International regulations and standards</h2>
          <p>
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Consect petur adipiscing elit. Duis aute irure dolor in reprehenderit in voluptate
            velit esse cillum dolore eu fugiat nulla pariatur.  
          </p>
        </div>
        <div class="vision-wrapper text-center">
          <ul>
            <li><a id="vision" href="javascript:void(0)"><img src="public/frontend/images/services/ser-icon4.png" alt="">
                <p>Vision</p></a></li>
            <li><a id="values" href="javascript:void(0)"><img src="public/frontend/images/services/ser-icon5.png" alt="">
                <p>Values</p></a></li>
            <li><a id="mission" href="javascript:void(0)"><img src="public/frontend/images/services/ser-icon6.png" alt="">
                <p>Mission</p></a></li>
          </ul>
        </div>
      </div>
    </section>
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
              <h2>LOOKING AN ADEQUATE SOLUTION FOR YOUR COMPANY?</h2>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
            <div class="req-button text-right"><a href="{{url('contact')}}" class="submit">Contactanos <i class="fa fa-arrow-right"></i></a></div>
          </div>
        </div>
      </div>
    </section>
    <!-- LOOKING AN ADEQUATE-->
    <!-- Latest News-->
    <section class="latest-news1 sectpad">
      <div class="container clearfix">
        <div class="row">
          <div class="col-lg-6 about-sec-content">
            <div class="section_header2 common">
              <h2>About Us</h2>
            </div>
            <h4>Tdolor sit amet, consectetur, adipis civelit sed quia non qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit. Red quia numquam.</h4>
            <p>Tdolor sit amet, consectetur, adipis civelit sed quia non qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit. Red quia numquam.</p>
            <div class="row">
              <div class="col-md-6">
                <ul>
                  <li><i class="fa fa-arrow-circle-right"></i> Our Company Growth</li>
                  <li><i class="fa fa-arrow-circle-right"></i> 1000 Employed</li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul>
                  <li><i class="fa fa-arrow-circle-right"></i> Our Company Growth</li>
                  <li><i class="fa fa-arrow-circle-right"></i> Customer Relationship</li>
                </ul>
              </div>
            </div>
            <div class="req-button about-but text-left"><a href="about" class="submit">About Us <i class="fa fa-arrow-right"></i></a></div>
          </div>
          <div class="col-lg-6">
            <div class="section-faq">
              <div class="section_header2 common">
                <h2>Frequently Ask questions</h2>
              </div>
              <div class="accordian-area accordian-area-pad">
                <div id="accordion" role="tablist" aria-multiselectable="true" class="panel-group">
                  <div class="panel panel-default">
                    <div id="headingOne" role="tab" class="panel-heading">
                      <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed"><span>WE offer luxury service to our customer</span><i class="fa fa-minus"></i><i class="fa fa-plus"></i></a></h4>
                    </div>
                    <div id="collapseOne" role="tabpanel" aria-labelledby="headingOne" class="panel-collapse collapse">
                      <div class="panel-body faq-content">
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div id="headingTwo" role="tab" class="panel-heading">
                      <h4 class="panel-title on"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">WE offer luxury service to our customer<i class="fa fa-minus"></i><i class="fa fa-plus"></i></a></h4>
                    </div>
                    <div id="collapseTwo" role="tabpanel" aria-labelledby="headingTwo" class="panel-collapse collapse in">
                      <div class="panel-body faq-content">
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                      </div>
                    </div>
                  </div>
                  <div class="panel panel-default">
                    <div id="headingThree" role="tab" class="panel-heading">
                      <h4 class="panel-title"><a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree" class="collapsed">WE offer luxury service to our customer<i class="fa fa-minus"></i><i class="fa fa-plus"></i></a></h4>
                    </div>
                    <div id="collapseThree" role="tabpanel" aria-labelledby="headingThree" class="panel-collapse collapse">
                      <div class="panel-body faq-content">
                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Our Projects-->
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
    <div class="container clearfix ind-common-pad">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 our-t-client">
          <div class="section_header2 common">
            <h2>Clientes</h2>
          </div>
          <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit sed quia non qui dolorem ipsum quia dolor sit amet, consectetur, adipis civelit. Red quia numquam eius modi.</p>
          <ul>
            <li><img src="public/frontend/images/clients/7.jpg" alt="" class="img-responsive"></li>
            <li><img src="public/frontend/images/clients/8.jpg" alt="" class="img-responsive"></li>
            <li><img src="public/frontend/images/clients/9.jpg" alt="" class="img-responsive"></li>
          </ul>
          <ul>
            <li><img src="public/frontend/images/clients/10.jpg" alt="" class="img-responsive"></li>
            <li><img src="public/frontend/images/clients/11.jpg" alt="" class="img-responsive"></li>
            <li><img src="public/frontend/images/clients/12.jpg" alt="" class="img-responsive"></li>
          </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="section_header2 common">
            <h2>Contacto</h2>
          </div>
          <div class="get-t-touch">
            <div class="get-t-touch-inner input_form service-request-form">
              <form id="serviceForm" action="http://demos.pixelatethemes.com/industrial/service_request.php" class="service_request">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <input id="name" type="text" name="name" placeholder="Your Name:" class="form-control">
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <input id="email" type="email" name="email" placeholder="Your Email:" class="form-control">
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="select-box">
                    <select id="selectService" name="selectService" class="select-menu">
                      <option value="0" selected="">Select One</option>
                      <option value="Mechanical Engineering">Mechanical Engineering</option>
                      <option value="Agricultural Processing">Agricultural Processing</option>
                      <option value="Power and Engery">Power and Engery</option>
                      <option value="Chemical Research">Chemical Research</option>
                      <option value="Meterial engineering">Meterial engineering</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <input id="phone" type="text" name="phone" placeholder="Your Phone Number:" class="form-control">
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 submit-n-now">
                  <button type="submit" class="submit">Submit Now <i class="fa fa-arrow-right"></i></button>
                </div>
              </form>
              <div id="success">
                <p>Your request sent successfully.</p>
              </div>
              <div id="error">
                <p>Something is wrong. Message cant be sent!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Indurial Solution-->
    <section class="indurial-t-solution indurial-solution indpad anim-5-all indurial-t-solution3">
      <div class="container clearfix">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="indurial-solution-text text-center">
              <h2>Si necesitas m&aacute;s informaci&oacute;n y soluciones... cont&aacute;ctanos</h2><span class="contactus-button2 text-center"><a href="{{url('contact')}}" class="submit">Cont&aacute;ctanos </a></span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Indurial Solution-->

@endsection