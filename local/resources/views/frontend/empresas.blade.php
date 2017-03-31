@extends('frontend/layout')

@section('title', 'Empresas')

@section('content')

    <!-- Inner Header-->
    <section class="inner-banner2 clearfix">
      <div class="container clearfix">
        <h2>Empresas</h2>
      </div>
    </section>
    <section class="breadcumb-wrapper">
      <div class="container clearfix">
        <ul class="breadcumb">
          <li><a href="index">Inicio</a></li>
          <li><span>Empresas</span></li>
        </ul>
      </div>
    </section>
    <!-- News Page-->
    <section class="core-projects sectpad">
      <div class="container clearfix">
        <div class="row">
        
          <div class="col-md-12 col-sm-12 pull-right">
            <div class="col-md-4 text-center">
            <img src="{{url('public/img/veagn.png')}}">
            <h3>Veagn</h3>
            <h5><a href="http://www.veagn.com">www.veagn.com / .com.mx</a></h5>
            </div>
            <div class="col-md-4 text-center">
            <img src="{{url('public/img/hidrica.png')}}">
             <h3>Hidrica</h3>
            <h5><a href="http://www.consultoreshidrica.com">www.consultoreshidrica.com</a></h5>
            </div>
            <div class="col-md-4 text-center">
            <img src="{{url('public/img/opcionescapital.png')}}">
             <h3>Opciones de capital</h3>
            <h5><a href="http://www.opcionesdecapital.com">www.opcionesdecapital.com</a></h5>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection