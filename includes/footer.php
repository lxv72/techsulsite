  <footer class="section footer-classic context-dark">
    <div class="footer-classic__main bg-gray-3">
      <div class="container">
        <div class="row row-50 align-items-sm-end justify-content-sm-center justify-content-lg-start">
          <div class="col-lg-6">
            <div class="footer-classic__custom-column">
              <div class="unit flex-sm-row">
                <div class="unit__left"><span class="icon icon-md icon-default fl-bigmug-line-headphones32"></span></div>
                <div class="unit__body">
                  <a class="link link-lg" href="tel:#">+351 289 586 137</a>
                  <p>O nosso serviço de suporte está sempre disponível 24 horas por dia.</p>
                </div>
              </div>
            </div>
          </div>          
        </div>

        <div class="row row-50 justify-content-md-center justify-content-lg-start justify-content-xl-between">
          <div class="col-md-5 col-lg-3">
            <p class="custom-heading-1 custom-heading-bordered">Quem somos</p>
            <div class="divider"></div>
            <p class="ls-05">A Techsul vem desenvolvendo software confiável e de alta qualidade para as necessidades corporativas desde 1989.</p>
            <ul class="list-inline list-inline-xs">
              <li><a class="icon icon-xxs icon-circle icon-filled icon-filled_brand fa fa-facebook" href="https://www.facebook.com/techsul"></a></li>
              <li><a class="icon icon-xxs icon-circle icon-filled icon-filled_brand fa fa-twitter" href="https://www.twitter.com/techsul"></a></li>
              <!--
              <li><a class="icon icon-xxs icon-circle icon-filled icon-filled_brand fa fa-google-plus" href="#"></a></li>
              <li><a class="icon icon-xxs icon-circle icon-filled icon-filled_brand fa fa-instagram" href="#"></a></li>
              -->
            </ul>
          </div>
          <div class="col-md-5 col-lg-4 col-xl-3">
            <p class="custom-heading-1 custom-heading-bordered">Últimas</p>
            <div class="divider"></div>
            <div class="post-small-wrap" ng-controller="blogController">
              
              <!-- Post small-->
              <article class="post-small" ng-repeat="item in articles | limitTo: -2 | orderBy : '-pubdate'">
                <div class="post-small__aside">
                  <a class="post-small__media" href="/techsulsite/blog-post/{{ item.id }}">
                    <img class="post-small__image" ng-src="/techsulsite/{{ item.sm_image }}" alt="" width="80" height="68"/>
                  </a>
                </div>
                <div class="post-small__main">
                  <p class="post-small__title">
                    <a href="/techsulsite/blog-post/{{ item.id }}">{{ item.title }}</a>
                  </p>
                  <time class="post-small__time" datetime="2018">{{ item.pubdate | date : "MMMM d, y" }}</time>
                </div>
              </article>

            </div>
          </div>
          <div class="col-md-10 col-lg-5 col-xl-4"> 
            <p class="custom-heading-1 custom-heading-bordered">Links Úteis</p>
            <div class="divider"></div>
            <div class="row row-5">
              <div class="col-sm-6">
                <ul class="list-marked list-marked_primary">
                  <li><a href="/techsulsite/software-techpos">TechPOS</a></li>
                  <li><a href="/techsulsite/software-techrest">TechRest</a></li>
                  <li><a href="/techsulsite/software-qticket">QTicket</a></li>
                  <li><a href="/techsulsite/software-mobile-suport">Mobile Suport</a></li>
                  <li><a href="/techsulsite/software-mobile-logistic">Mobile Logistic</a></li>
                </ul>
              </div>
              <div class="col-sm-6">
                <ul class="list-marked list-marked_primary">
                  <li><a href="/techsulsite/software-tripmanager">Trip Manager</a></li>
                  <li><a href="/techsulsite/software-phc">PHC</a></li>                  
                  <li><a href="/techsulsite/software-zonesoft">ZoneSoft</a></li>
                  <li><a href="/techsulsite/software-etpos">ETPOS</a></li>
                  <li><a href="/techsulsite/contatos">Contactos</a></li>                  
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-default__aside bg-gray-5">
      <div class="container">
        <div class="footer-default__aside-inner">
          <!-- Rights-->
          <p class="rights">
            <span>&copy;&nbsp; 1989&nbsp;-</span>
            <span class="copyright-year"></span>
            <span>&nbsp;</span>
            <span>Techsul IT Solutions ® - Todos os direitos reservados</span>
            <span>.&nbsp;</span>
            <a href="/techsulsite/privacy-policy">Privacy Policy</a>
          </p>
          <ul class="list-separated list-inline">
            <li><a href="/techsulsite/faq">FAQ</a></li>
            <!--<li><a href="#">Support</a></li>-->
          </ul>
        </div>
      </div>
    </div>
  </footer>
</div><!-- /.page .animated -->

  <!-- Global Mailform Output-->
  <div class="snackbars" id="form-output-global"></div>

    <!-- Javascript-->
  <script src="/techsulsite/js/core.min.js"></script>  

  <!-- Include the AngularJS library --> 
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>  
  <script src="/techsulsite/js/app.js"></script>

  <script src="/techsulsite/js/script.js"></script>  
  <script>
    //jQuery(document).ready(function ($) {
    $(document).ready(function () {

        $(".scroll").click(function (event) {
            event.preventDefault();           
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1500)
        })

        // slider ETPOS
        sliderEffect( '.image-view img', '.images-thumbnails li a' )
    });

    var sliderEffect = function( elements, controls ) {
      if( $(elements).length == 0 ) return false
      $(elements).filter(':not(.active)').fadeOut(600)
      var periodical = function( next ) {
        var indexOf = $(elements).index( $(elements).filter('.active') );
        if( next == null ) indexOf++;
        else indexOf = next;
        if( indexOf == $(elements).length ) indexOf = 0;        
        $(controls).filter('.active').removeClass('active');
        $( $(controls)[indexOf] ).addClass('active');
        $(elements).filter('.active').removeClass('active').fadeOut(600, function() {
          $( $(elements)[indexOf] ).addClass('active').fadeIn(600);
        });
      }

      var periodicalInterval = setInterval( periodical, 4000 );
      
      $(controls).each( function( c, control ) {

        $(control).click( function(e) {          
          e.preventDefault()
          periodical(c)          
          clearInterval( periodicalInterval );
          periodicalInterval = setInterval( periodical, 4000 );
        });
      });
    }

  </script>  

  <!-- Google Analytics -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-46009906-1', 'auto');
    ga('send', 'pageview');

  </script>
  <!-- End Google Analytics -->

  <!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
  <script type="text/javascript">
    window.cookieconsent_options = {"message":"Este site utiliza cookies para melhorar a sua experiência de navegação. Ao continuar no site estará a consentir a sua utilização.","dismiss":"<i class='fa fa-times'></i>","learnMore":"Saiba mais sobre o uso de cookies.","link":"cookies","theme":"dark-bottom"};
  </script>
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.9/cookieconsent.min.js"></script>
  <!-- End Cookie Consent plugin -->

</body>
</html>