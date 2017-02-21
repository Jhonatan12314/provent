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
                        <a class="navbar-brand" href="#"> Bienvenido </a>
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
             
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="orange">
                                    <i class="material-icons">store</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Productos</p>
                                    <h3 class="card-title">{{$productos}}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                      Total de productos registrados
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="rose">
                                    <i class="material-icons">equalizer</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Visitas</p>
                                    <h3 class="card-title"><img src="http://hitwebcounter.com/counter/counter.php?page=6603064&style=0032&nbdigits=1&type=ip&initCount=0" title="" Alt=""  border="0" style="height: 20px!important;width: 10px!important"></h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        Total de visitas a la página
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="green">
                                    <i class="material-icons">person</i>
                                </div>
                                <div class="card-content">
                                    <p class="category">Clientes</p>
                                    <h3 class="card-title">{{$clientes}}</h3>
                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        Clientes registrados al newlester
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
