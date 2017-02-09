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
          <div class="col-lg-4 col-md-3 col-sm-12 col-xs-12 t-logo"><a href="index"><img src="{{url('public/frontend/images//header/logo.png')}}" alt="logo" class="img-responsive"></a></div>
          <div class="col-lg-8 col-md-9 col-sm-12 col-xs-12 text-right">
            <div class="top-two-right">
              <div class="req-button text-right"><a href="request-qoute" class="submit">Contactar</a></div>
              <div class="top-panel">
                <div class="touch_top touch_top_pad">
                  <ul class="nav">
                    <li class="item item-phone">
                      <div class="media">
                        <div class="blue-color media-left"><a href="#"><i class="icon icon-Phone2"></i></a></div>
                        <div class="media-body">
                          <p>(01) 3336 6377 26/36<br><span><a href="mailto:contacto@veagn.com">contacto@veagn.com</a></span></p>
                        </div>
                      </div>
                    </li>
                    <li class="item item-ad">
                      <div class="media">
                        <div class="blue-color media-left"><a href="#"><i class="icon icon-Pointer"></i></a></div>
                        <div class="media-body">
                          <p>Calle 2 de febrero N°3405-A<br><br>Hogares de Nuevo México<br><span>C.P. 45120, Zapopan, Jalisco, México</span></p>
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
              <div class="logo"><img src="public/frontend/images//header/logo.png" height="40" width="150" alt=""></div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="nav-menu pull-left text-left">
                <div class="nav-t-holder pull-left text-left">
                  <div class="nav-t-header">
                    <button><i class="fa fa-bars"></i></button>
                  </div>
                  <div class="nav-t-footer">
                    <ul class="nav">
                      <li class="has-t-submenu"><a href="index">Inicio</a>
                      </li>
                      <li ><a href="about">Nosotros</a></li>
                      <li class="has-t-submenu"><a href="solutions">Productos</a>
                     
                        <ul class="submenu">
                        @foreach($categorias as $categoria)
                        <li><a href="{{url('categorias')}}/{{$categoria->id}}">{{$categoria->nombre}}</a></li>
                        @endforeach
                        </ul>
                      </li>
                      
                      <li ><a href="news">Noticias</a></li>
                       <li ><a href="news">Clientes</a></li>
                      <li><a href="contact">contactanos</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="nav-search pull-right text-right">
                <div class="widget-t widget-t-search">
                  <div class="widget-t-inner">
                    <form action="#" method="get" class="search-form">
                      <div class="input-group">
                        <input type="search" placeholder="buscar" class="form-control"><span class="input-group-addon">
                          <button type="submit"><i class="icon icon-Search"></i></button></span>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Main Navigation-->
    </header>