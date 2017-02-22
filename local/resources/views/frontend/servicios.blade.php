@extends('frontend/layout')

@section('title', 'Servicios')

@section('content')

    <!-- Inner Header-->
    <section class="inner-banner2 clearfix">
      <div class="container clearfix">
        <h2>Servicios</h2>
      </div>
    </section>
    <section class="breadcumb-wrapper">
      <div class="container clearfix">
        <ul class="breadcumb">
          <li><a href="index">Inicio</a></li>
          <li><span>Servicios</span></li>
        </ul>
      </div>
    </section>
    <!-- News Page-->
    <section class="core-projects sectpad">
      <div class="container clearfix">
        <div class="row">
        
          <div class="col-md-12 col-sm-12 pull-right">
            <!-- News-->
            <div class="single-post-wrapper">

            @foreach($servicios as $servicio)

            <article class="single-blog-post img-cap-effect">
            @if($servicio->imagen!="")
                <div class="img-box"><a href="{{url('Servicio')}}/{{$servicio->id}}" class="image_hover"><img src="{{$servicio->imagen}}" alt="" class="img-responsive zoom_img_effect"></a></div>
                @else
                <div class="img-box"><a href="{{url('Servicio')}}/{{$servicio->id}}" class="image_hover"><img src="{{url('public/frontend/images/sinimagen.png')}}" alt="" class="img-responsive zoom_img_effect"></a></div>
                @endif

                
                
                <h6>{{$servicio->cretaed_at}}</h6>
                <h3>{{$servicio->nombre}}</h3>
                <p>{{str_limit(strip_tags($servicio->descripcion), 150)}}</p>
                <a href="{{url('Servicio')}}/{{$servicio->id}}" class="read-more btn submit">Leer más</a>
              </article>


            @endforeach
              <!-- News 1-->
              
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection