<!DOCTYPE html>
<html>
  
<!-- Mirrored from demos.pixelatethemes.com/industrial/contact by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Jan 2017 22:15:37 GMT -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- reponsive meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VEAGN || @yield('title')</title>
    <!-- Bootstrap-->
    <!--link href="css/bootstrap.min.css" rel="stylesheet"-->
    <link rel='stylesheet' href="{{url('public/frontend/css/bootstrap.min.css')}}" type="text/css" media="all" />
    <!-- animate css-->
    <!--link rel="stylesheet" href="css/animate.min.css"-->
    <link rel='stylesheet' href="{{url('public/frontend/css/animate.min.css')}}" type="text/css" media="all" />
    <!-- owl-carousel-->

    <!--link rel="stylesheet" href="vendors/owlcarousel/owl.carousel.css"-->
    <link rel='stylesheet' href="{{url('public/frontend/vendors/owlcarousel/owl.carousel.css')}}" type="text/css" media="all" />
    <!--link rel="stylesheet" href="vendors/revolution/css/settings.css"-->
    <link rel='stylesheet' href="{{url('public/frontend/vendors/revolution/css/settings.css')}}" type="text/css" media="all" />
    <!--link rel="stylesheet" href="vendors/revolution/css/layers.css"-->
    <link rel='stylesheet' href="{{url('public/frontend/vendors/revolution/css/layers.css')}}" type="text/css" media="all" />
    <!--link rel="stylesheet" href="vendors/revolution/css/navigation.css"-->
    <link rel='stylesheet' href="{{url('public/frontend/vendors/revolution/css/navigation.css')}}" type="text/css" media="all" />
    <!--link rel="stylesheet" href="vendors/jquery-ui-1.11.4/jquery-ui.min.css"-->
    <link rel='stylesheet' href="{{url('public/frontend/vendors/jquery-ui-1.11.4/jquery-ui.min.css')}}" type="text/css" media="all" />
    <!-- Main Css-->
    <!--link rel="stylesheet" href="css/style.css"-->
    <link rel='stylesheet' href="{{url('public/frontend/css/style.css')}}" type="text/css" media="all" />
    <!--link rel="stylesheet" href="css/responsive.css"-->
    <link rel='stylesheet' href="{{url('public/frontend/css/responsive.css')}}" type="text/css" media="all" />
    <!--link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png"-->
    <link rel='icon' type="image/png" sizes="16x16" href="{{url('public/frontend/favicon/favicon-16x16.png')}}" type="text/css" media="all" />
    <script id="dsq-count-scr" src="//veagn.disqus.com/count.js" async></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries-->
    <!-- WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')
    script(src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js')
    -->

        <style type="text/css">
       #contact-buttons-bar {
  position: fixed;
  top: 120px;
  left: 0px;
  width: 50px;
  z-index: 9999;
}


#contact-buttons-bar.slide-on-scroll {
  position: absolute;
}

.contact-button-link  {
  display: block;
  width: 50px;
  height: 50px;
  padding: 0;
  margin-bottom: 1px;
  text-align: center;
  line-height: 50px;
  font-size: 22px;
  background: #8e8e93;
  color: #fff;
  position: relative;
  left: 0;
  
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  
  -webkit-transition: all 250ms;
     -moz-transition: all 250ms;
          transition: all 250ms;
}
.contact-button-link:hover,
.contact-button-link:focus,
.contact-button-link:active {
  color: #fff;
  padding-left: 20px;
  width: 70px;
}
.contact-button-link.cb-hidden {
  left: -50px;
}
.contact-button-link.facebook {
  background: #3b5998;
}
.contact-button-link.linkedin {
  background: #0077b5;
}
.contact-button-link.gplus {
  background: #db4437;
}

.contact-button-link.separated {
  margin-top: 1em;
}

