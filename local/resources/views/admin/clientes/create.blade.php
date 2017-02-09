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
                        <a class="navbar-brand" href="#"> Clientes </a>
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
             
                    <div class="row">
                     <div class="col-md-6">
                            <div class="card">
                                <div class="card-content">
                                 @if(isset($cliente))
                                    <h4 class="card-title">Editar clientes</h4>

                                    <form action="{{url('admin/clientes/update')}}" method="post">
                                    <input type="hidden" name="id" value="{{$cliente->id}}">
                                    {{ csrf_field() }}
                                        <div class="form-group label-floating is-empty">
                                            <label >Nombre del clente</label>
                                            <input type="text" name="nombre" value="{{$cliente->nombre}}" class="form-control">
                                        <span class="material-input"></span></div>
                                        <div class="form-group label-floating is-empty">
                                            <label >Estado</label>
                                            <input type="text" name="estado" value="{{$cliente->estado}}" class="form-control">
                                        <span class="material-input"></span></div>
                                        <div class="form-group label-floating is-empty">
                                            <label>Teléfono</label>
                                            <input type="text" name="telefono" value="{{$cliente->telefono}}" class="form-control">
                                        <span class="material-input"></span></div>
                                        <div class="form-group label-floating is-empty">
                                            <label>Email</label>
                                            <input type="email" name="email" value="{{$cliente->email}}" class="form-control">
                                        <span class="material-input"></span></div>                                                                                
                                        <button type="submit" class="btn btn-fill btn-rose">Guardar</button>
                                         <a href="{{url('admin/clientes')}}" class="btn btn-fill btn-blue">Cancelar</a>
                                    </form>
                                    @else

                                     <h4 class="card-title">Agregar clientes</h4>
                                    <form action="{{url('admin/clientes/create')}}" method="post">
                                    {{ csrf_field() }}
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">Nombre del clente</label>
                                            <input type="text" name="nombre" class="form-control">
                                        <span class="material-input"></span></div>
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">Estado</label>
                                            <input type="text" name="estado" class="form-control">
                                        <span class="material-input"></span></div>
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">Teléfono</label>
                                            <input type="text" name="telefono" class="form-control">
                                        <span class="material-input"></span></div>
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">Email</label>
                                            <input type="email" name="email" class="form-control">
                                        <span class="material-input"></span></div>                                                                                
                                        <button type="submit" class="btn btn-fill btn-rose">Guardar</button>
                                         <a href="{{url('admin/clientes')}}" class="btn btn-fill btn-blue">Cancelar</a>
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
