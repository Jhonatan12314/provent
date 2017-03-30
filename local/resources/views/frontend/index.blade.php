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
                @if($slider->descripcion!="")
                  <h1 data-animation="animated fadeInLeft" style="margin-top: 300px;background:rgba(0,0,0,0.5);" class="bnrfnt40">{{str_limit(strip_tags($slider->descripcion), 150)}}</h1>
                @endif
         
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
            </li>
            <li class="we-offer-cont2">
              <p style="text-align: justify;">Empresa que ofrece productos y servicios de desarrollo de ingeniería a los Organismos Operadores del Agua Potable, diseñando herramientas eficaces para acompañar la estrategia de cobranza y recuperación activa de la cartera de usuarios morosos. <br><br>

La efectividad y la alta calidad en el diseño innovador de nuestros productos pronto nos han dado un lugar en el mercado, debido a la alta confiabilidad, cultura de servicio y buena estrategia de comunicación.</p>
            </li>
          </ul>
        </div>
        <div class="row">

        @foreach($categorias as $categoria)
        <div class="col-sm-4 service-info">
            <div class="item"><a href="{{url('categorias')}}/{{$categoria->id}}" class="post-image view image_hover"> 

            @if($categoria->imagen!="")
            <img src="{{url($categoria->imagen)}}" alt="" class="img-responsive zoom_img_effect">
            @endif    

            </a>
            <a href="{{url('categorias')}}/{{$categoria->id}}">
                <h4>{{$categoria->nombre}}</h4></a>
                @if($categoria->descripcion!="")
              <p align="justify">{{str_limit(strip_tags($categoria->descripcion), 100)}}...</p>
              @else
                <p align="justify">Descripción no disponible</p>
              @endif
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
      <div class="work-image-ser"><img src="public/frontend/images/services/ser-img-left.jpg" alt="" width="100%" height="500"></div>
      <div class="service-promo">
        <div class="service-t-content">
          <div class="test-quote-sec"><img src="public/frontend/images/testimonial/quote-n.png" alt=""></div>
          <div class="testimonial-t-sec">
            <div class="testimonialn-slider">
              <div class="item">
                <div class="name-content clearfix">
                  <div class="tst-img"><img src="{{url('public/frontend/images/testimonial/img2.png')}}" alt=""></div>
                  <div class="client-name">
                    <p>Salvador  Osorio<br>
                    Ing. Comunicaciones Eléctricas<br>
                    Fundador (Desarrollador Tecnológico)</p>
                   
                  </div>
                </div>
                <div class="content clearfix" style="text-align: justify;">
                  <p>El ideal motivo principal para arrancar la empresa de esta línea hidráulicos domésticos, fue bastante la mala experiencia general a la que todos los usuarios de productos hidráulicos de casa estamos expuestos por las necesidades diarias, principalmente de higiene, debido al uso de la tecnología muy antigua, ocho décadas de antigüedad por lo menos  y de tecnología de materiales también.</p><br>
                </div>
              </div>
              <div class="item">
                <div class="name-content clearfix">
                  <div class="tst-img"><img src="{{url('public/frontend/images/testimonial/img1.png')}}" alt=""></div>
                  <div class="client-name"  style="text-align: justify;">
                    <p>Caleb Salvador Aguirre Soto<br> 
                   Lic En Administración de Empresas <br>
                    (Gerente Comercial)
                    </p>
                   
                  </div>
                </div>
                <div class="content clearfix"  style="text-align: justify;">
                  <p>Cuando funde junto con mi padre y mi hermana, hacia inicios del año 2008, lo que sería nuestra primera sociedad, lo hicimos con los sueños propios de juventud, pero con el convencimiento que podíamos armar una empresa familiar que fuera capaz de trascender a sus integrantes.<br>

Por eso les pido, permítanme mostrarles lo que a mi juicio es “una empresa familiar” de segunda generación.</p>
                </div>
              </div>
              <div class="item">
                <div class="name-content clearfix">
                  <div class="tst-img"><img src="{{url('public/frontend/images/testimonial/img3.png')}}"  alt=""></div>
                  <div class="client-name">
                    <p>Alma Sarai Aguirre Soto<br>
Lic. En Ciencias y TC<br>
(Gerente Operativo)<br>
</p>
                  </div>
                </div>
                <div class="content clearfix"  style="text-align: justify;">
                  <p>El deseo y las ganas de lograr una empresa exitosa y posicionada a nivel nacional e internacional es una meta que se esta haciendo realidad y desde que empezamos a trabajar en este proyecto no hemos dejado nunca de visualizar como nuestro principal objetivo.<br>

Nuestro prinicipal apoyo es nuestro personal que siempre esta dispuesto a dar mas de lo que se les pide y trabajar con calidad y entusiasmo.</p>
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
      <?php Carbon\Carbon::setLocale('es'); ?>
      @foreach($noticias as $noticia)
      <div class="col-md-4 col-sm-4 col-xs-12">
          <div class="news-evn-img"><a href="{{url('Noticia')}}/{{$noticia->id}}" class="image_hover"><img src="{{url($noticia->imagen)}}" height="250" alt="" class=" zoom_img_effect"></a>

       
          </div>
          <div class="news-meta"><span>{{ Carbon\Carbon::parse($noticia->created_at)->diffForHumans()}}</span></div>

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
            <div class="req-button text-right"><a href="{{url('Mejores')}}" class="submit">Descúbrelo <i class="fa fa-arrow-right"></i></a></div>
          </div>
        </div>
      </div>
    </section>

    @if($configuracion->popupactivo==1)
    <script type="text/javascript">
    $(document).ready(function () {
        $('#popup').modal('show');

        $('#popup').on('hidden.bs.modal', function () {
          $('.modal-body').html('');
        });
    });
    </script>
    @endif


        <style type="text/css">
      .modal-dialog{
position: absolute;
left: 45%;
margin-left: -300px;
height: 500px;
top: 50%;
margin-top: -250px;
} 

.modal{
   z-index: 9999;
}

    </style>

    @if($configuracion->popup!="")

    <div class="modal fade" id="popup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
     {!!html_entity_decode($configuracion->popup)!!}
      </div>

    </div>
  </div>
</div>
@endif

    <!-- our clients & Get in touch-->
@endsection