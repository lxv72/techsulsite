<section class="section section-md bg-gray-light text-center" id="testimonials">
  <svg x="0px" y="0px" width="0" height="0">
    <defs>
      <linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
        <stop offset="0%" stop-color="#00abfa"></stop>
        <stop offset="100%" stop-color="#00caad"></stop>
      </linearGradient>
    </defs>
  </svg>
  <div class="container" ng-controller="TestimonialsController">
    <h2>Testemunhos</h2>
    <!-- Owl Carousel-->
    <div class="owl-outer-navigation-wrap owl-carousel_nav-modern wow fadeIn">
      <div class="owl-carousel quote-creative-carousel" data-items="1" data-lg-items="1" data-dots="true" data-nav="true" data-stage-padding="0" data-loop="true" data-autoplay="true" data-autoplay-timeout="5000" data-margin="30" data-mouse-drag="true" data-navigation-container="#owl-carousel-nav" data-dots-each="1">

        <div ng-repeat="quote in quotes" class="item">
          <!-- Quote Creative-->
          <article class="quote-creative">
            <div class="quote-creative__header">
              <div class="quote-creative__media">
                <img ng-src="{{ quote.image }}" alt="{{quote.subtitle}}" width="112" height="99"/>
              </div>
              <div class="quote-creative__info">
                <p class="quote-creative__title">{{quote.title}}</p>
                <p class="quote-creative__subtitle">{{quote.subtitle}}</p>
              </div>
            </div>
            <div class="quote-creative__main">
              <div class="quote-creative__mark">
                <svg x="0px" y="0px" width="39px" height="21px" viewbox="0 0 39 21">
                  <g fill="url(#grad1)">
                    <polyline points="8.955,21 0,14.031 0.002,0.001 15.984,0.001 15.984,13.984 8.969,14.016 "></polyline>
                    <polyline points="31.97,20.999 23.016,14.031 23.018,0.001 39,0.001 39,13.984 31.984,14.015 "></polyline>
                  </g>
                </svg>
              </div>
              <div class="quote-creative__main-text">
                <p>{{quote.text}}</p>
              </div>
            </div>
          </article>          
        </div>

      </div>
      <div class="owl-outer-navigation" id="owl-carousel-nav"></div>      
    </div>
  </div>
</section>