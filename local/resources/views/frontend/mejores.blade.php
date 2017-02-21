@extends('frontend/layout')

@section('title', 'Clientes')

@section('content')


    <!-- Inner Header-->
    <section class="inner-banner2 clearfix">
      <div class="container clearfix">
        <h2>Clientes</h2>
      </div>
    </section>
    <section class="breadcumb-wrapper">
      <div class="container clearfix">
        <ul class="breadcumb">
          <li><a href="index">Inicio</a></li>
          <li><span>Somos los mejores</span></li> 
        </ul>
      </div>
    </section>
    <!-- Project  Page-->
    <section class="core-projects sectpad-t">
      <div class="container clearfix">
        <h1>¿Por qué somos mejores?</h1>
     
      </div>
    </section>
    <!-- Testimonials clients-->
    <section class="testimonial-parea">
      <div class="container clearfix">
        <div class="row">
          <div class="col-lg-12">

          <div class="col-lg-6">
          <img src="{{url('public/frontend/images/mejores/1.png')}}" width="80">
           <p>Enviamos desde una sola pieza por la paqueteria de su preferencia.</p>
          </div>

          <div class="col-lg-6">
          <img src="{{url('public/frontend/images/mejores/2.png')}}" width="80">
            <p>Procesos claros y simples</p>
          </div>

          

          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
          <div class="col-lg-6">
          <img src="{{url('public/frontend/images/mejores/3.png')}}" width="80">
           <p>Nuestros productos son fabricados de acuerdo a los estandándares nacionales e internacionales.</p>
          </div>

          <div class="col-lg-6">
          <img src="{{url('public/frontend/images/mejores/4.png')}}" width="80">
            <p>Todos nuestros productos cuenstan con 1 año de Garantía a partir de la fecha de facturación.</p>
          </div>

        

          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
          <img src="{{url('public/frontend/images/mejores/5.png')}}" width="80">
            <p>Contamos con mas de 50 mil productos disponibles en nuestros almacenes.</p>
          </div>

          <div class="col-lg-6">
          <img src="{{url('public/frontend/images/mejores/6.png')}}" width="80">
           <p>De acuerdo a lo establecido por la ley, protejemos sus datos e información proporcionada.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">

          <div class="col-lg-6">
          <img src="{{url('public/frontend/images/mejores/7.png')}}" width="80">
         <p>Contamos con un equipo de especialistas capacitados y especializados a tu servicio.</p>
          </div>

          <div class="col-lg-6">
          <img src="{{url('public/frontend/images/mejores/8.png')}}" width="80">
           <p>Le mantenemos informado de nuestras promociones, lanzamientos y noticias desde nuestras redes sociales.</p>
          </div>

         

          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
           <div class="col-lg-6">
          <img src="{{url('public/frontend/images/mejores/9.png')}}" width="80">
           <p>Disponemos con un conmutador IP con mas de 50 lineas con personal capacitado para atenderlo como lo merece.</p>
          </div>

          <div class="col-lg-6">
          <img src="{{url('public/frontend/images/mejores/10.png')}}" width="80">
           <p>Todo el material que necesita para conocer su equipo.</p>
          </div>





          </div>
        </div>
      </div>
    </section>
  @endsection