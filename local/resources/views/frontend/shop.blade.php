
@extends('frontend/layout')

@section('title', 'Tienda')

@section('content')

    <!-- Inner Header-->
    <section class="inner-banner2 clearfix">
      <div class="container clearfix">
        <h2>Tienda</h2>
      </div>
    </section>
    <section class="breadcumb-wrapper">
      <div class="container clearfix">
        <ul class="breadcumb">
          <li><a href="{{url('/')}}"><i class="fa fa-home"></i> Inicio</a></li>
          <li><span>Tienda</span></li>
        </ul>
      </div>
    </section>
    <!-- News Page-->
    <section class="core-projects sectpad shop-page">
      <div class="container clearfix">
        <div class="row">
          <div class="col-md-4 col-sm-12 pull-left">
            <div>
              <!-- Search-->
              <div class="widget-search-blog">
                <div class="row widget-inner">
                  <form action="{{url('solutions')}}" method="get" class="search-form">
                    <div class="input-group">
                      <input type="search" placeholder="Buscar producto..." name="search" class="form-control"><span class="input-group-addon">
                        <button type="submit"><i class="icon icon-Search"></i></button></span>
                    </div>
                  </form>
                </div>
              </div>
              <div class="single-sidebar-widget">
                <div class="sec-title">
                  <h2><span>Categorias</span></h2>
                </div>
                <div class="categories">
                  <div id="my-vCategories-11246176"></div>
<div>
<script type="text/javascript" src="https://app.ecwid.com/script.js?11246176&data_platform=code&data_date=2017-03-08" charset="utf-8"></script>
<script type="text/javascript"> xVCategories("id=my-vCategories-11246176"); </script>
</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-8 col-sm-12 pull-right">
            <!-- News-->
            <div class="section_header color">
            @if(isset($search))
            <h2>Resultados para "{{$search}}"</h2>
            @elseif(isset($cat))
            <h2>{{$cat->nombre}}</h2>
            @else
            <h2>Todos los productos</h2>
            @endif
              
            </div>
         
            <?php $c=1;?>
            <div class="row shop-item-wrapper">
            <div id="my-store-11246176"></div>
<div>
<script type="text/javascript" src="https://app.ecwid.com/script.js?11246176&data_platform=code&data_date=2017-03-08" charset="utf-8"></script><script type="text/javascript"> xProductBrowser("categoriesPerRow=3","views=grid(20,3) list(60) table(60)","categoryView=grid","searchView=list","id=my-store-11246176");</script>
</div>



            </div>
          </div>
        </div>
      </div>
    </section>
@endsection