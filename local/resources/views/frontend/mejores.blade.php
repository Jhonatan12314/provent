@extends('frontend/layout')

@section('title', 'Clientes')

@section('content')


    <!-- Inner Header-->
    <section class="inner-banner2 clearfix">
      <div class="container clearfix">
        <h2>Clientes</h2>
      </div>
    </section>
    <section class="breadcumb-wrapper">
      <div class="container clearfix">
        <ul class="breadcumb">
          <li><a href="index">Inicio</a></li>
          <li><span>Somos los mejores</span></li> 
        </ul>
      </div>
    </section>
    <!-- Project  Page-->
    <section class="core-projects sectpad-t">
      <div class="container clearfix">
        <h1>¿Por qué somos mejores?</h1>
     
      </div>
    </section>
    <!-- Testimonials clients-->
    <section class="testimonial-parea">
      <div class="container clearfix">
        <div class="row">
          <div class="col-lg-12">

          <div class="col-lg-6">
          <img src="{{url('public/frontend/images/mejores/1.png')}}" width="80">
           <p><b>Envío inmediato</b> <br>Enviamos desde una sola pieza por la paqueteria de su preferencia.<br>
           <b><a href="#">Pagando antes de la 1:30 PM de Lunes a Miércoles</a></b><br>
           </p>
           
          </div>

          <div class="col-lg-6">
          <img src="{{url('public/frontend/images/mejores/2.png')}}" width="80">
            <p><a href="#" data-toggle="modal" data-target="#condiciones"><b>Condiciones comerciales</b></a> <br>Procesos claros y simples</p>
          </div>

          

          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
          <div class="col-lg-6">
          <img src="{{url('public/frontend/images/mejores/3.png')}}" width="80">
           <p><b>Calidad</b><br>Nuestros productos son fabricados de acuerdo a los estandándares nacionales e internacionales.</p>
          </div>

          <div class="col-lg-6">
          <img src="{{url('public/frontend/images/mejores/4.png')}}" width="80">
            <p><a href="#" data-toggle="modal" data-target="#garantia"><b>Garantía</b></a> <br>Todos nuestros productos cuenstan con 1 año de Garantía a partir de la fecha de facturación.</p>
          </div>

        

          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
          <img src="{{url('public/frontend/images/mejores/5.png')}}" width="80">
            <p><b>Disponibilidad</b><br>Contamos con mas de 50 mil productos disponibles en nuestros almacenes.</p>
          </div>

          <div class="col-lg-6">
          <img src="{{url('public/frontend/images/mejores/6.png')}}" width="80">
           <p><a href="#" data-toggle="modal" data-target="#privacidad"><b>Aviso de privacidad</b></a> <br>De acuerdo a lo establecido por la ley, protejemos sus datos e información proporcionada.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">

          <div class="col-lg-6">
          <img src="{{url('public/frontend/images/mejores/7.png')}}" width="80">
         <p><b>Servicio y soporte</b><br>Contamos con un equipo de especialistas capacitados y especializados a tu servicio.<br>
           <b><a href="#">Tel. +52(33)36 63 77 26 Ext. 121</a></b>
           </p>
          </div>

          <div class="col-lg-6">
          <img src="{{url('public/frontend/images/mejores/8.png')}}" width="80">
           <p><b>Redes sociales</b><br>Le mantenemos informado de nuestras promociones, lanzamientos y noticias desde nuestras redes sociales.</p>
          </div>

         

          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
           <div class="col-lg-6">
          <img src="{{url('public/frontend/images/mejores/9.png')}}" width="80">
           <p><b>Contacto</b><br>Disponemos con un conmutador IP con mas de 50 lineas con personal capacitado para atenderlo como lo merece.<br>
           <b><a href="#">Tel. +52(33)36 63 77 26 / 36</a></b>
           </p>
          </div>

          <div class="col-lg-6">
          <img src="{{url('public/frontend/images/mejores/10.png')}}" width="80">
           <p><b>Fichas técnicas</b><br>Todo el material que necesita para conocer su equipo.</p>
          </div>





          </div>
        </div>
      </div>
    </section>
        <style type="text/css">
      .modal-dialog{
position: absolute;
left: 50%;
margin-left: -312px;
height: 500px;
top: 50%;
margin-top: -250px;
} 

    </style>



        <div class="modal fade" id="condiciones" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Condiciones comerciales</h4>
      </div>
      <div class="modal-body">
      1.- PRECIOS: Los precios no incluyen IVA ni flete.<br>
      2.-PAGOS: Los precios son pesos mexicanos, de ser pagado en Moneda Nacional se tomara el tipo de cambio del Banco Banamex a la venta al momento de generar el pago.<br>
      3.-FORMAS DE PAGO: Depósito o transferencia Bancaria (NO SE ACEPTA EFECTIVO).<br>
      4.-VIGENCIA: La vigencia de la cotización será únicamente de 15 días naturales.<br>
      5.-ENTREGAS DE MERCANCIA: Una vez entregada la mercancía para cualquier aclaración tiene 24 a 48 horas en caso de ser zona metropolitana o de 72 a 96 horas en caso de ser foráneo o pronto pago antes de las 12 del mediodía.<br>
      6.- MERCANCIA: Los precios son L.A.B. nuestro almacén. La mercancía viaja por cuenta y riesgo del cliente.<br>
      7.-PEDIDOS: Será indispensable que el cliente nos envíe su orden de compra o pedido por escrito indicando claramente el modelo, incluidos el diámetro del equipo y también la cantidad deseada.<br>
      8.-CANCELACIÓN: En caso de cancelación, esta ocasionará por lo menos el 20% de cargos del monto facturado.<br>
      9.-EQUIPOS: En la compra de su equipo este no incluye, instalación ni puesta en marcha.<br>
      10.-PRECIOS: En caso de presentar modificaciones en los costos, nos reservamos en derecho de ajustar los precios.<br>
      11.-DEVOLUCIONES: No se aceptan devoluciones bajo ninguna circunstancia, título o naturaleza. En todos los casos, el cliente será responsable de la buena o mala selección del equipo que haya adquirido (marca, modelo, medida, características físicas, componentes, materiales de construcción etc.).<br>
      12.-GARANTIA: Garantía limitada a un año contra defectos de fabricación, en condiciones normales de trabajo.<br>

      </div>
      <div class="modal-footer">
        <button type="button" style="background-color: #C12E2A!important;" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>



        <div class="modal fade" id="garantia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Garantía</h4>
      </div>
      <div class="modal-body">

