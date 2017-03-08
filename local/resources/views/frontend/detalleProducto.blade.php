
@extends('frontend/layout')

@section('title', 'Detalle')

@section('content')


<script type="text/javascript">
  function ShopifyBuyInit() {
    var client = ShopifyBuy.buildClient({
      domain: 'veagn.myshopify.com',
      apiKey: '9dfb9ba56ca1807aac4cf145b35ce518',
      appId: '6',
    });

    ShopifyBuy.UI.onReady(client).then(function (ui) {
      ui.createComponent('product', {
        id: [8288275339],
        node: document.getElementById('product-component-05cfb487fb6'),
        moneyFormat: '%24%7B%7Bamount%7D%7D',
                options: {
  "product": {
    "variantId": "all",
    "width": "240px",
    "contents": {
      "img": false,
      "title": false,
      "variantTitle": false,
      "price": false,
      "description": false,
      "buttonWithQuantity": true,
      "button": false,
      "quantity": false
    },
    "text": {
      "button": "Añadir al carrito"
    },
    "styles": {
      "product": {
        "@media (min-width: 601px)": {
          "max-width": "100%",
          "margin-left": "0",
          "margin-bottom": "50px"
        }
      },
      "button": {
        "background-color": "#000000",
        "padding-left": "10px",
        "padding-right": "10px",
        ":hover": {
          "background-color": "#000000"
        },
        ":focus": {
          "background-color": "#000000"
        }
      },
      "title": {
        "font-size": "26px"
      },
      "price": {
        "font-size": "18px"
      },
      "compareAt": {
        "font-size": "15px"
      }
    }
  },
  "cart": {
    "contents": {
      "button": true
    },
    "styles": {
      "button": {
        "background-color": "#000000",
        ":hover": {
          "background-color": "#000000"
        },
        ":focus": {
          "background-color": "#000000"
        }
      },
      "footer": {
        "background-color": "#ffffff"
      }
    }
  },
  "modalProduct": {
    "contents": {
      "variantTitle": false,
      "buttonWithQuantity": true,
      "button": false,
      "quantity": false
    },
    "styles": {
      "product": {
        "@media (min-width: 601px)": {
          "max-width": "100%",
          "margin-left": "0px",
          "margin-bottom": "0px"
        }
      },
      "button": {
        "background-color": "#000000",
        "padding-left": "10px",
        "padding-right": "10px",
        ":hover": {
          "background-color": "#000000"
        },
        ":focus": {
          "background-color": "#000000"
        }
      }
    }
  },
  "toggle": {
    "styles": {
      "toggle": {
        "background-color": "#000000",
        ":hover": {
          "background-color": "#000000"
        },
        ":focus": {
          "background-color": "#000000"
        }
      }
    }
  },
  "productSet": {
    "styles": {
      "products": {
        "@media (min-width: 601px)": {
          "margin-left": "-20px"
        }
      }
    }
  }
}
      });
    });
  }

(function () {
  var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
  window.ShopifyBuy && window.ShopifyBuy.UI ? ShopifyBuyInit() : loadScript();

  function loadScript() {
    var script = document.createElement('script');
    script.async = true;
    script.src = scriptURL;
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
    script.onload = ShopifyBuyInit;
  }
})();
</script>




    <!-- Inner Header-->
    <section class="inner-banner2 clearfix">
      <div class="container clearfix">

      @if(isset($producto))
      
     
        <h2>{{$producto->nombre}}</h2>  
      </div>
    </section>
    <section class="breadcumb-wrapper">
      <div class="container clearfix">
        <ul class="breadcumb">
          <li><a href="{{url('index')}}"><i class="fa fa-home"></i> Inicio</a></li>
          <li><a href="{{url('solutions')}}">Productos</a></li>
          <li><span>Detalles</span></li>
        </ul>
      </div>
    </section>

    <!-- Projects  Details-->
    <section class="core-projects sectpad">
      <div class="container clearfix">

      @if(session()->has('msg'))
                                      
                                       <center><h2>La ficha técnica ha sido enviada...</h2></center>
                             
                                       @endif
      

        <div class="pro-det-img"><img src="{{url($producto->imagen)}}" height="400" alt=""></div>
        <div class="pro-content clearfix">
        
        


          <h1>{{$producto->nombre}}</h1>
          <h4>Descripción</h4>
          <p>{!!html_entity_decode($producto->descripcion)!!}</p>
        </div>
        <div class="projects_hours clearfix">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <p>Precio<span>{{str_limit(strip_tags($producto->precio), 150)}}</span></p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <p>Categoría<span>{{$producto->getCategoria->nombre}}</span></p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
             <div class="req-button text-right">
              <a href="#"  data-toggle="modal" data-target="#myModal"><i class="fa fa-download"></i> Descargar Ficha Técnica</a>
              <div id='product-component-05cfb487fb6'></div>
              </div>
            </div>
          </div>
        </div>
        @endif
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

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Descargar ficha técnica</h4>
      </div>
      <form method="post" action="{{url('descargaFicha')}}">
       {{ csrf_field() }}
      <div class="modal-body">
       <label>Nombre:</label>
      <input type="text" class="form-control" name="nombre" placeholder="Nombre">
       <label>Teléfono:</label>
      <input type="text" class="form-control" name="telefono" placeholder="Teléfono">

      <label>Introduce tu correo electrónico:</label>
      <input type="hidden" name="id" value="{{$producto->id}}"> 
      <input type="text" class="form-control" name="email" placeholder="ejemplo@ejemplo.scom">
      </div>
      <div class="modal-footer">
        <button type="button" style="background-color: #C12E2A!important;" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
        <button type="submit" style="background-color: #419641!important;" class="btn btn-success">Enviar</button>
      </div>
      </form>
    </div>
  </div>
</div>
    
@endsection