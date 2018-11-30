<section class="section section-sm bg-white text-center">
  <div class="container" ng-controller="ReasonsController">
    <h2>Razões para nos escolher</h2>
    <div class="row row-30 justify-content-md-center justify-content-lg-center wow fadeIn">
      
      <div class="col-md-6 col-lg-4" ng-repeat="box in reasons">
        <!-- Box Alice-->
        <article class="box-alice">
          <div class="box-alice__inner">
            <div class="box-alice__aside">
              <div class="box-alice__icon-outer">
                <div class="icon-figure">
                  <div class="box-triangle">
                    <svg x="0px" y="0px" width="80px" height="80px" viewBox="0 0 100 100" style="fill: #f7f7f7;">
                      <path d="M20,93.301c-11,0-15.5-7.794-10-17.321l30-51.962c5.5-9.526,14.5-9.526,20,0l30,51.962 c5.5,9.526,1,17.321-10,17.321H20z"></path>
                    </svg>
                  </div><span class="box-alice__icon linearicons-{{ box.icon }}"></span>
                </div>
              </div>
            </div>
            <div class="box-alice__main">
              <h5 class="box-alice__title">{{ box.title }}</h5>
              <p>{{ box.text }}</p>
            </div>
          </div>
        </article>
      </div>
         
    </div>
  </div>
</section>