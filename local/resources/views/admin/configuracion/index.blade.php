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
                        <a class="navbar-brand" href="#"> Configuraci&oacute;n </a>
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
             
                    <div class="row">
                    <form method="post" action="{{url('admin/configuracion/create')}}">
                     {{ csrf_field() }}
                    <div align="right">
                     <button type="submit" class="btn btn-fill btn-rose">Guardar</button>
                     </div>

                     @if($configuracion)
                     <div class="col-md-12">
                     <div class="col-md-4">
                            <div class="card">
                                <div class="card-content">
                                    <h4 class="card-title">Redes Sociales</h4>
                                  
                                        <div class="form-group label-floating is-empty">
                                            <i class="fa fa-facebook-square"></i> Facebook
                                            <input type="text" name="facebook" value="{{$configuracion->facebook}}" class="form-control" >
                                        <span class="material-input"></span></div>
                                        <div class="form-group label-floating is-empty">
                                            <i class="fa fa-twitter"></i> Twitter
                                            <input type="text" name="twitter" value="{{$configuracion->twitter}}" class="form-control" >
                                        <span class="material-input"></span></div>
                                        <div class="form-group label-floating is-empty">
                                            <i class="fa fa-youtube"></i> Youtube
                                            <input type="text" name="youtube" value="{{$configuracion->youtube}}" class="form-control" >
                                        <span class="material-input"></span></div>
                                        <div class="form-group label-floating is-empty">
                                            <i class="fa fa-pinterest"></i> Pinterest
                                            <input type="text" name="pinterest" value="{{$configuracion->pinterest}}" class="form-control" ">
                                        <span class="material-input"></span></div> 
                                        <div class="form-group label-floating is-empty">
                                            <i class="fa fa-instagram"></i> Instagram
                                            <input type="text" name="instagram" value="{{$configuracion->instagram}}" class="form-control" ">
                                        <span class="material-input"></span></div> 

                                        <div class="form-group label-floating is-empty">
                                            <i class="fa fa-skype"></i> Skype
                                            <input type="text" name="skype" value="{{$configuracion->skype}}" class="form-control" ">
                                        <span class="material-input"></span></div>  

                                        <div class="form-group label-floating is-empty">
                                            <i class="fa fa-google-plus"></i> Google+
                                            <input type="text" name="google" value="{{$configuracion->google}}" class="form-control" ">
                                        <span class="material-input"></span></div>  

                                        <div class="form-group label-floating is-empty">
                                            <i class="fa fa-linkedin"></i> Linkedin
                                            <input type="text" name="linkedin" value="{{$configuracion->linkedin}}" class="form-control" ">
                                        <span class="material-input"></span></div>  

                                        <div class="form-group label-floating is-empty">
                                            <i class="fa fa-whatsapp"></i> Whatsapp
                                            <input type="text" name="whatsapp" value="{{$configuracion->whatsapp}}" class="form-control" ">
                                        <span class="material-input"></span></div>                             
                      
                                </div>
                                <!-- end content-->
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="card">
                                <div class="card-content">
                                    <h4 class="card-title">Información Nosotros</h4>
                                     <div class="form-group label-floating is-empty">
                                            <label class="">Historia</label>
                                            <textarea id="textarea5" name="historia">{{$configuracion->historia}}</textarea>
                                        <span class="material-input"></span></div>


                                     <div class="form-group label-floating is-empty">
                                            <label class="">Misión</label>
                                            <textarea id="textarea1" name="mision">{{$configuracion->mision}}</textarea>
                                        <span class="material-input"></span></div>
                           
                                        <div class="form-group label-floating is-empty">
                                            <label class="">Visión</label>
                                            <textarea id="textarea2" name="vision">{{$configuracion->vision}}</textarea>
                                        <span class="material-input"></span></div>
                                        <div class="form-group label-floating is-empty">
                                            <label class="">Valores</label>
                                            <textarea id="textarea3" name="valores">{{$configuracion->valores}}</textarea>
                                        <span class="material-input"></span></div>
                                       
                                        <div class="form-group label-floating is-empty">
                                            <label class="">Objetivos</label>
                                            <textarea id="textarea4" name="objetivos">{{$configuracion->objetivos}}</textarea>
                                        <span class="material-input"></span></div>
                                        <div class="form-group label-floating is-empty">
                                            <label class="">Imagen</label>
                                            <input type="text" name="imagen" value="{{$configuracion->imagen}}" class="form-control" id="imagen">
                                        <span class="material-input"></span></div>                                     
                          
                                </div>
                                <!-- end content-->
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="card">
                                <div class="card-content">
                                    <h4 class="card-title">Contacto</h4>
                                   
                                        <div class="form-group label-floating is-empty">
                                            <label class="">Dirección</label>
                                            <input type="text" name="direccion" value="{{$configuracion->direccion}}" class="form-control" id="direccion">
                                        <span class="material-input"></span></div>
                                        <div class="form-group label-floating is-empty">
                                            <label class="">Email</label>
                                            <input type="text" name="email" value="{{$configuracion->email}}" class="form-control" id="email">
                                        <span class="material-input"></span></div>
                                        <div class="form-group label-floating is-empty">
                                            <label class="">Teléfono</label>
                                            <input type="text" name="telefono" value="{{$configuracion->telefono}}" class="form-control" id="tel">
                                        <span class="material-input"></span></div>                             
                                  
                                </div>
                                <!-- end content-->
                            </div>
                            </div>                                                        
                            <!--  end card  -->
                        </div>
                     @else
                                         <div class="col-md-12">
                     <div class="col-md-4">
                            <div class="card">
                                <div class="card-content">
                                    <h4 class="card-title">Redes Sociales</h4>
                                  
                                        <div class="form-group label-floating is-empty">
                                            <i class="fa fa-facebook-square"></i> Facebook
                                            <input type="text" name="facebook" class="form-control" >
                                        <span class="material-input"></span></div>
                                        <div class="form-group label-floating is-empty">
                                            <i class="fa fa-twitter"></i> Twitter
                                            <input type="text" name="twitter" class="form-control" >
                                        <span class="material-input"></span></div>
                                        <div class="form-group label-floating is-empty">
                                            <i class="fa fa-youtube"></i> Youtube
                                            <input type="text" name="youtube" class="form-control" >
                                        <span class="material-input"></span></div>
                                        <div class="form-group label-floating is-empty">
                                            <i class="fa fa-pinterest"></i> Pinterest
                                            <input type="text" name="pinterest" class="form-control" ">
                                        <span class="material-input"></span></div>  
                                        <div class="form-group label-floating is-empty">
                                            <i class="fa fa-instagram"></i> Instagram
                                            <input type="text" name="instagram" class="form-control" ">
                                        <span class="material-input"></span></div>

                                        <div class="form-group label-floating is-empty">
                                            <i class="fa fa-skype"></i> Skype
                                            <input type="text" name="skype" class="form-control" ">
                                        <span class="material-input"></span></div>  

                                        <div class="form-group label-floating is-empty">
                                            <i class="fa fa-linkedin"></i> Linkedin
                                            <input type="text" name="linkedin" class="form-control" ">
                                        <span class="material-input"></span></div>  

                                        <div class="form-group label-floating is-empty">
                                            <i class="fa fa-google-plus"></i> Google+
                                            <input type="text" name="google" class="form-control" ">
                                        <span class="material-input"></span></div>  

                                        <div class="form-group label-floating is-empty">
                                            <i class="fa fa-whatsapp"></i> Whatsapp
                                            <input type="text" name="whatsapp" class="form-control" ">
                                        <span class="material-input"></span></div>                            
                      
                                </div>
                                <!-- end content-->
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="card">
                                <div class="card-content">
                                    <h4 class="card-title">Información Nosotros</h4>

                                      <div class="form-group label-floating is-empty">
                                            <label class="">Historia</label>
                                            <input type="text" name="historia" value="{{$configuracion->historia}}" class="form-control" id="historia">
                                        <span class="material-input"></span></div>

                                           <div class="form-group label-floating is-empty">
                                            <label class="control-label">Misión</label>
                                            <input type="text" name="mision" class="form-control" id="mision">
                                        <span class="material-input"></span></div>
                           
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">Visión</label>
                                            <input type="text" name="vision" class="form-control" id="vision">
                                        <span class="material-input"></span></div>
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">Valores</label>
                                            <input type="text" name="valores" class="form-control" id="valores">
                                        <span class="material-input"></span></div>
                                     
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">Objetivos</label>
                                            <input type="text" name="objetivos" class="form-control" id="objetivos">
                                        <span class="material-input"></span></div>
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">Imagen</label>
                                            <input type="text" name="imagen" class="form-control" id="imagen">
                                        <span class="material-input"></span></div>                                     
                          
                                </div>
                                <!-- end content-->
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="card">
                                <div class="card-content">
                                    <h4 class="card-title">Contacto</h4>
                                   
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">Direccón</label>
                                            <input type="text" name="direccion" class="form-control" id="direccion">
                                        <span class="material-input"></span></div>
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">Email</label>
                                            <input type="text" name="email" class="form-control" id="email">
                                        <span class="material-input"></span></div>
                                        <div class="form-group label-floating is-empty">
                                            <label class="control-label">Teléfonno</label>
                                            <input type="text" name="telefono" class="form-control" id="tel">
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