.show-hide-contact-bar,
.contact-button-link.show-hide-contact-bar:focus,
.contact-button-link.show-hide-contact-bar:active {
  background: transparent;
  color: #000;
  border: 0;
  outline: 0;
  padding: 0;
  width: 50px;
}
.contact-button-link.show-hide-contact-bar:hover {
  color: #000;
  background: #ccc;
  padding: 0;
  width: 50px;
}

    </style>
  </head>
  <body onload="socialbar()">

 <div id="contact-buttons-bar">
      <a href="{{$configuracion->facebook}}" class="contact-button-link cb-ancor" style="background-color: #3b5999;"><span class="fa fa-facebook"></span></a>
      <a href="{{$configuracion->youtube}}" class="contact-button-link cb-ancor" style="background-color: #cd201f;"><span class="fa fa-youtube"></span></a>
      <a href="{{$configuracion->twitter}}" class="contact-button-link cb-ancor" style="background-color: #55acee;"><span class="fa fa-twitter"></span></a>
      <a href="{{$configuracion->pinterest}}" class="contact-button-link cb-ancor" style="background-color: #bd081c;"><span class="fa fa-pinterest"></span></a>
      <a href="tel:{{$configuracion->skype}}" class="contact-button-link cb-ancor" style="background-color: #00AFF0;"><span class="fa fa-skype"></span></a>
      <a href="{{$configuracion->google}}" class="contact-button-link cb-ancor" style="background-color: #dd4b39;"><span class="fa fa-google-plus"></span></a>
      <a href="tel:{{$configuracion->whatsapp}}" class="contact-button-link cb-ancor" style="background-color: #25D366;"><span class="fa fa-whatsapp"></span></a>
      <a href="{{$configuracion->linkedin}}" class="contact-button-link cb-ancor linkedin" ><span class="fa fa-linkedin"></span></a>

      <a href="tel:{{$configuracion->telefono}}" class="contact-button-link cb-ancor phone separated" title="Call us"><span class="fa fa-phone"></span></a>
      <a href="mailto:{{$configuracion->email}}" class="contact-button-link cb-ancor email" title="Send us an email"><span class="fa fa-envelope"></span></a></div>
  </div>


        @include('frontend.menu')
        @yield('content')
        @include('frontend.footer')
  </body>
   <script type='text/javascript' src="{{url('public/frontend/js/jquery-1.12.2.min.js')}}"></script>
    <!--script src="js/bootstrap.min.js"></script-->
    <script type='text/javascript' src="{{url('public/frontend/js/bootstrap.min.js')}}"></script>
    <!-- Revolution Slider Tools-->
    <!--script src="vendors/revolution/js/jquery.themepunch.revolution.min.js"></script-->
    <script type='text/javascript' src="{{url('public/frontend/vendors/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
    <!-- Revolution Slider-->
    <!--script type="text/javascript" src="vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type='text/javascript' src="{{url('public/frontend/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <!--script type="text/javascript" src="vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script-->
    <script type='text/javascript' src="{{url('public/frontend/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <!--script type="text/javascript" src="vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script-->
    <script type='text/javascript' src="{{url('public/frontend/vendors/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <!--script src="js/jquery.form.js"></script-->
    <script type='text/javascript' src="{{url('public/frontend/js/jquery.form.js')}}"></script>
    <!--script src="js/jquery.validate.min.js"></script-->
    <script type='text/javascript' src="{{url('public/frontend/js/jquery.validate.min.js')}}"></script>
    <!--script src="js/contact.js"></script-->
    <script type='text/javascript' src="{{url('public/frontend/js/contact.js')}}"></script>
    <!-- owl carousel-->
    <!--script src="vendors/owlcarousel/owl.carousel.min.js"></script-->
    <script type='text/javascript' src="{{url('public/frontend/vendors/owlcarousel/owl.carousel.min.js')}}"></script>
    <!--script src="vendors/jquery-ui-1.11.4/jquery-ui.min.js"></script-->
    <script type='text/javascript' src="{{url('public/frontend/vendors/jquery-ui-1.11.4/jquery-ui.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTI1BZJKFCeJ8g9O01CMZ4QvVCfdPYkrE"></script>
    <!--script src="js/gmaps.min.js"></script-->
    <script type='text/javascript' src="{{url('public/frontend/js/gmaps.min.js')}}"></script>
    <!--script src="js/imagelightbox.min.js"></script-->
    <script type='text/javascript' src="{{url('public/frontend/js/imagelightbox.min.js')}}"></script>
    <!--script src="js/theme.js"></script-->
    <script type='text/javascript' src="{{url('public/frontend/js/theme.js')}}"></script>

    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5892155b64d4e50a6eb4da9e/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<script type="text/javascript">

function socialbar(){

    
    // Define element to slide
    var el = $("#contact-buttons-bar.slide-on-scroll");
    
    // Load top default
    el.attr('data-top', el.css('top'));
    
    // Listen to scroll
    $(window).scroll(function() {
      clearTimeout( $.data( this, "scrollCheck" ) );
      $.data( this, "scrollCheck", setTimeout(function() {
        var nTop = $(window).scrollTop() + parseInt(el.attr('data-top'));
        el.animate({
          top : nTop
        }, 500);
      }, 250) );
    });
}

</script>
<!--End of Tawk.to Script-->

<!-- Mirrored from demos.pixelatethemes.com/industrial/contact by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Jan 2017 22:15:37 GMT -->
</html>