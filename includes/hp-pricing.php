<style>
@media (min-width: 768px){
  .pricing-table-modern__item * + .pricing-table__item-features {    
    min-height: 190px;
	}
}
</style>
<section class="section section-md bg-gray-2 text-center" id="pricing">
  <div class="container wow fadeInUpSmall">
    <h2>Planos</h2>
    <p>Os valores apresentados não incluem IVA.</p>
    <div class="row row-30 justify-content-md-center" ng-controller="PriceController">
      <div class="col-md-6 col-lg-4" ng-repeat="price in prices">
        <!-- Pricing table item-->
        <article class="pricing-table__item pricing-table-modern__item pricing-table-modern__item{{ price.prefered }}">
          <div class="pricing-table__item-header">
            <div class="pricing-table__item-header-bg">
              <div class="pricing-table__item-header-bg-inner"></div>
            </div>
            <p class="pricing-table__item-title">{{ price.title }}</p>
          </div>
          <div class="pricing-table__item-main">
            <div class="pricing-table__item-price">
              <span class="pricing-table__item-price-currency">€</span>
              <span class="pricing-table__item-price-value">{{ price.price }}</span>
              <div class="pricing-table__item-price-aside">
                <span class="top">mês</span>
              </div>
            </div>
            <div class="pricing-table__item-divider"></div>
            <ul class="pricing-table__item-features">
              <li><span class="text-marked">{{ price.setup }}</span></li>
              <li ng-repeat="feature in price.features">{{ feature }}</li>                        
            </ul>
            <div class="pricing-table__item-control">
              <a class="button button-default button-ujarak" href="{{ price.link }}">Saiba mais</a>
            </div>
          </div>
        </article>
      </div>
    </div>
    
  </div>
</section>