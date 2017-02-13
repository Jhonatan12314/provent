@extends('frontend/layout')

@section('title', 'Inicio')

@section('content')
    <!-- Inner Header-->
    <section class="inner-banner2 clearfix">
      <div class="container clearfix">
        <h2>News Details</h2>
      </div>
    </section>
    <section class="breadcumb-wrapper">
      <div class="container clearfix">
        <ul class="breadcumb">
          <li><a href="index">Home</a></li>
          <li><span>News Details</span></li>
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
                <div class="img-box"><a href="blog-details"><img src="public/frontend/images/news/1.jpg" alt="" class="img-responsive"></a></div>
                <div class="meta-info">
                  <div class="content-box">
                    <ul class="post-links">
                     
                    </ul>
                  </div>
                </div>
                <h6>05 March 2016</h6>
                <h3>Cost for Industrial craftmanship</h3>
                <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid etx ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
                <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid etx ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
                <ul class="nav post-list">
                  <li>Dolor sit amet, consectetur</li>
                  <li>Sdipiscing elit,</li>
                  <li>Seddo eiusmod tempor</li>
                  <li>Incididunt ut labore et</li>
                  <li>Dolor sit amet, consectetur</li>
                  <li>Sdipiscing elit,</li>
                  <li>Seddo eiusmod tempor</li>
                  <li>Incididunt ut labore et</li>
                </ul>
                <h3>Two Column texts</h3>
                <div class="row">
                  <div class="col-sm-6 info">
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem ape riam, eaque ipsa quae ab illo invent ore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                  </div>
                  <div class="col-sm-6 info">
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem ape riam, eaque ipsa quae ab illo invent ore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                  </div>
                </div><br>
                <blockquote>
                  <p>Ut enim ad minima veniam, quis nostrum exercitatio nem ullam corporis suscipit labori osam, nisi ut aliqu id ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.</p>
                  <footer><a href="#">Michale John</a></footer>
                </blockquote>
                <p><b>Here is main text</b> quis nostrud exercitation ullamco laboris nisi here is itealic text ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat <a href="#">here is link text</a> cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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