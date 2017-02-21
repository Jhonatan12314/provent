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
                        <a class="navbar-brand" href="#"> Productos </a>
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
             
                    <div class="row">
                     <div class="col-md-12">
                            <div class="card">
                                <div class="card-content">

                                @if(isset($producto))
                                 <h4 class="card-title">Editar producto</h4>
                                    <form method="post" action="{{url('admin/productos/update')}}" enctype="multipart/form-data">
                                     {{ csrf_field() }}
                                     <input type="hidden" name="id" value="{{$producto->id}}">
                                        <div class="form-group label-floating is-empty">
                                            <label>Nombre del producto</label>
                                            <input type="text" name="nombre" value="{{$producto->nombre}}" class="form-control">
                                        <span class="material-input"></span></div>                                        
                                        <div class="form-group label-floating is-empty">
                                            <label>Descripción</label>
                                            <textarea  id="textarea1" class="form-control" name="descripcion">{{$producto->descripcion}}</textarea>
                                        <span class="material-input"></span></div>

                                        <div class="form-group label-floating is-empty">
                                            <label >Categoría</label>
                                            <select class="selectpicker" data-style="btn btn-info btn-round" title="Categoria" data-size="7" name="categoria">
                                            <option disabled selected>Seleccione</option>
                                            @foreach($categorias as $categoria)
                                            @if($categoria->id==$producto->idcategoria)
                                            <option value="{{$categoria->id}}" selected>{{$categoria->nombre}}</option>
                                            @else
                                            <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                                            @endif
                                            
                                            @endforeach
                                            </select>
                                            
                                        <span class="material-input"></span></div>


                                        <div class="form-group label-floating is-empty">
                                            <label >Precio</label>
                                            <input type="text" value="{{$producto->precio}}" name="precio" class="form-control">
                                        <span class="material-input"></span></div>
                                         <div class="form-group label-floating">
                                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail">
                                                    <img src="{{url('public/backend/img/image_placeholder.jpg')}}" alt="...">
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                <div>
                                                    <span class="btn btn-rose btn-round btn-file">
                                                        <span class="fileinput-new">Buscar imagen</span>
                                                        <span class="fileinput-exists">Cambiar</span>
                                                        <input type="file" name="imagen" />
                                                    </span>
                                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Eliminar</a>
                                                </div>
                                            </div>   
                                            </div>  

                                             <div class="form-group label-floating">
                                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail">
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                <div>
                                                    <span class="btn btn-rose btn-round btn-file">
                                                        <span class="fileinput-new">Buscar ficha</span>
                                                        <span class="fileinput-exists">Cambiar</span>
                                                        <input type="file" name="ficha" />
                                                    </span>
                                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Eliminar</a>
                                                </div>
                                            </div>   
                                            </div> 


                                        <button type="submit" class="btn btn-fill btn-rose">Guardar</button>
                                         <a href="{{url('admin/productos')}}" class="btn btn-fill btn-blue">Cancelar</a>
                                    </form>
                                @else
                                    <h4 class="card-title">Agregar producto</h4>
                                    <form method="post" action="{{url('admin/productos/create')}}" enctype="multipart/form-data">
                                     {{ csrf_field() }}
                                        
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">Nombre del producto</label>
                                            <input type="text" name="nombre" class="form-control">
                                        <span class="material-input"></span></div>                                        
                                        <div class="form-group label-floating is-empty">
                                            <label class="">Descripción</label>
                                            <textarea  class="form-control" id="textarea1" name="descripcion"></textarea>
                                        <span class="material-input"></span></div>
                                        <div class="form-group label-floating is-empty">
                                            <label >Categoría</label>
                                            <select class="selectpicker" data-style="btn btn-info btn-round" title="Categoria" data-size="7" name="categoria">
                                            <option disabled selected>Seleccione</option>
                                            @foreach($categorias as $categoria)
                                            <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                                            @endforeach
                                            </select>
                                            
                                        <span class="material-input"></span></div>
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">Precio</label>
                                            <input type="number" name="precio" class="form-control">
                                        <span class="material-input"></span></div>
                                         <div class="form-group label-floating">
                                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail">
                                                    <img src="{{url('public/backend/img/image_placeholder.jpg')}}" alt="...">
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                <div>
                                                    <span class="btn btn-rose btn-round btn-file">
                                                        <span class="fileinput-new">Imagen</span>
                                                        <span class="fileinput-exists">Cambiar</span>
                                                        <input type="file" name="imagen" />
                                                    </span>
                                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Eliminar</a>
                                                </div>
                                            </div>   
                                            </div>  

                                            <div class="form-group label-floating">
                                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail">
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                                <div>
                                                    <span class="btn btn-rose btn-round btn-file">
                                                        <span class="fileinput-new">Ficha</span>
                                                        <span class="fileinput-exists">Cambiar</span>
                                                        <input type="file" name="ficha" />
                                                    </span>
                                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Eliminar</a>
                                                </div>
                                            </div>   
                                            </div> 


                                        <button type="submit" class="btn btn-fill btn-rose">Guardar</button>
                                         <a href="{{url('admin/productos')}}" class="btn btn-fill btn-blue">Cancelar</a>
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
