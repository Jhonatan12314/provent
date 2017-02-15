
@extends('frontend/layout')

@section('title', 'Nosotros')

@section('content')
    <!-- Inner Header-->
    <section class="inner-banner2 clearfix">
      <div class="container clearfix">
        <h2>Nosotros</h2>
      </div>
    </section>
    <section class="breadcumb-wrapper">
      <div class="container clearfix">
        <ul class="breadcumb">
          <li><a href="index">Inicio</a></li>
          <li><span>Nosotros</span></li>
        </ul>
      </div>
    </section>
    <section class="about-tab-box sectpad">
      <div class="container clearfix">
        <div class="row">
          <div class="col-sm-4 col-lg-3">
            <div class="tab-title-box">
              <ul role="tablist" class="clearfix">
                <li data-tab-name="history" class="active"><a href="#history" aria-controls="history" role="tab" data-toggle="tab">Nuestra historia</a></li>
                <li data-tab-name="vision"><a href="#vision" aria-controls="vision" role="tab" data-toggle="tab">Nuestra VISION</a></li>
                <li data-tab-name="mision"><a href="#mision" aria-controls="mision" role="tab" data-toggle="tab">Nuestra MISION</a></li>
                <li data-tab-name="valores"><a href="#valores" aria-controls="valores" role="tab" data-toggle="tab">Nuestros VALORES</a></li>
                <li data-tab-name="objetivo"><a href="#objetivo" aria-controls="objetivo" role="tab" data-toggle="tab">Nuestro OBJETIVO</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-8 col-lg-9">
            <div class="tab-content-box tab-content about-tab">
            <div id="history" class="single-tab-content tab-pane fade  in active">
                <h2>Nuestra Historia</h2>
               <p align="justify">{{$configuracion->historia}}</p>
                
              </div>
              <div id="vision" class="single-tab-content tab-pane fade">
                <h2>Nuestra VISION</h2>
                <p align="justify">{{$configuracion->vision}}</p>
                
              </div>
              <div id="mision" class="single-tab-content tab-pane fade">
                <h2>Nuestra MISION</h2>
               <p align="justify">{{$configuracion->mision}}</p>
                
              </div>
              <div id="valores" class="single-tab-content tab-pane fade ">
                <h2>Nuestros VALORES</h2>
                <p align="justify">{{$configuracion->valores}}</p>
                
              </div>
              
              <div id="objetivo" class="single-tab-content tab-pane fade">
                <h2>Nuestro OBJETIVO</h2>
               <p align="justify">{{$configuracion->objetivos}}</p>
                
              </div>              
            </div>
          </div>
        </div>
      </div>
    </section>

    @endsection