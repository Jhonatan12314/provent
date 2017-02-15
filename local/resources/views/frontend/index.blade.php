@extends('frontend/layout')

@section('title', 'Inicio')

@section('content')

    <!-- =========home banner start============-->

     <div id="minimal-bootstrap-carousel" data-ride="carousel" class="carousel slide carousel-fade shop-slider full_width ver_new_1_slider">
      <!-- Wrapper for slides-->
      <div role="listbox" class="carousel-inner">

      <?php $c=1; ?>
      @foreach($sliders as $slider)

      
      @if($slider->imagen!="")

      @if($c==1)
      <div style="background-image:url({{$slider->imagen}});" class="item active">
      @else
	  <div style="background-image:url({{$slider->imagen}});" class="item">
      @endif
      
          <div class="carousel-caption">
            <div class="thm-container">
              <div class="box valign-top">
                <div class="content text-left pull-right" >
                  <h1 data-animation="animated fadeInLeft" style="margin-top: 300px;background:rgba(0,0,0,0.5);" class="bnrfnt40">{{str_limit(strip_tags($slider->descripcion), 150)}}</h1>
         
                </div>
              </div>
            </div>
          </div>
        </div>
        @endif

        <?php $c++; ?>
     
		@endforeach
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
              <h2>Ofrecemos <span>diferentes productos</span></h2>
            </li>
            <li class="we-offer-cont2">
              <p>Te ofrecemos una gran variedad de productos en sus diferentes categorías.</p>
            </li>
          </ul>
        </div>
        <div class="row">

        @foreach($categorias as $categoria)
        <div class="col-sm-4 service-info">
            <div class="item"><a href="{{url('categorias')}}/{{$categoria->id}}" class="post-image view image_hover">     <img src="{{$categoria->imagen}}" alt="" class="img-responsive zoom_img_effect"></a><a href="{{url('categorias')}}/{{$categoria->id}}">
                <h4>{{$categoria->nombre}}</h4></a>
              <p align="justify">{{str_limit(strip_tags($categoria->descripcion), 150)}}</p>
              <h6><a href="{{url('categorias')}}/{{$categoria->id}}">Leer m&aacute;s</a></h6>
            </div>
          </div>
        @endforeach


          

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
                  <div class="tst-img"><img src="{{url('public/frontend/images/testimonial/img1.png')}}" alt=""></div>
                  <div class="client-name">
                    <p>Salvador  Osorio<br>
                    Ing. Comunicaciones Eléctricas<br>
                    Fundador (Desarrollador Tecnológico)</p>
                   
                  </div>
                </div>
                <div class="content clearfix">
                  <p>El ideal motivo principal para arrancar la empresa de esta línea hidráulicos domésticos, fue bastante la mala experiencia general a la que todos los usuarios de productos hidráulicos de casa estamos expuestos por las necesidades diarias, principalmente de higiene, debido al uso de la tecnología muy antigua, ocho décadas de antigüedad por lo menos  y de tecnología de materiales también.</p><br>
                </div>
              </div>
              <div class="item">
                <div class="name-content clearfix">
                  <div class="tst-img"><img src="{{url('public/frontend/images/testimonial/img1.png')}}" alt=""></div>
                  <div class="client-name">
                    <p>Caleb Salvador Aguirre Soto<br>
Lic. En Enseñanza de Ingles <br>
(Gerente Comercial)
</p>
                   
                  </div>
                </div>
                <div class="content clearfix">
                  <p>Testimonio</p>
                </div>
              </div>
              <div class="item">
                <div class="name-content clearfix">
                  <div class="tst-img"><img src="{{url('public/frontend/images/testimonial/img1.png')}}"  alt=""></div>
                  <div class="client-name">
                    <p>Alma Sarai Aguirre Soto<br>
Lic. En Ciencias y TC<br>
(Gerente Operativo)<br>
</p>
                  </div>
                </div>
                <div class="content clearfix">
                  <p>Testimonio</p>
                </div>
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
              <h2>¿NECESITAS UN PRODUCTO ESPECÍFICO?</h2>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
            <div class="req-button text-right"><a href="{{url('contact')}}" class="submit">Contactanos <i class="fa fa-arrow-right"></i></a></div>
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

      @foreach($noticias as $noticia)
      <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="news-evn-img"><a href="news" class="image_hover"><img src="{{url($noticia->imagen)}}" height="250" alt="" class=" zoom_img_effect"></a>
            <div class="event-date">
              <h3>05 <small>Aug</small></h3>
            </div>
          </div>
          <div class="news-evn-cont">
          <br>
              <h3>{{$noticia->titulo}}</h3></a>
            <p>{{str_limit(strip_tags($noticia->descripcion), 150)}}...</p>
          </div>
        </div>
      @endforeach
        

      </div>
    </div>
    <!-- product solutions-->
    <section class="our-sol-wrapper clearfix">
      <div class="container clearfix">
      <p>Somos una empresa preocupada por la <span> ecología</span> y el bienestar humano, nuestros productos están totalmente diseñados para ser <span>amigables</span> con el entorno. Desarrollado con <span>Tecnología</span> Verde, que evita la contaminación.</p>
      
      </div>
    </section>

        <section class="looking-wrapper clearfix">
      <div class="container">
        <div class="row">
          <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <div class="indurial-solution-text2">
              <h2>¿POR QUÉ SOMOS LOS MEJORES?</h2>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
            <div class="req-button text-right"><a href="{{url('somos-los-mejores')}}" class="submit">Descúbrelo <i class="fa fa-arrow-right"></i></a></div>
          </div>
        </div>
      </div>
    </section>
    <!-- our clients & Get in touch-->
@endsection