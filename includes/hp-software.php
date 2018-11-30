<style>
  .box-chloe__image{    
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    display: inline-block;
    width:120px;
    height:75px;        
  }  
  @media (min-width: 992px){
    html:not(.tablet):not(.mobile) .box-chloe:hover .box-chloe__image {
      -webkit-transform: scale3d(1.4, 1.4, 1.4);
      transform: scale3d(1.4, 1.4, 1.4);
    }
  }
  @media (min-width: 992px){
    html:not(.tablet):not(.mobile) .box-chloe__image {
      transition: .33s;
    }
  }
  .box-chloe__main p{
    min-height:120px;
  }
</style>
<section class="section section-lg bg-white text-center" id="software">
  <div class="container" ng-controller="SoftwareController">
    <h2>Software</h2>
    <div class="row row-30 justify-content-md-center">
      <div class="col-md-6 col-lg-4" ng-repeat="box in boxes">
        <!-- Box Chloe-->        
        <article class="box-chloe box-chloe_secondary">
          <div class="box-chloe__image" ng-style="{'background-image': 'url({{box.image}})'}"></div>
          <div class="box-chloe__main">
            <h4 class="box-chloe__title">{{ box.title }}</h4>
            <p>{{ box.text }}</p>
            <a class="button button-sm button-default button-ujarak" href="{{ box.link }}">Mais informações</a>
          </div>
        </article>
      </div>

    </div>
  </div>
</section>