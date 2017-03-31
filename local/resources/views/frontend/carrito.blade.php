
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
<td colspan="5" align=right><a href="{{url('PagarProductos')}}" class="btn">Pagar</a></td>
</tr>
</tbody>
</table>    
  <?php
}else{
  echo "<h2>Su carrito está vacío</h2>";
}
?>




            </div>
          </div>
        </div>
    </section>
@endsection