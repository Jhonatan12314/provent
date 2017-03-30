    <header id="header">
      <!-- Header Gray Band-->
      <section class="wel-t-band">
        <div class="container">
          <div class="row wel-band-bg">
            <div class="col-md-6 pull-left col col-sm-12">
              <p>VEAGN © 2017 | Todos los derechos reservados.</p>
            </div>
            <div class="col-md-6 pull-right text-right col-sm-12">
            </div>
          </div>
        </div>
      </section>
      <!-- Header Gray Band-->
      <!-- Logo Section-->
      <div class="container">
        <div class="row pad-logo logo-wrapper">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 t-logo"><a href="index"><img src="{{url('public/frontend/images/header/logo.png')}}" alt="logo" class="img-responsive"></a></div>
          <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 text-right">
            <div class="top-two-right">
              <div class="req-button text-right"><a href="{{url('contact')}}" class="submit">Contactar</a><br><br>
              <a href="#" onClick="document.getElementById('formmenu').submit();" class="submit" style="padding-right: 17px;padding-left: 17px;">Suscribirme</a>
              </div>
              <div class="top-panel">
                <div class="touch_top touch_top_pad">
                  <ul class="nav">
                    <li class="item item-phone">

                      <div class="media">
                        <div class="blue-color media-left"><a href="#"><i class="icon icon-Phone2"></i></a></div>
                        <div class="media-body">
                          <p>{{$configuracion->telefono}}<br><span><a href="mailto:{{$configuracion->email}}">{{$configuracion->email}}</a></span></p>
                          <div style="margin-top: 27px;">
                           <form action="https://veagn.us14.list-manage.com/subscribe/post" id="formmenu" method="POST">
                                <input type="hidden" name="u" value="12a6b5a0621545b8ba0247d76">
                                <input type="hidden" name="id" value="769530ed06">
                                  <input type="text" name="MERGE0" id="MERGE0" class="form-control" placeholder="ejemplo@mail.com">
                          </form>
                          </div>
                        </div>
                      </div>
                    </li>                   

                    <li class="item item-phone">
                      <div class="media">
                        <div class="blue-color media-left"><a href="#"><i class="icon icon-Pointer"></i></a></div>
                        <div class="media-body">
                          <p style="line-height:20px;">{{$configuracion->direccion}}</p>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Main Navigation-->
      <div class="main_menu menu_fixed nav-home-three">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-12 col-xs-12">
              <div class="logo"><img src="{{url('public/frontend/images/header/logo.png')}}" height="40" width="150" alt=""></div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="nav-menu pull-left text-left">
                <div class="nav-t-holder pull-left text-left">
                  <div class="nav-t-header">
                    <button><i class="fa fa-bars"></i></button>
                  </div>
                  <div class="nav-t-footer">
                    <ul class="nav">
                      <li><a href="{{url('index')}}">Inicio</a>
                      </li>
                      <li ><a href="{{url('about')}}">Nosotros</a></li>
                      <li class="has-t-submenu"><a href="{{url('solutions')}}">Productos</a>
                     
                        <ul class="submenu">
                        @foreach($categorias as $categoria)
                        <li><a href="{{url('categorias')}}/{{$categoria->id}}">{{$categoria->nombre}}</a></li>
                        @endforeach
                        </ul>
                      </li>
                      
                      <li ><a href="{{url('news')}}">Noticias</a></li>
                      <li ><a href="{{url('testimonials')}}">Clientes</a></li>

                      <li class="has-t-submenu"><a href="{{url('servicios')}}">Servicios</a>
                     
                        <ul class="submenu">
                        @foreach($servicios as $servicio)
                        <li><a href="{{url('Servicio')}}/{{$servicio->id}}">{!!html_entity_decode($servicio->descripcion)!!}</a></li>
                        @endforeach
                        </ul>
                      </li>

                      <li><a href="{{url('contact')}}">contactanos</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Main Navigation-->
    </header>



