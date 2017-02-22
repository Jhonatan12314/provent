@extends('frontend/layout')

@section('title', 'Detalle')

@section('content')
    <!-- Inner Header-->
    <section class="inner-banner2 clearfix">
      <div class="container clearfix">
        <h2>{{$noticia->titulo}}</h2>
      </div>
    </section>
    <section class="breadcumb-wrapper">
      <div class="container clearfix">
        <ul class="breadcumb">
          <li><a href="{{url('index')}}">Inicio</a></li>
          <li><span>Noticias</span></li>
        </ul>
      </div>
    </section>
    <!-- News Details Page-->
    <section class="core-projects sectpad">
      <div class="container clearfix">
        <div class="row">
          <div class="col-md-12 col-sm-12 pull-right">
            <!-- News-->
            <div class="single-post-wrapper news news-details">
              <!-- News 1-->
              <article class="single-blog-post img-cap-effect">
                <div class="img-box"><a href="blog-details"><img src="{{url($noticia->imagen)}}" alt="" class="img-responsive"></a></div>
                <div class="meta-info">
                  <div class="content-box">
                    <ul class="post-links">
                     
                    </ul>
                  </div>
                </div>
                <h6>{{$noticia->created_at}}</h6>
               <p>{!!html_entity_decode($noticia->descripcion)!!}</p>
              </article>
              <!-- Comments-->
              <div id="disqus_thread"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = '//veagn.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>


            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Indurial Solution-->

@endsection