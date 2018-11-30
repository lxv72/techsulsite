<div class="row row-30 justify-content-md-center" ng-controller="ZsPosController">
  <p class="big text-center">{{ short }}</p>
  <div class="col-md-6 col-lg-4" ng-repeat="box in boxes">
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