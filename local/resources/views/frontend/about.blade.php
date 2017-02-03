
@extends('frontend/layout')

@section('title', 'Nosotros')

@section('content')
    <!-- Inner Header-->
    <section class="inner-banner2 clearfix">
      <div class="container clearfix">
        <h2>Nosotros</h2>
      </div>
    </section>
    <section class="breadcumb-wrapper">
      <div class="container clearfix">
        <ul class="breadcumb">
          <li><a href="index">Inicio</a></li>
          <li><span>Nosotros</span></li>
        </ul>
      </div>
    </section>
    <section class="about-tab-box sectpad">
      <div class="container clearfix">
        <div class="row">
          <div class="col-sm-4 col-lg-3">
            <div class="tab-title-box">
              <ul role="tablist" class="clearfix">
                <li data-tab-name="history" class="active"><a href="#history" aria-controls="history" role="tab" data-toggle="tab">Nuestra VISION</a></li>
                <li data-tab-name="mission"><a href="#mission" aria-controls="mission" role="tab" data-toggle="tab">Nuestros VALORES</a></li>
                <li data-tab-name="vision"><a href="#vision" aria-controls="vision" role="tab" data-toggle="tab">Nuestra MISION</a></li>
                <li data-tab-name="objetivo"><a href="#objetivo" aria-controls="objetivo" role="tab" data-toggle="tab">Nuestra OBJETIVO</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-8 col-lg-9">
            <div class="tab-content-box tab-content about-tab">
              <div id="history" class="single-tab-content tab-pane fade in active">
                <h2>Nuestra VISION</h2>
                <p align="justify">Ser una empresa líder en Latinoamérica, promoviendo la cultura del cuidado y buen uso de los recursos naturales no renovables, a través de la implementación de tecnología de punta y diseño innovador de herramientas para el control y medición de flujo de agua potable y gas natural.</p>
                <div class="row">
                  <div class="col-sm-12 abot-img"><img src="public/frontend/images/about/abt-img1.jpg" alt="" class="img-responsive"><img src="public/frontend/images/about/abt-img2.jpg" alt="" class="img-responsive"></div>
                </div>
              </div>
              <div id="mission" class="single-tab-content tab-pane fade ">
                <h2>Nuestros VALORES</h2>
                <p align="justify"><strong>Excelencia:</strong> En todo momento nos planteamos desafíos mutuos para mejorar nuestros productos y nuestros procesos y así superarnos. Siempre nos esforzamos por comprender los negocios de nuestros clientes y ayudarlos a lograr sus metas. Promovemos la diversidad, el tratamiento justo, el respeto mutuo y la confianza.</p>
                <p align="justify"><strong>Integridad:</strong> Debemos de exigir, a los demás y a nosotros mismos, las más altas normas de integridad individual y corporativa. Salvaguardamos los activos de la empresa. Cumplimos con todas las políticas y leyes de la empresa.</p>
                <p align="justify"><strong>Trabajo en equipo:</strong> Promovemos un entorno que aliente la innovación, la creatividad y los resultados a través del trabajo en equipo. Nuestros líderes enseñan, inspiran y promueven la participación activa en la empresa, junto con el desarrollo profesional. Estimulamos la comunicación y la interacción abierta y eficaz.</p>
                <p align="justify"><strong>Productividad:</strong> Para ser competitivo, abrazamos y cultivamos la riqueza que brinda la diversidad a nuestra organización. VEAGN siempre ha estado comprometido en promover una fuerza laboral diversa y proveer oportunidades para todos para que contribuyan con todo su potencial.</p>
                <p align="justify"><strong>Responsabilidad:</strong> Cumplimos con nuestros compromisos y asumimos la responsabilidad por todas las acciones y resultados en forma personal. Creamos una disciplina operativa de mejoras continuas que es parte de nuestra cultura.</p>
                <div class="row">
                  <div class="col-sm-12 abot-img"><img src="public/frontend/images/about/abt-img1.jpg" alt="" class="img-responsive"><img src="public/frontend/images/about/abt-img2.jpg" alt="" class="img-responsive"></div>
                </div>
              </div>
              <div id="vision" class="single-tab-content tab-pane fade">
                <h2>Nuestra MISION</h2>
                <p align="justify">Somos una empresa en el Estado de Jalisco, que estimulados por incrementar nuestro desarrollo personal y organizacional, tenemos como propósito fundamental, satisfacer las necesidades de los organismos operadores del agua potable y compañías de distribución de gas natural de Latinoamérica, ofreciendo componentes para la medición y control de flujo a precios justos y razonables, con un alto nivel de calidad, preservando el entorno ecológico, contribuyendo así al bienestar económico y social de la comunidad.</p>
                <div class="row">
                  <div class="col-sm-12 abot-img"><img src="public/frontend/images/about/abt-img1.jpg" alt=""><img src="public/frontend/images/about/abt-img2.jpg" alt=""></div>
                </div>
              </div>
              <div id="objetivo" class="single-tab-content tab-pane fade">
                <h2>Nuestro OBJETIVO</h2>
                <p align="justify">Ser una marca líder en el mercado, al fabricar, distribuir e innovar en soluciones, eficientes y de bajo costo que motiven la implementación de las mismas en el la operación natural de nuestros clientes. Así como lograr la incursión al 35 % del mercado a nivel nacional en el 2015.</p>
                <div class="row">
                  <div class="col-sm-12 abot-img"><img src="public/frontend/images/about/abt-img1.jpg" alt=""><img src="public/frontend/images/about/abt-img2.jpg" alt=""></div>
                </div>
              </div>              
            </div>
          </div>
        </div>
      </div>
    </section>

    @endsection