<?php
isset($_GET["cat"]) ? $cat=$_GET["cat"] : $cat='all';
?>

<!-- Breadcrumbs -->
<section class="breadcrumbs-custom">
  <div class="breadcrumbs-custom__aside bg-image context-dark" style="background-image: url(/techsulsite/images/bg-image-15-1920x860.jpg);">
    <div class="container">
      <h2>Blog</h2>
    </div>
  </div>
  <div class="breadcrumbs-custom__main bg-gray-light">
    <div class="container">
      <ul class="breadcrumbs-custom__path">
        <li><a href="/techsulsite">Home</a></li>        
        <li class="active">Blog</li>
      </ul>
    </div>
  </div>
</section>


<!-- Blog-->
<section class="section section-lg bg-white text-center">
  <div class="container">
    <article class="blog-layout" ng-controller="blogController">
      <div class="blog-layout__main">
        <!-- Post Classic-->
        <?php
        if ($cat === 'all'){
        ?>
        <article class="post-classic" ng-repeat="article in articles | orderBy : '-pubdate' ">
        <?php
        }else{
        ?>
        <article class="post-classic" ng-repeat="article in articles | filter : {'category' : '<?=$cat?>' } | orderBy : '-pubdate' ">
        <?php
        }
        ?>
          <h3 class="post-classic__title"><a href="/techsulsite/blog-post/{{ article.id }}">{{ article.title }}</a></h3>
          <ul class="post-classic__meta">
            <li><span class="icon mdi mdi-calendar-blank"></span>
                <a href="blog-post.html">
                  <time datetime="2018">{{ article.pubdate | date : "MMM d, y" }}</time>
                </a>
              </li>
            <li><span class="icon mdi mdi-comment-question-outline"></span><a href="/techsulsite/blogg/{{ article.category }}">{{ article.category }}</a></li>
            <li><span class="icon mdi mdi-account"></span><span>by</span><a href="#">{{ article.author }}</a></li>
          </ul>
          <div class="post-classic__media">
            <a class="post-classic__figure" href="/techsulsite/blog-post/{{ article.id }}">
              <img class="post-classic__image" ng-src="{{ article.blog_image }}" alt="" width="715" height="417"/>
            </a>
          </div>
        </article>        

<!--
        <div class="pagination">
          <div class="pagination__control"><a href="#">Older posts</a></div>
          <ul class="pagination__list">
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
          </ul>
          <div class="pagination__control"><a href="#">Newer posts</a></div>
        </div>
-->      
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
          <p class="custom-heading-line heading-8">Latest Posts</p>
          <ul class="list-posts">
            <li ng-repeat="article in articles | limitTo: -5 | orderBy : '-pubdate'">
              <!-- Post Line-->
              <article class="post-line">
                <time class="post-line__time" datetime="2018">
                  <span class="post-line__time-day">{{ article.pubdate | date : "d" }}</span>
                  <span class="post-line__time-month">{{ article.pubdate | date : "MMM" }}</span>
                </time>
                <div class="post-line__title">
                  <a href="/techsulsite/blog-post/{{ article.id }}">{{ article.title}}</a>
                </div>
              </article>
            </li>
          </ul>
        </div>

        <div class="blog-layout__aside-item blog-layout__aside-item_bordered">
          <p class="custom-heading-line heading-8">Archive</p>
          <!-- Select 2-->
          <select class="form-input select" data-placeholder="All" data-minimum-results-for-search="Infinity" data-constraints="@Required">
            <option>August 2018</option>
            <option value="1">July 2018</option>
            <option value="2">June 2018</option>
            <option value="3">May 2018</option>
            <option value="4">April 2018</option>
            <option value="5">March 2018</option>
          </select>
        </div>
        <div class="blog-layout__aside-item"><a class="link-banner" href="#"><img src="/techsulsite/images/banner-305x302.jpg" alt="" width="305" height="302"/></a></div>
      </div>
    </article>
  </div>
</section>