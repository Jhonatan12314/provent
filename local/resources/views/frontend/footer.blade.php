    <footer class="sec-padding footer-bg footer-bg3">
      <div class="container clearfix">
        <div class="row">
          <div class="widget about-us-widget col-md-3 col-sm-6"><a href="#"><img src="{{url('public/frontend/images//header/logo.png')}}" alt=""></a>
            <p>{{$configuracion->mision}}.</p>
            <a href="about">Leer m&aacute;s <i class="fa fa-angle-double-right"></i></a>
          </div>
          <!--div class="widget widget-links col-md-3 col-sm-6">
            <h4 class="widget_title">Nuestros Productos</h4>
            <div class="widget-contact-list row m0">
              <ul>
                <li><a href="meterial">- Metal Industry</a></li>
                <li><a href="agricultural">- Agricultural Engineering</a></li>
                <li><a href="mechanical">- Alternative Energy</a></li>
                <li><a href="chemical">- chemical research</a></li>
                <li><a href="power">- power and energy</a></li>
                <li><a href="oil">- Oil and lubricant</a></li>
              </ul>
            </div>
          </div-->
          <div class="widget widget-links col-md-3 col-sm-6">
            <h4 class="widget_title">Redes Sociales</h4>
            <div class="widget-contact-list row m0">
            <ul>
              <li><a href="{{$configuracion->facebook}}"><i class="fa fa-facebook-square"></i></a></li>            
              <li><a href="{{$configuracion->twitter}}"><i class="fa fa-twitter"></i></a></li>
              <li><a href="{{$configuracion->youtube}}"><i class="fa fa-youtube-square"></i></a></li>
              <li><a href="{{$configuracion->pinterest}}"><i class="fa fa-pinterest-square"></i></a></li>
            </ul>
            </div>
          </div>
          <div class="widget widget-contact col-md-3 col-sm-6">
            <h4 class="widget_title">Mantente en contacto</h4>
            <div class="widget-contact-list row m0">
              <ul>
                <li><i class="fa fa-map-marker"></i>
                  <div class="fleft location_address">{{$configuracion->direccion}}</div>
                </li>
                <li><i class="fa fa-phone"></i>
                  <div class="fleft contact_no"><a href="#">{{$configuracion->telefono}}</a></div>
                </li>
                <li><i class="fa fa-envelope-o"></i>
                  <div class="fleft contact_mail"><a href="mailto:{{$configuracion->email}}">{{$configuracion->email}}</a></div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <section class="footer-t-bottom footer-bottom footer-bottom3">
      <div class="container clearfix">
        <div class="pull-left fo-txt">
          <p>Copyright © VEAGN 2017. Todos los derechos reservados.</p>
        </div>
        <div class="pull-right fo-txt">
          <p>Created by: <a href="http://indexceed.com">Indexceed</a></p>
        </div>
      </div>
    </section>