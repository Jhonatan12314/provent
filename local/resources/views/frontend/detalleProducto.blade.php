
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

      @if(session()->has('msg'))
                                      
                                       <center><h2>La ficha técnica ha sido enviada...</h2></center>
                             
                                       @endif
      

        <div class="pro-det-img"><img src="{{url($producto->imagen)}}" height="400" alt=""></div>
        <div class="pro-content clearfix">
        
        


          <h1>{{$producto->nombre}}</h1>
          <h4>Descripción</h4>
          <p>{!!html_entity_decode($producto->descripcion)!!}</p>
        </div>
        <div class="projects_hours clearfix">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <p>Precio<span>{{str_limit(strip_tags($producto->precio), 150)}}</span></p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <p>Categoría<span>{{$producto->getCategoria->nombre}}</span></p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
             <div class="req-button text-right">
              <a href="#"  data-toggle="modal" data-target="#myModal"><i class="fa fa-download"></i> Descargar Ficha Técnica</a>
              </div>
            </div>
          </div>
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

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Descargar ficha técnica</h4>
      </div>
      <form method="post" action="{{url('descargaFicha')}}">
       {{ csrf_field() }}
      <div class="modal-body">
       <label>Nombre:</label>
      <input type="text" class="form-control" name="nombre" placeholder="Nombre">
       <label>Teléfono:</label>
      <input type="text" class="form-control" name="telefono" placeholder="Teléfono">

      <label>Introduce tu correo electrónico:</label>
      <input type="hidden" name="id" value="{{$producto->id}}"> 
      <input type="text" class="form-control" name="email" placeholder="ejemplo@ejemplo.scom">
      </div>
      <div class="modal-footer">
        <button type="button" style="background-color: #C12E2A!important;" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="submit" style="background-color: #419641!important;" class="btn btn-success">Enviar</button>
      </div>
      </form>
    </div>
  </div>
</div>
    
@endsection