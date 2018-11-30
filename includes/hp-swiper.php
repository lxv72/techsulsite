<section class="section swiper-container swiper-slider swiper_style-1 swiper_height-1 swiper-controls-classic" data-loop="true" data-autoplay="false" data-simulate-touch="false" id="home">
  <div class="swiper-wrapper" ng-controller="SwiperController">

    <div ng-repeat="slide in slides" class="swiper-slide bg-image-dark" data-slide-bg="{{slide.image}}" data-title="{{slide.title}}">
      <div class="slide-overlay"></div>
      <div class="swiper-slide-caption">
        <div class="container text-left">
          <div class="row justify-content-center">
            <div class="col-md-10 col-sm-12">
              <h1 data-caption-animate="fadeInUpSmall" data-caption-delay="300">{{slide.title}}</h1>
              <p class="quote-classic__text call-subtitle_text" data-caption-animate="fadeInUpSmall" data-caption-delay="600">{{slide.subtitle}}<span class="group-item"></span></p>
              <a class="button button-lg button-primary" href="contatos" data-caption-animate="fadeInUpSmall" data-caption-delay="900">Marque já a sua Demo</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <div class="swiper-pagination"></div>
  <div class="swiper-button-prev"></div>
  <div class="swiper-button-next"></div>
</section>