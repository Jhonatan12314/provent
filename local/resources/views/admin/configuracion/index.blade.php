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
                     <div class="col-md-4">
                            <div class="card">
                                <div class="card-content">
                                    <h4 class="card-title">Redes Sociales</h4>
                                    <form method="#" action="#">
                                        <div class="form-group label-floating is-empty">
                                            <i class="fa fa-facebook-square"></i>
                                            <input type="text" class="form-control" id="facebook">
                                        <span class="material-input"></span></div>
                                        <div class="form-group label-floating is-empty">
                                            <i class="fa fa-twitter"></i>
                                            <input type="text" class="form-control" id="twitter">
                                        <span class="material-input"></span></div>
                                        <div class="form-group label-floating is-empty">
                                            <i class="fa fa-youtube"></i>
                                            <input type="text" class="form-control" id="youtube">
                                        <span class="material-input"></span></div>
                                        <div class="form-group label-floating is-empty">
                                            <i class="fa fa-pinterest"></i>
                                            <input type="text" class="form-control" id="pinterest">
                                        <span class="material-input"></span></div>                                                                                                                                                               
                                        <button type="submit" class="btn btn-fill btn-rose">Guardar</button>
                                         <a href="{{url('admin/slider')}}" class="btn btn-fill btn-blue">Cancelar</a>
                                    </form>
                                </div>
                                <!-- end content-->
                            </div>
                            <div class="card">
                                <div class="card-content">
                                    <h4 class="card-title">Información Nosotros</h4>
                                    <form method="#" action="#">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">Visión</label>
                                            <input type="text" class="form-control" id="vision">
                                        <span class="material-input"></span></div>
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">Valores</label>
                                            <input type="text" class="form-control" id="valores">
                                        <span class="material-input"></span></div>
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">Misión</label>
                                            <input type="text" class="form-control" id="mision">
                                        <span class="material-input"></span></div>
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">Objetivos</label>
                                            <input type="text" class="form-control" id="objetivos">
                                        <span class="material-input"></span></div>
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">Imagen</label>
                                            <input type="text" class="form-control" id="imagen">
                                        <span class="material-input"></span></div>                                                                                                                                                                                                       
                                        <button type="submit" class="btn btn-fill btn-rose">Guardar</button>
                                         <a href="{{url('admin/slider')}}" class="btn btn-fill btn-blue">Cancelar</a>
                                    </form>
                                </div>
                                <!-- end content-->
                            </div>
                            <div class="card">
                                <div class="card-content">
                                    <h4 class="card-title">Contacto</h4>
                                    <form method="#" action="#">
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">Direccón</label>
                                            <input type="text" class="form-control" id="direccion">
                                        <span class="material-input"></span></div>
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">Email</label>
                                            <input type="text" class="form-control" id="email">
                                        <span class="material-input"></span></div>
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">Teléfonno</label>
                                            <input type="text" class="form-control" id="tel">
                                        <span class="material-input"></span></div>
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">Descripción</label>
                                            <input type="text" class="form-control" id="tel">
                                        <span class="material-input"></span></div>                                                                                                                                                                                                        
                                        <button type="submit" class="btn btn-fill btn-rose">Guardar</button>
                                         <a href="{{url('admin/slider')}}" class="btn btn-fill btn-blue">Cancelar</a>
                                    </form>
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
