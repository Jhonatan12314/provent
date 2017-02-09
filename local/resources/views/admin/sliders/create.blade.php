@extends('admin/layout')

@section('title', 'Administrador')

@section('content')

 <div class="wrapper">
        <div class="main-panel">
                  <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-minimize">
                        <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                            <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                            <i class="material-icons visible-on-sidebar-mini">view_list</i>
                        </button>
                    </div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"> Slider </a>
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
             
                    <div class="row">
                     <div class="col-md-6">
                            <div class="card">
                                <div class="card-content">
                                @if(isset($slider))
                                    <h4 class="card-title">Editar slider</h4>
                                    <form method="post" action="{{url('admin/sliders/update')}}">
                                     {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{$slider->id}}">
                                        <div class="form-group label-floating is-empty">
                                            <label class="" id="desc1">Imagen</label>
                                            <input type="text" name="imagen" value="{{$slider->imagen}}" class="form-control">
                                        <span class="material-input"></span></div>
                                        <div class="form-group label-floating is-empty">
                                            <label class="" id="desc1">Descripción</label>
                                            <input type="text" name="descripcion"  value="{{$slider->descripcion}}" class="form-control">
                                        <span class="material-input"></span></div>                                                                                                                       
                                        <button type="submit" class="btn btn-fill btn-rose">Guardar</button>
                                         <a href="{{url('admin/sliders')}}" class="btn btn-fill btn-blue">Cancelar</a>
                                    </form>
                                    @else
                                     <h4 class="card-title">Agregar slider</h4>
                                    <form method="post" action="{{url('admin/sliders/create')}}">
                                     {{ csrf_field() }}
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label" id="desc1">Imagen</label>
                                            <input type="password" name="imagen" class="form-control">
                                        <span class="material-input"></span></div>
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label" id="desc1">Descripción</label>
                                            <input type="password" name="descripcion" class="form-control">
                                        <span class="material-input"></span></div>                                                                                                                       
                                        <button type="submit" class="btn btn-fill btn-rose">Guardar</button>
                                         <a href="{{url('admin/sliders')}}" class="btn btn-fill btn-blue">Cancelar</a>
                                    </form>
                                    @endif
                                </div>
                                <!-- end content-->
                            </div>
                            <!--  end card  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
