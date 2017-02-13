
@extends('frontend/layout')

@section('title', 'Detalle')

@section('content')


    <!-- Inner Header-->
    <section class="inner-banner2 clearfix">
      <div class="container clearfix">


      @foreach ($categorias as $categoria)
     
        <h2>{{$categoria->nombre}}</h2>  
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
        <div class="pro-det-img"><img src="{{$categoria->imagen}}" alt=""></div>
        <div class="pro-content clearfix">
          <h1>{{$categoria->nombre}}</h1>
          <h4>Descripción</h4>
          <p>{{str_limit(strip_tags($categoria->descripcion), 150)}}</p>
        </div>
        @endforeach
      </div>
    </section>
@endsection