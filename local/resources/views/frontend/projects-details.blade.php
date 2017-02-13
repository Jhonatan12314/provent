
@extends('frontend/layout')

@section('title', 'Detalle')

@section('content')

<?php $id=$_GET['id'];?>

    <!-- Inner Header-->
    <section class="inner-banner2 clearfix">
      <div class="container clearfix">
      <?php $c=1; ?>
      @foreach ($productos as $producto)
      @if ($producto->nombre!="")
      @if($c==1)
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
              <p>Project End<span>In Progress</span></p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <p>Category<span>Resarch</span></p>
            </div>
          </div>
        </div>
        @endif
        @endif
        <?php $c++; ?>
        @endforeach
        <div class="project-con clearfix">
          <h2>Agricauture Process</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
    </section>
@endsection