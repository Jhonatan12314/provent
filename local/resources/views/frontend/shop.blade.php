
@extends('frontend/layout')

@section('title', 'Tienda')

@section('content')

    <!-- Inner Header-->
    <section class="inner-banner2 clearfix">
      <div class="container clearfix">
        <h2>Tienda</h2>
      </div>
    </section>
    <section class="breadcumb-wrapper">
      <div class="container clearfix">
        <ul class="breadcumb">
          <li><a href="{{url('/')}}"><i class="fa fa-home"></i> Inicio</a></li>
          <li><span>Tienda</span></li>
        </ul>
      </div>
    </section>
    <!-- News Page-->
    <section class="core-projects sectpad shop-page">
      <div class="container clearfix">
        <div class="row">
          <div class="col-md-4 col-sm-12 pull-left">
            <div>
              <!-- Search-->
              <div class="widget-search-blog">
                <div class="row widget-inner">
                  <form action="#" method="get" class="search-form">
                    <div class="input-group">
                      <input type="search" placeholder="Buscar producto..." class="form-control"><span class="input-group-addon">
                        <button type="submit"><i class="icon icon-Search"></i></button></span>
                    </div>
                  </form>
                </div>
              </div>
              <div class="single-sidebar-widget">
                <div class="sec-title">
                  <h2><span>Categorias</span></h2>
                </div>
                <div class="categories">
                  <ul>
                     @foreach($categorias as $categoria)
                        <li><a href="{{url('categorias')}}/{{$categoria->id}}">{{$categoria->nombre}}</a></li>
                      @endforeach
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-8 col-sm-12 pull-right">
            <!-- News-->
            <div class="section_header color">
              <h2>Todos los productos</h2>
            </div>
            <div class="row shop-item-wrapper">

            @foreach($productos as $producto)
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-shop-item">
                <a href="{{url('Producto')}}/{{$producto->id}}">
                @if($producto->imagen!="")
                 <div class="img-box"><img src="{{url($producto->imagen)}}" height="200" alt="Awesome Image"></div>
                @else
                 <div class="img-box"><img src="{{url('public/frontend/images/sinimagen.png')}}" width="100%" alt="Awesome Image"></div>
                @endif
                 
                  <div class="content">
                      <h3>{{$producto->nombre}}</h3></a>
                      <span>{{str_limit(strip_tags($producto->descripcion), 80)}}...</span>
                  </div>
                </div>
              </div>
              <div class="clearfix visible-xs"></div>
              @endforeach


            </div>
          </div>
        </div>
      </div>
    </section>
@endsection