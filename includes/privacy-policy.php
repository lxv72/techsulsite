<!-- Breadcrumbs -->
<section class="breadcrumbs-custom">
  <div class="breadcrumbs-custom__aside bg-image context-dark" style="background-image: url(images/bg-image-1-1920x900.jpg);">
    <div class="container">
      <h2 class="breadcrumbs-custom__title">Privacy Policy</h2>
    </div>
  </div>
  <div class="breadcrumbs-custom__main bg-gray-light">
    <div class="container">
      <ul class="breadcrumbs-custom__path">
        <li><a href="index.html">Home</a></li>        
        <li class="active">Privacy Policy</li>
      </ul>
    </div>
  </div>
</section>

<!-- Privacy Policy-->
<section class="section section-md bg-gray-light">
  <div class="container">
    <div class="card-group card-group-custom card-group-corporate" id="accordion1" role="tablist" aria-multiselectable="true">
      <div class="row justify-content-lg-center row-30" ng-controller="PrivacyController">
        <div class="col-md-6">
          <!-- Bootstrap card-->
          <div class="card card-custom card-corporate" ng-repeat="policy in policies | limitTo : 3">
            <div class="card-heading" id="accordion1Heading1" role="tab">
              <div class="card-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#accordion1Collapse{{ policy.id }}" aria-controls="accordion1Collapse{{ policy.id }}">{{ policy.title }}<div class="card-arrow"></div></a>
              </div>
            </div>

            <div class="card-collapse collapse" id="accordion1Collapse{{ policy.id }}" role="tabpanel" aria-labelledby="accordion1Heading{{ policy.id }}">
              <div class="card-body">
                <p>{{ policy.content }}</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <!-- Bootstrap card-->
          <div class="card card-custom card-corporate" ng-repeat="policy in policies | limitTo : 3 : 3">
            <div class="card-heading" id="accordion1Heading1" role="tab">
              <div class="card-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#accordion1Collapse{{ policy.id }}" aria-controls="accordion1Collapse{{ policy.id }}">{{ policy.title }}<div class="card-arrow"></div></a>
              </div>
            </div>

            <div class="card-collapse collapse" id="accordion1Collapse{{ policy.id }}" role="tabpanel" aria-labelledby="accordion1Heading{{ policy.id }}">
              <div class="card-body">
                <p>{{ policy.content }}</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>