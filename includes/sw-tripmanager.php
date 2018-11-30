<!-- Breadcrumbs -->
<section class="breadcrumbs-custom">
  <div class="breadcrumbs-custom__aside bg-image context-dark" style="background-image: url(images/bg-image-1-1920x900.jpg);">
    <div class="container">
      <h2 class="breadcrumbs-custom__title">TRIPMANAGER</h2>
    </div>
  </div>
  <div class="breadcrumbs-custom__main bg-gray-light">
    <div class="container">
      <ul class="breadcrumbs-custom__path">
        <li><a href="/techsulsite">Home</a></li>
        <li><a href="software">Software</a></li>
        <li class="active">Tripmanager</li>
      </ul>
    </div>
  </div>
</section>

<!-- Page title -->
<section class="section section-md bg-white text-center">
  <div class="container">    
    <div class="row row-30 justify-content-md-center" ng-controller="TripManagerController">
      <h2>A Aplicação</h2>
      <p class="big text-center">{{ short }}</p>
      
      <div ng-repeat="box in boxes" class="col-md-6 col-lg-4">
        <!-- Box Chloe-->
        <article class="box-chloe box-chloe_secondary">
          <div class="box-chloe__icon linearicons-{{ box.icon }}"></div>
          <div class="box-chloe__main">
            <h4 class="box-chloe__title">{{ box.title }}</h4>
            <p>{{ box.description }}</p>
          </div>
        </article>
      </div>  

    </div>
  </div>
</section>


<!-- Pricing Tables-->
<section class="section section-md bg-gray-light text-center">
  <div class="container" ng-controller="TripManagerPricesController">
    <h2>Preços</h2>
    <p class="big text-center">Conheça aqui os nossos preços</p>
    <p>Os preços apresentados não incluem IVA</p>
    <div class="row row-30 justify-content-md-center">

      <div class="col-md-6 col-lg-4" ng-repeat="box in boxes">
        <!-- Pricing table item-->
        <article class="pricing-table__item pricing-table-modern__item pricing-table-modern__item{{ box.prefered }}">
          <div class="pricing-table__item-header">
            <div class="pricing-table__item-header-bg">
              <div class="pricing-table__item-header-bg-inner"></div>
            </div>
            <p class="pricing-table__item-title">{{ box.title }}</p>
          </div>
          <div class="pricing-table__item-main">
            <div class="pricing-table__item-price">
              <span class="pricing-table__item-price-currency">€</span>
              <span class="pricing-table__item-price-value">{{ box.price }}</span>
              <div class="pricing-table__item-price-aside">
                <span class="top">mês</span>
              </div>
            </div>
            <div class="pricing-table__item-divider"></div>
            <ul class="pricing-table__item-features">
              <li><span class="text-marked">{{ box.setup }}</span></li>              
              <li ng-repeat="attr in box.attrs"><span>{{ attr }}</span></li>              
            </ul>
            <div class="pricing-table__item-control">
              <a class="button button-default button-ujarak" href="#">Order now</a>
            </div>
          </div>
        </article>
      </div>
      
    </div>
  </div>
</section>