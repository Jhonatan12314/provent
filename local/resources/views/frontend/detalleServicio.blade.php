
@extends('frontend/layout')

@section('title', 'Detalle')

@section('content')




    <!-- Inner Header-->
    <section class="inner-banner2 clearfix">
      <div class="container clearfix">

      @if(isset($servicio))
      
     
        <h2>{{$servicio->nombre}}</h2>  
      </div>
    </section>
    <section class="breadcumb-wrapper">
      <div class="container clearfix">
        <ul class="breadcumb">
          <li><a href="{{url('index')}}"><i class="fa fa-home"></i> Inicio</a></li>
          <li><a href="{{url('servicios')}}">Servicios</a></li>
          <li><span>Detalles</span></li>
        </ul>
      </div>
    </section>

    <!-- Projects  Details-->
    <section class="core-projects sectpad">
      <div class="container clearfix">
        <div class="pro-det-img"><img src="{{url($servicio->imagen)}}" height="400" alt=""></div>
        <div class="pro-content clearfix">
        
        


          <h1>{{$servicio->nombre}}</h1>
          <h4>Descripción</h4>
          <p>{!!html_entity_decode($servicio->descripcion)!!}</p>
        </div>
        @endif
      </div>
    </section>
    <style type="text/css">
      .modal-dialog{
position: absolute;
left: 50%;
margin-left: -312px;
height: 500px;
top: 50%;
margin-top: -250px;
} 

    </style>
    
@endsection