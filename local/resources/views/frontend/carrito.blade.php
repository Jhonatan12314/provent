
@extends('frontend/layout')

@section('title', 'Carrito')

@section('content')

    <!-- Inner Header-->
    <section class="inner-banner2 clearfix">
      <div class="container clearfix">
        <h2>Carrito</h2>
      </div>
    </section>
    <section class="breadcumb-wrapper">
      <div class="container clearfix">
        <ul class="breadcumb">
          <li><a href="{{url('/')}}"><i class="fa fa-home"></i> Inicio</a></li>
          <li><span>Carrito</span></li>
        </ul>
      </div>
    </section>
    <!-- News Page-->
    <section class="core-projects sectpad shop-page">
      <div class="container clearfix">
        <div class="row">
          <div class="col-md-12 col-sm-12 pull-right">

          @if(isset($cancelado))
          <h3 style="color:red;">El pago no pudo ser concretado, por favor inténtelo de nuevo</h3><br><br>
          @endif

           @if(isset($completado))
         <h3> Gracias por hacer sus compras con nosotros</h3>
Su pedido ha sido presentado y se procesará tan pronto como se confirme el pago.<br>

Si necesita ayuda o tiene preguntas, siempre nos complace poder ayudarle. <br>
Comuníquese con nosotros enviándonos un correo electrónico a contacto@veagn.com. <br>
Nos complace poder ayudarlo.<br><br>


Atentamente,<br>
<b>El equipo de VEAGN</b>

          @endif


         <?php
        
if(isset($_SESSION["cart_item"])){
    $item_total = 0;
?>  
<table class="table">
<tbody>
<tr>
<th><strong>ID</strong></th>
<th><strong>Nombre</strong></th>
<th ><strong>Cantidad</strong></th>
<th ><strong>Precio</strong></th>
<th ><strong>Acción</strong></th>
</tr> 
<?php   
    foreach ($_SESSION["cart_item"] as $item){
    ?>
        <tr>
        <td><h4>{{$item["id"]}}</h4></td>
        <td><h4><strong>{{$item["nombre"]}}</strong></h4></td>
        
        <td ><h4>{{$item["cantidad"]}}</h4></td>
        <td ><h4>${{$item["precio"]}}</h4></td>
        <td ><h4><a href="eliminarCarrito?id=<?php echo $item["id"]; ?>" class="btnRemoveAction">Eliminar</a></h4></td>
        </tr>
        <?php
        $item_total += ($item["precio"]*$item["cantidad"]);
    }
    ?>

<tr>
<td colspan="5" align=right><h3><strong>Total:</strong> <?php echo "$".$item_total; ?></h3></td>
</tr>
<tr>

<td colspan="5" align=right>




<form id = "paypal_checkout" action = "https://www.paypal.com/cgi-bin/webscr" method = "post">
    <input name = "cmd" value = "_cart" type = "hidden">
    <input name = "upload" value = "1" type = "hidden">
    <input name = "no_note" value = "0" type = "hidden">
    <input name = "bn" value = "PP-BuyNowBF" type = "hidden">
    <input name = "tax" value = "0" type = "hidden">
    <input name = "rm" value = "2" type = "hidden">
 
    <input name = "business" value = "contacto@veagn.com" type = "hidden">
    <input name = "handling_cart" value = "0" type = "hidden">
    <input name = "currency_code" value = "MXN" type = "hidden">
    <input name = "lc" value = "MX" type = "hidden">
    <input name = "return" value = "http://indexceed.com/provent/pagoCompletado" type = "hidden">
    <input name = "cbt" value = "Return to My Site" type = "hidden">
    <input name = "cancel_return" value = "http://indexceed.com/provent/pagoCancelado" type = "hidden">
    <input name = "custom" value = "" type = "hidden">

    <?php   
$contador=1;
    foreach ($_SESSION["cart_item"] as $item){
    ?>
     <input name = "item_name_{{$contador}}" value = "{{$item["nombre"]}}" type = "hidden">
        <input name = "quantity_{{$contador}}" value = "{{$item["cantidad"]}}" type = "hidden">
        <input name = "amount_{{$contador}}" value = "{{$item["precio"]}}" type = "hidden">
        <input name = "shipping_{{$contador}}" value = "0" type = "hidden">
        <?php
        $contador++;
    }
    ?>
 
    <input id = "ppcheckoutbtn" value = "Pagar" class = "btn" type = "submit">
</form>








</td>
</tr>
</tbody>
</table>    
  <?php
}else{
  if(!isset($completado))
  echo "<h2>Su carrito está vacío</h2>";
}
?>




            </div>
          </div>
        </div>
    </section>
@endsection