<b>GARANTIA LIMITADA</b><br>
 
Todos nuestros productos cuentan con un año de garantía, a partir de la fecha de facturación, a menos que se indique lo contrario por escrito.<br>
 
<b>CONDICIONES DE GARANTÍA</b><br>
 
a. Presentar el equipo dañado para su valoración dentro del período vigente de la garantía.<br>
b. Presentar copia de la factura original.<br>
c. Proporcionar por escrito las condiciones detalladas de operación y diagrama de instalación, de ser posibles fotografías y/o video.<br>
d. La garantía es Libre A Bordo (LAB) nuestro almacén. Por lo que, el cliente se hará cargo de los fletes y costos que se originen en el traslado.<br>
e. Veagn S.A de C.V. se reserva el derecho de cambiar o reparar en su totalidad o en alguna(s) de las partes y/o componentes de aquellos productos que presenten defectos de fabricación durante su período de garantía.<br>
f. Veagn S.A de C.V. se reserva el derecho de no hacer valida la garantía en aquellos productos que presenten daños por su uso, y/o que no hayan sido utilizados de acuerdo a sus características y capacidades del propósito para el que los equipos fueron diseñados.<br>
g. En caso de improcedencia de garantía el cliente será responsable del pago de costos originados por diagnóstico, mantenimiento y reparación del mismo.<br>
 
<b>SITUACIONES QUE ANULAN ESTA COBERTURA DE GARANTÍA</b><br>
 
a. Equipos que presenten daños causados por operaciones o usos inadecuados, incorrectos y/o diferentes a los especificados tanto en el manual de usuario como en los documentos técnicos del equipo, golpes o almacenamiento inadecuado.<br>
b. Equipos alterados de alguno de sus componentes o reparados sin autorización previa y por escrito por parte del Departamento Técnico de Veagn S.A de C.V. se anulara la garantía de aquellos equipos que presenten la violación de su marchamo de seguridad. (En casos que aplican).<br>
 
En ningún caso  Veagn S.A. de C.V.  Será responsable por pérdidas, daños o perjuicios que cifra el cliente o terceros, y que pudiesen haber sido causados por el equipo o equipos adquiridos a nuestra compañía.<br>
 
