<?php
isset($_GET["id"]) ? $id=$_GET["id"] : $id='1';
?>
<!-- Breadcrumbs -->
<section class="breadcrumbs-custom" ng-controller="blogController">
  <div class="breadcrumbs-custom__aside bg-image context-dark" style="background-image: url(/techsulsite/images/bg-1-blog.jpg);">    
    <div class="container">
      <h2 ng-repeat="article in articles | filter : {'id' : <?=$id?>}">{{ article.title }}</h2>
    </div>
  </div>
  <div class="breadcrumbs-custom__main bg-gray-light">
    <div class="container">
      <ul class="breadcrumbs-custom__path">
        <li><a href="/techsulsite">Home</a></li>
        <li><a href="/techsulsite/blogg">Blog</a></li>
        <li class="active">Blog post</li>
      </ul>
    </div>
  </div>
</section>

<!-- Blog post-->
<section class="section section-lg bg-white">
  <div class="container">
    <article class="blog-layout" ng-controller="blogController">
      <div class="blog-layout__main">
        <article class="post-single" ng-repeat="article in articles | filter : {'id' : <?=$id?>}"> 
          <div class="post-single__header">
            <ul class="post-single__meta">
              <li><span class="icon mdi icon mdi mdi-account"></span><span>by</span><a href="#">{{ article.author }}</a></li>
            </ul>
          </div>
          <div class="post-single__time-wrap">
            <time class="post-single__time" datetime="{{ article.pubdate | date : "YYYY" }}">
              <span class="post-single__time-day">{{ article.pubdate | date : "d" }}</span>
              <span class="post-single__time-month">{{ article.pubdate | date : "MMMM" }}</span>
            </time>
          </div>
          <h4 class="post-single__title">{{ article.title }}</h4>          
          <img ng-src="{{ article.blog_image }}" alt="" width="715" height="417"/>
          <div show-html="{{article.content}}"></div>

          <!--div class="post-single__footer">
            <div class="post-single__footer-inner">
              <h5>Share this post</h5>
              <ul class="list-inline list-inline-xs"> 
                <li><a class="icon icon-xs icon-gray-dark fa fa-facebook" href="#"></a></li>
                <li><a class="icon icon-xs icon-gray-dark fa fa-twitter" href="#"></a></li>                
              </ul>
            </div>
          </div-->
        </article>

        <div class="section-md section-collapse">
          <p class="custom-heading-line heading-8">Recent posts</p>
          <div class="row row-50">
            <div class="col-md-6" ng-repeat="article in articles | limitTo: -4 | orderBy : '-pubdate' ">
              <!-- Post Minimal-->
              <article class="post-minimal"><a class="post-minimal__media" href="/techsulsite/blog-post/{{ article.id }}"><img class="post-minimal__image" ng-src="{{ article.single_image}}" alt="" width="368" height="293"/></a>
                <h4 class="post-minimal__title"><a href="/techsulsite/blog-post/{{ article.id }}">{{ article.title }}</a></h4>
                <ul class="post-minimal__meta">                  
                  <li><span class="icon mdi mdi-account"></span><span>by</span><a href="#">{{ article.author }}</a></li>
                </ul>
              </article>
            </div>
          </div>
        </div>
      </div>

      <div class="blog-layout__aside">        
        <div class="blog-layout__aside-item blog-layout__aside-item_bordered">
          <p class="custom-heading-line heading-8">Categorias</p>
          <ul class="list-categories">
            <li class="active"><a href="/techsulsite/blogg/all">Todas os artigos</a><span class="count">{{ articles.length }}</span></li>
            <li> <a href="/techsulsite/blogg/techpos">TechPOS</a><span class="count">{{ (articles | filter : { category: 'techpos' } : true).length }}</span></li>
            <li> <a href="/techsulsite/blogg/techrest">TechREST</a><span class="count">{{ (articles | filter : { category: 'techrest' } : true).length }}</span></li> 
            <li> <a href="/techsulsite/blogg/tripmanager">Tripmanager</a><span class="count">{{ (articles | filter : { category: 'tripmanager' } : true).length }}</span></li> 
            <li> <a href="/techsulsite/blogg/phc">PHC</a><span class="count">{{ (articles | filter : { category: 'phc' } : true).length }}</span></li>
            <li> <a href="/techsulsite/blogg/zonesoft">Zonesoft</a><span class="count">{{ (articles | filter : { category: 'zonesoft' } : true).length }}</span></li>
          </ul>
        </div>

        <div class="blog-layout__aside-item blog-layout__aside-item_bordered">
          <p class="custom-heading-line heading-8">Top Headlines</p>
          <ul class="list-posts">
            <li ng-repeat="article in articles | limitTo: -5 | orderBy : '-pubdate'">
              <!-- Post Line-->
              <article class="post-line">
                <time class="post-line__time" datetime="2018">
                  <span class="post-line__time-day">{{ article.pubdate | date : "d" }}</span>
                  <span class="post-line__time-month">{{ article.pubdate | date : "MMM" }}</span>
                </time>
                <div class="post-line__title">
                  <a href="{{ article.id }}">{{ article.title}}</a>
                </div>
              </article>
            </li>
          </ul>
        </div>
     
        <!--div class="blog-layout__aside-item">
          <a class="link-banner" href="#">
            <img src="/techsulsite/images/banner-305x302.jpg" alt="" width="305" height="302"/>
          </a>
        </div-->
      </div>
    </article>
  </div>
</section>      