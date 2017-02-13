
@extends('frontend/layout')

@section('title', 'Detalle')

@section('content')


    <!-- Inner Header-->
    <section class="inner-banner2 clearfix">
      <div class="container clearfix">

      @if(isset($producto))
      
     
        <h2>{{$producto->nombre}}</h2>  
      </div>
    </section>
    <section class="breadcumb-wrapper">
      <div class="container clearfix">
        <ul class="breadcumb">
          <li><a href="{{url('index')}}"><i class="fa fa-home"></i> Inicio</a></li>
          <li><a href="{{url('solutions')}}">Productos</a></li>
          <li><span>Detalles</span></li>
        </ul>
      </div>
    </section>
    <!-- Projects  Details-->
    <section class="core-projects sectpad">
      <div class="container clearfix">
        <div class="pro-det-img"><img src="{{$producto->imagen}}" alt=""></div>
        <div class="pro-content clearfix">
          <h1>{{$producto->nombre}}</h1>
          <h4>Descipción</h4>
          <p>{{str_limit(strip_tags($producto->descripcion), 150)}}</p>
        </div>
        <div class="projects_hours clearfix">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <p>Precio<span>{{str_limit(strip_tags($producto->precio), 150)}}</span></p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <p>Categoría<span>{{$producto->getCategoria->nombre}}</span></p>
            </div>
          </div>
        </div>
        @endif
      </div>
    </section>
@endsection