<b>DEVOLUCIONES</b><br>
 
No se aceptan devoluciones bajo ninguna circunstancia, título o naturaleza.<br>
 
En todos los casos, el cliente será el responsable de la buena o mala selección del equipo que haya adquirido (marca, modelo, medida, características físicas, componentes, materiales de construcción, etcétera) por lo que Veagn S.A de C.V. queda relevado de cualquier responsabilidad al respecto.


      </div>
      <div class="modal-footer">
        <button type="button" style="background-color: #C12E2A!important;" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>



        <div class="modal fade" id="privacidad" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Aviso de privacidad</h4>
      </div>
      <div class="modal-body">
      El presente aviso de privacidad que se hace entrega en estos momentos se hace de acuerdo a las disposiciones establecidas en la Ley Federal de Protección de Datos Personales En Posesión de los Particulares. Y para el efecto se le hace del conocimiento de lo siguiente de acuerdo a lo establecido en los artículos 8, 15, 16, 17,18 y 36 de la Ley antes mencionada.<br>
 
Responsable de la protección de sus datos personales.<br>
 
Veagn  S.A de C.V. Domicilio en la finca marcada con el número  N° 3501 Interior 1, Juan Gil Preciado, Colonia Nuevo México, Zapopan, Jalisco, C.P. 45138, es responsable de recabar sus datos personales, el uso que se le dé a los mismos y de su protección.<br>
 
Cómo contáctanos:<br>
 
Oficina de privacidad: Domicilio en la finca marcada con el número  N° 3501 Interior 1, Juan Gil Preciado, Colonia Nuevo México, Zapopan, Jalisco, C.P. 45138<br>
 
Correo electrónico: contacto@veagn.com<br>
 
Teléfono: +52 (01) 33 36 63 77 26 / 36 <br>
 
¿Para qué fines recabamos y utilizamos sus datos personales?<br>
 
Sus datos personales serán utilizados para las siguientes finalidades:<br>
 
- Realizar compras directamente por usted en nuestra tienda por internet, vía telefónica, vía mail o personalmente.<br>
 
- Enviarle a su domicilio señalado las compras realizadas por usted.<br>
 
- Tener una base de datos de sus compras para futuras referencias y asesorías para usted.<br>
 
- Poder realizar los cobros y emitir su factura.<br>
 
- Proveer los servicios y productos requeridos por usted.<br>
 
- Informar sobre cambios, nuevos productos o servicios.<br>

-Enviar correos electrónicos de  nuestras campañas publicitarias.<br>
 
- Dar cumplimiento a obligaciones contraídas con nuestros clientes; Evaluar la calidad del servicio y realizar estudios internos sobre hábitos de consumo.<br>
 
¿Qué datos personales obtenemos y de dónde?<br>
 
Para las finalidades señalas en el presente aviso de privacidad, podemos recabar sus datos personales de distintas formas: cuando usted nos los proporciona directamente; vía telefónica, cuando visita nuestra sitio de internet o utiliza nuestro servicios en línea, y cuando obtenemos información a través de otras fuentes que están permitidas por la ley.<br>
 
Datos personales que recabamos de forma directa<br>
 
Recabamos sus datos personales de forma directa cuando usted mismo nos los proporciona por diversos medios, como cuando realiza compras, participa en nuestras promociones o nos da información con objeto de que le presentemos un servicio. Los datos que obtenemos pueden ser datos personales y fiscales que recabamos cuando visita nuestro sitio de internet, por vía telefónica o utiliza nuestros servicios en línea, y pueden ser, entre otros los siguientes:<br>
 
- Nombre de la persona física o moral.<br>
 
- Nombre del apoderado o representante legal de la empresa en caso de ser una persona moral.<br>
 
- Registro Federal de Contribuyentes.<br>
 
- Domicilio Fiscal.<br>
 
- CURP en caso de que aplique.<br>
 
- Domicilio de envió en caso de ser distinto al de la facturación.<br>
 
- Sitio Web de su empresa.<br>
 
- Correo(s) electrónico.<br>
 
La manifestación de usted respecto si desea recibir noticias de ofertas, nuevos productos y tecnología.<br>
 
Cualquiera de los datos antes mencionados son entregados por el titular de manera expresa al aceptar el presente aviso de privacidad, dándose de alta en la página de internet de nosotros, correo electrónico o entregarlos verbalmente vía telefónica. Y tienen el objeto señalado en la fracción IV del Artículo 10 de la Ley antes referida, ya que tienen el propósito de cumplir obligaciones derivadas de una relación jurídica entre titular y responsable.<br>
 
Datos personales que recabamos a través de otras fuentes.<br>
 
Podemos obtener información de usted de otras fuentes permitidas por la ley, tales como los directorios telefónicos o laborales, páginas de internet, publicidad de su empresa y listados de cámaras. Los datos que obtenemos por estos medios pueden ser, entre otros:<br>

 
- Nombre de la persona física o moral.
 <br>
- Domicilio fiscal o comercial.<br>
 
- Giro de su negocio.<br>
 
- Teléfono.<br>
 
- Correo electrónico.<br>
 
- Página Web.<br>
 
- Datos personales sensibles.<br>

-Redes Sociales.<br>
 
Le informamos que para cumplir con las finalidades previstas en este aviso de privacidad y de acuerdo a lo que señala la Ley Federal De Protección De Datos Personales En Posesión de los Particulares, en su artículo 3ro que a la letra dice Datos personales sensibles: Aquellos datos personales que afecten a la esfera más íntima de su titular, o cuya utilización indebida pueda dar origen a discriminación o conlleve un riesgo grave para éste. En particular, se consideran sensibles aquellos que pueden revelar aspectos como origen racial o étnico, estado de salud presente y futuro, información genética, creencias religiosas, filosóficas y morales, afiliación sindical, opiniones políticas y preferencia sexual.<br>
 
Consideramos que no requerimos de los datos considerados en la ley como personales sensibles, sin embargo en caso de que así sea por interpretación legal o judicial, de cualquier manera nos comprometemos a que los mismos serán tratados bajo las más estrictas medidas de seguridad que garanticen su confidencialidad.<br>
 
¿Cómo puede limitar el uso o divulgación de sus datos personales?<br>
 
Usted puede limitar o dejar de recibir mensajes promocionales por correo postal o electrónico, fax, teléfono fijo o celular siguiendo los siguientes pasos:<br>
 
Enviando un correo electrónico a "contacto@veagn.com" en donde exprese que quiere limitar a recibir información o publicidad, en el sentido que usted guste, o dejar de recibir cualquier información o publicidad.<br>
 
¿Cómo acceder o rectificar sus datos personales, cancelar u oponerse a su uso?<br>
 
Usted tiene derecho de acceder, rectificar y cancelar sus datos personales, así como de oponerse al tratamiento de los mismos o revocar el consentimiento que para tal fin nos haya otorgado, a través de los procedimientos que hemos implementado. Para conocer dichos procedimientos, los requisitos y plazos, se puede poner en contacto con nuestro departamento de datos personales en nuestra página de internet o por los siguientes medios:<br>


 
- contacto@veagn.com<br>
 
- Veagn Domicilio en la finca marcada con el número  N° 3501 Interior 1, Juan Gil Preciado, Colonia Nuevo México, Zapopan, Jalisco, C.P. 45138<br>
 
- Teléfono: +52 (01) 33 36 63 77 26 / 36 <br>
 
- O visitar nuestra página web: www.veagn.com<br>
 
Su solicitud deberá contener su manifestación expresa de lo que desea que se realice.<br>
 
Los plazos para atender su solicitud serán de tres días hábiles.<br>
 
¿Cómo puede revocar su consentimiento para el tratamiento de sus datos?<br>
 
Nos comprometemos a no transferir su información personal a terceros sin su consentimiento, salvo las excepciones previstas en el artículo 37 de la Ley Federal de Protección de Datos Personales en Posesión de los Particulares, así como realizar esta transferencia en los términos que fija la ley.<br>
 
Artículo 37.- Las transferencias nacionales o internacionales de datos podrán llevarse a cabo sin el consentimiento del titular cuando se dé alguno de los siguientes supuestos:<br>
 
I. Cuando la transferencia esté prevista en una Ley o Tratado en los que México sea parte.<br>
 
II. Cuando la transferencia sea necesaria para la prevención o el diagnóstico médico, la presentación de asistencia sanitaria, tratamiento médico o la gestión de servicios sanitarios.<br>
 
III. Cuando la transferencia sea efectuada a sociedades controladas, subsidiarias o afiliadas bajo el control común del responsable, o a una sociedad matriz o a cualquier sociedad del mismo grupo del responsable que opere bajo los mismos procesos y políticas internas.<br>
 
IV. Cuando la transferencia sea necesaria por virtud de un contrato celebrado o por celebrar en interés del titular, por el responsable y un tercero.<br>
 
V. Cuando la transferencia sea necesaria o legalmente exigida para la salvaguarda de un interés público, o para la procuración o administración de justicia.<br>
 
VI. Cuando la transferencia sea precisa para el reconocimiento, ejercicio o defensa de un derecho en un proceso judicial.<br>
 
VII. Cuando la trasferencia sea precisa para el mantenimiento o cumplimiento de una relación jurídica entre el responsable y el titular.<br>

<b>Modificaciones al aviso de privacidad</b><br>
 
Nos reservamos el derecho de efectuar en cualquier momento modificaciones o actualizaciones al presente aviso de privacidad, para la atención de novedades legislativas, políticas internas o nuevos requerimientos para la prestación u ofrecimiento de nuestros servicios o productos.<br>
 
Estas modificaciones estarán disponibles al público a través de los siguientes medios: En nuestra página web "Aviso de privacidad" o se las haremos legar al último correo electrónico que nos haya proporcionado.<br>
 
<b>Uso de cookies y web beacons</b><br>
 
Las cookies son archivos de texto que son descargados automáticamente y almacenados en el disco duro del equipo de cómputo del usuario al navegar en una página web específica, que permiten recordar al servidor de internet algunos datos sobre este usuario, entre ellos, sus preferencias para la visualización de las páginas en ese servidor, nombre y contraseña.<br>
 
Por su parte, las web beacons son imágenes insertadas en una página web o correo electrónico , que puede ser utilizado para monitorear el comportamiento de un visitante, como almacenar información sobre la dirección IP del usuario, duración del tiempo de interacción en dicha página y el tipo de navegador utilizado, entre otros.<br>
 
Le informamos que utilizamos cookies y web beacons para obtener información personal de usted, como la siguiente:<br>
 
- Su tipo de navegador y sistema operativo. Las páginas de internet que visita.<br>
 
- Los vínculos que sigue.<br>
 
- La dirección IP.<br>
 
- El sitio que visitó antes de entrar al nuestro.<br>
 
Estas cookies y otras tecnologías pueden ser deshabilitadas. Para conocer cómo hacerlo, consulte el siguiente vinculo o dirección "contacto@veagn.com".<br>
 
¿Ante quién puede presentar sus quejas y denuncias por el tratamiento indebido de sus datos personales?<br>
 
Si usted considera que su derecho de protección de datos personales ha sido lesionado por alguna conducta de nuestros empleados o de nuestras actuaciones o respuestas, presume que en el tratamiento de sus datos personales existe alguna violación a las disposiciones prevista en la Ley Federal de Protección de Datos Personales en Posesión de los Particulares, podrá interponer la queja o denuncia correspondiente ante el IFAI, para mayor información visite www.ifai.org.mx<br>
 
Para mayor información, favor de comunicarse al departamento de datos personales en los teléfonos y domicilio antes señalados o visitar nuestra página web o mediante correo electrónico.<br>
 
En todo momento, usted podrá evocar el consentimiento que nos ha otorgado para el tratamiento de sus datos personales, a fin de que dejemos de hacer uso de los mismos. Para ello, es necesario que presente su petición mediante correo electrónico a; "contacto@veagn.com" y en un plazo máximo de tres días hábiles atenderemos su petición y le informaremos sobre la procedencia de la misma a través de correo electrónico.<br>
 
Por lo que de conformidad a lo que establece el artículo 8vo y 9no de la Ley Federal De Protección De Datos Personales En Posesión De Los Particulares. Por lo que al usted dar click en aceptar otorga su consentimiento expreso por este medio electrónico autorizado que conservemos sus datos únicamente para los fines comerciales aquí descritos y que en caso de habernos proporcionado datos personales sensibles sean tratados conforme a los términos y condiciones del presente aviso de privacidad.<br>

      </div>
      <div class="modal-footer">
        <button type="button" style="background-color: #C12E2A!important;" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
  @endsection