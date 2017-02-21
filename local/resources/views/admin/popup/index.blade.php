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
                    <form method="post" action="{{url('admin/popup/create')}}">
                     {{ csrf_field() }}
                    <div align="right">
                     <button type="submit" class="btn btn-fill btn-rose">Guardar</button>
                     </div>

                     @if($configuracion)
                     <div class="col-md-12">
                     <div class="col-md-12">
                            <div class="card">
                                <div class="card-content">
                                    <h4 class="card-title">Popup</h4>
                                    <textarea id="textarea1" name="descripcion">{{$configuracion->popup}}</textarea> 

                                    <div class="form-group label-floating is-empty">
                                            @if($configuracion->popupactivo)
                                           <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="activo" checked=""><span class="checkbox-material"></span>Activo
                                            </label>
                                        </div>

                                            @else
                                           <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="activo"><span class="checkbox-material"></span>Activo
                                            </label>
                                        </div>

                                            @endif
                                            

                                        </div>
                                    
                      
                                </div>
                                <!-- end content-->
                            </div>
                            </div>
                                                       
                            <!--  end card  -->
                        </div>
                     @else
                                         <div class="col-md-12">
                     <div class="col-md-12">
                            <div class="card">
                                <div class="card-content">
                                    <h4 class="card-title">Popup</h4>
                                    <textarea id="textarea1" name="descripcion"></textarea>   

                                    <div class="form-group label-floating is-empty">
                                            <label >Activado</label>
                                            <input type="checkbox" name="activo">
                                        <span class="material-input"></span></div>        
                      
                                </div>
                                <!-- end content-->
                            </div>
                            </div>
                                                                                 
                            <!--  end card  -->
                        </div>
                        @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




@endsection
