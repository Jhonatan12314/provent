@extends('frontend/layout')

@section('title', 'Noticias')

@section('content')

    <!-- Inner Header-->
    <section class="inner-banner2 clearfix">
      <div class="container clearfix">
        <h2>Noticias</h2>
      </div>
    </section>
    <section class="breadcumb-wrapper">
      <div class="container clearfix">
        <ul class="breadcumb">
          <li><a href="index">Inicio</a></li>
          <li><span>Noticias</span></li>
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

            @foreach($noticias as $noticia)

            <article class="single-blog-post img-cap-effect">
                <div class="img-box"><a href="news-details" class="image_hover"><img src="public/frontend/images/news/1.jpg" alt="" class="img-responsive zoom_img_effect"></a></div>
                <h6>{{$noticia->cretaed_at}}</h6>
                <h3>{{$noticia->titulo}}</h3>
                <p>{{substr($noticia->descripcion, 0, 200)}}...</p>
                <a href="news-details" class="read-more btn submit">Leer más</a>
              </article>


            @endforeach
              <!-- News 1-->
              
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection