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
                     <div class="col-md-12">
                     <div align="right">
                       <a href="{{url('admin/sliders/create')}}" class="btn btn-fill btn-rose">Agregar</a>
                       </div>
                            <div class="card">

                              
                                <div class="card-content">
                                    <h4 class="card-title">Listado de slider</h4>
                                    <div class="toolbar">
                                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                                    </div>
                                    <div class="material-datatables">
                                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Descripcion</th>
                                                    <th>Imagen</th>
                                                    <th class="disabled-sorting text-right">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                 @foreach($sliders as $slider)
                                                <tr>
                                                    <td>{{$slider->id}}</td>
                                                    <td>{{str_limit(strip_tags($slider->descripcion), 150)}}</td>
                                                    <td><img src="{{url($slider->imagen)}}" style="width: 150px!important;"></td>
                                                    <td class="text-right">
                                                        <a href="{{url('admin/sliders/update')}}/{{$slider->id}}" class="btn btn-simple btn-warning btn-icon"><i class="material-icons">edit</i></a>
                                                        <a href="{{url('admin/sliders/delete')}}/{{$slider->id}}" onClick="confirm('¿Estas seguro que deseas eliminar la categoría?')" class="btn btn-simple btn-danger btn-icon"><i class="material-icons">close</i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
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
