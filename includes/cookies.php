<!-- Breadcrumbs -->
<section class="breadcrumbs-custom">
  <div class="breadcrumbs-custom__aside bg-image context-dark" style="background-image: url(images/bg-image-1-1920x900.jpg);">
    <div class="container">
      <h2 class="breadcrumbs-custom__title">Politica de Cookies</h2>
    </div>
  </div>
  <div class="breadcrumbs-custom__main bg-gray-light">
    <div class="container">
      <ul class="breadcrumbs-custom__path">
        <li><a href="index.html">Home</a></li>
        <li class="active">Politica de Cookies</li>
      </ul>
    </div>
  </div>
</section>
<style>
#cookies ul {
  list-style-type: disc;
  padding-left: 40px;
}
#cookies ul li {
  display: list-item;
}
#cookies p + ul, #cookies li + li {
  margin-top: 16px;
}
</style>
<!-- Privacy Policy-->
<section class="section section-md bg-gray-light" id="cookies">
  <div class="container">
    <div class="row row-50 justify-content-md-center text-center">
      <div class="col-md-9 col-lg-8 col-xl-6">
        <h3>Política de Cookies</h3>
        <p class="big">Neste site são utilizados cookies para melhorar a sua experiência de navegação e utilização. Esta página explica como o fazemos.</p>
      </div>
    </div>

    <div class="card-group card-group-custom card-group-corporate" id="accordion1" role="tablist" aria-multiselectable="true">      
      <div class="row justify-content-lg-center row-30" ng-controller="CookiesController">
        
        <div class="col-md-12">
          <!-- Bootstrap card-->
          <div class="card card-custom card-corporate" ng-repeat="cookie in cookies">
            <div class="card-heading" id="accordion1Heading{{ cookie.id }}" role="tab">
              <div class="card-title">
                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#accordion1Collapse{{ cookie.id }}" aria-controls="accordion1Collapse{{ cookie.id }}">{{ cookie.title }}<div class="card-arrow"></div></a>
              </div>
            </div>

            <div class="card-collapse collapse" id="accordion1Collapse{{ cookie.id }}" role="tabpanel" aria-labelledby="accordion1Heading{{ cookie.id }}">
              <div class="card-body" show-html="{{cookie.content}}"></div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>