<!-- Accordion-->
<section class="section section-md bg-gray-light text-center">
  <div class="container">
    <h2>Módulos</h2>
    <!-- Bootstrap collapse-->
    <div class="card-group card-group-custom card-group-corporate" id="accordion1" role="tablist" aria-multiselectable="false">
      <div class="row row-30">
        <div class="col-md-6" ng-controller="PhcLeftController">
          <!-- Bootstrap card-->
          <div class="card card-custom card-corporate" ng-repeat="box in boxes">
            <div class="card-heading" id="accordion1Heading{{ box.id }}" role="tab">
              <div class="card-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion1" href="#accordion1Collapse{{ box.id }}" aria-controls="accordion1Collapse{{ box.id }}" aria-expanded="true">{{ box.title }}<div class="card-arrow"></div></a>
              </div>
            </div>

            <div class="card-collapse collapse" id="accordion1Collapse{{ box.id }}" role="tabpanel" aria-labelledby="accordion1Heading{{ box.id }}">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-4 col-12">
                    <img ng-src="{{ box.image }}" class="img-rounded img-responsive">
                  </div>
                  <div class="col-sm-8 col-12">
                    <p>{{ box.text }}</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-xl-12">
                    <iframe width="100%" height="315" ng-src="{{ trustSrc(box.src) }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                </div>

              </div>
            </div>

          </div>          

        </div>

        <div class="col-md-6" ng-controller="PhcRightController">
          <!-- Bootstrap card-->
          <div class="card card-custom card-corporate" ng-repeat="boxr in boxes">
            <div class="card-heading" id="accordion1Heading{{ boxr.id }}" role="tab">
              <div class="card-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion1" href="#accordion1Collapse{{ boxr.id }}" aria-controls="accordion1Collapse{{ boxr.id }}" aria-expanded="true">{{ boxr.title }}<div class="card-arrow"></div></a>
              </div>
            </div>

            <div class="card-collapse collapse" id="accordion1Collapse{{ boxr.id }}" role="tabpanel" aria-labelledby="accordion1Heading{{ boxr.id }}">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-4 col-12">
                    <img ng-src="{{ boxr.image }}" class="img-rounded img-responsive">
                  </div>
                  <div class="col-sm-8 col-12">
                    <p>{{ boxr.text }}</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-xl-12">
                    <iframe width="100%" height="315" ng-src="{{ trustSrc(boxr.src) }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                </div>

              </div>
            </div>

          </div>          

        </div>
        
    </div>
  </div>
</section>