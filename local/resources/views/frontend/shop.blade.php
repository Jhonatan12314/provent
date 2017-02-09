
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
                  <form action="#" method="get" class="search-form">
                    <div class="input-group">
                      <input type="search" placeholder="Buscar producto..." class="form-control"><span class="input-group-addon">
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
                  <ul>
                     @foreach($categorias as $categoria)
                        <li><a href="{{url('categorias')}}/{{$categoria->id}}">{{$categoria->nombre}}</a></li>
                      @endforeach
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-8 col-sm-12 pull-right">
            <!-- News-->
            <div class="section_header color">
              <h2>featured Products</h2>
            </div>
            <div class="row shop-item-wrapper">
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-shop-item">
                  <div class="img-box"><img src="public/frontend/images/shop/1.jpg" alt="Awesome Image"></div>
                  <div class="content"><a href="product">
                      <h3>Industrial Tools</h3></a>
                    <div class="review-box"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span class="price">$68.99</span><a href="product" class="thm-btn">Add To Cart</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-shop-item">
                  <div class="img-box"><img src="public/frontend/images/shop/2.jpg" alt="Awesome Image"></div>
                  <div class="content"><a href="product">
                      <h3>Industrial Tools</h3></a>
                    <div class="review-box"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span class="price">$68.99</span><a href="product" class="thm-btn">Add To Cart</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-shop-item">
                  <div class="img-box"><img src="public/frontend/images/shop/3.jpg" alt="Awesome Image"></div>
                  <div class="content"><a href="product">
                      <h3>Industrial Tools</h3></a>
                    <div class="review-box"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span class="price">$68.99</span><a href="product" class="thm-btn">Add To Cart</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-shop-item">
                  <div class="img-box"><img src="public/frontend/images/shop/4.jpg" alt="Awesome Image"></div>
                  <div class="content"><a href="product">
                      <h3>Industrial Tools</h3></a>
                    <div class="review-box"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span class="price">$68.99</span><a href="product" class="thm-btn">Add To Cart</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-shop-item">
                  <div class="img-box"><img src="public/frontend/images/shop/5.jpg" alt="Awesome Image"></div>
                  <div class="content"><a href="product">
                      <h3>Industrial Tools</h3></a>
                    <div class="review-box"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span class="price">$68.99</span><a href="product" class="thm-btn">Add To Cart</a>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-shop-item">
                  <div class="img-box"><img src="public/frontend/images/shop/6.jpg" alt="Awesome Image"></div>
                  <div class="content"><a href="product">
                      <h3>Industrial Tools</h3></a>
                    <div class="review-box"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div><span class="price">$68.99</span><a href="product" class="thm-btn">Add To Cart</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection