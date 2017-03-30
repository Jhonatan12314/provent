@extends('admin/layout')

@section('title', 'Crear testimonio')

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
                        <a class="navbar-brand" href="#"> Testimonios </a>
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
             
                    <div class="row">
                     <div class="col-md-12">
                            <div class="card">
                                <div class="card-content">
                                    @if(isset($testimonio))
                                    <h4 class="card-title">Editar testimonio</h4>
                                    <form method="post" action="{{url('admin/testimonios/update')}}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{$testimonio->id}}">
                                        <div class="form-group label-floating is-empty">
                                            <label>Nombre</label>
                                            <input type="text" name="nombre" value="{{$testimonio->nombre}}" class="form-control">
                                        <span class="material-input"></span></div>                                    
                                        <div class="form-group label-floating">
                                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail">
                                                    <img src="{{url('public/backend/img/image_placeholder.jpg')}}" alt="...">
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                <div>
                                                    <span class="btn btn-rose btn-round btn-file">
                                                        <span class="fileinput-new">Select image</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="file" name="imagen" />
                                                    </span>
                                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                </div>
                                            </div>   
                                            </div>                                         
                                        <div class="form-group label-floating is-empty">
                                            <label class="">Descripción</label>
                                            <textarea name="descripcion" id="textarea1" >{{$testimonio->descripcion}}</textarea>
                                        <span class="material-input"></span></div>                                                                                
                                        <button type="submit" class="btn btn-fill btn-rose">Guardar</button>
                                         <a href="{{url('admin/testimonios')}}" class="btn btn-fill btn-blue">Cancelar</a>
                                    </form>
                                    @else
                                    <h4 class="card-title">Agregar testimonio</h4>
                                    <form method="post" action="{{url('admin/testimonios/create')}}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">Nombre</label>
                                            <input type="text" name="nombre" class="form-control">
                                        <span class="material-input"></span></div>                                    
                                        <div class="form-group label-floating">
                                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail">
                                                    <img src="{{url('public/backend/img/image_placeholder.jpg')}}" alt="...">
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                <div>
                                                    <span class="btn btn-rose btn-round btn-file">
                                                        <span class="fileinput-new">Select image</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="file" name="imagen" />
                                                    </span>
                                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                                </div>
                                            </div>   
                                            </div>  

                                        <div class="form-group label-floating is-empty">
                                            <label class="">Descripción</label>
                                            <textarea name="descripcion" id="textarea1" ></textarea>
                                        <span class="material-input"></span></div>                                                                                
                                        <button type="submit" class="btn btn-fill btn-rose">Guardar</button>
                                         <a href="{{url('admin/testimonios')}}" class="btn btn-fill btn-blue">Cancelar</a>
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
