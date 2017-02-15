
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

               <li><a href="{{$configuracion->google}}"><i class="fa fa-google-plus-square"></i></a></li>
               <li><a href="{{$configuracion->linkedin}}"><i class="fa fa-linkedin-square"></i></a></li>
               <li><a href="{{$configuracion->whatsapp}}"><i class="fa fa-whatsapp"></i></a></li>
               <li><a href="{{$configuracion->skype}}"><i class="fa fa-skype"></i></a></li>

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
                  <div class="fleft contact_mail"><a href="mailto:info@woodworkshop.com">{{$configuracion->email}}</a></div>
                </li>
              </ul>
            </div>
          </div>

           <div class="widget widget-links col-md-3 col-sm-6">
            <h4 class="widget_title">Suscríbete...</h4>
            <div class="widget-contact-list row m0">
                <form action="https://veagn.us14.list-manage.com/subscribe/post" id="formfooter" method="POST">
                    <input type="hidden" name="u" value="12a6b5a0621545b8ba0247d76">
                    <input type="hidden" name="id" value="769530ed06">

                     <div class="col-md-11 col-sm-11">
                      <input type="text" class="form-control" name="MERGE0" id="MERGE0" placeholder="ejemplo@mail.com">
                     </div>
                      <div class="col-md-1 col-sm-1" style="margin-left: 150px;margin-top: -40px;">
                        <div class="req-button text-right">
                          <a href="#" onClick="document.getElementById('formfooter').submit();" style="position: absolute;" class="submit">Suscribirme</a>
                        </div>
                      </div>
                      <div class="col-md-12 col-sm-12" style="margin-top: 30px;">
                      <img src="{{url('public/frontend/images/metodos.png')}}">
                      </div>
                      </form>
            </div>
          </div>



        </div>
      </div>
    </footer>
    <style type="text/css">
      .alert
      {
        padding-bottom: 50px!important;
        margin-bottom: 0px!important;
      }
    </style>
     <section class="looking-wrapper alert alert-dismissable clearfix" style="background-color: #009cb5!important;">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="indurial-solution-text2">
            <a href="#" class="close" data-dismiss="alert" aria-label="close" >&times;</a>
              <center>
              <h2>Atención a clientes disponible de Lunes a Viernes 9am - 6pm</h2>
              <p style="color:#FFF;font-size: 18px!important;">Contáctanos: contacto@veagn.com o llámanos al: (33)-3663-7726 con 10 lineas disponibles<br>
              atendido por alguno de nuestros asesores comerciales.</p>
              </center>
            </div>
          </div>
        
        </div>
      </div>
    </section>
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