<!-- Breadcrumbs -->
<section class="breadcrumbs-custom">
  <div class="breadcrumbs-custom__aside bg-image context-dark" style="background-image: url(images/bg-image-1-1920x900.jpg);">
    <div class="container">
      <h2 class="breadcrumbs-custom__title">ZONESOFT</h2>
    </div>
  </div>
  <div class="breadcrumbs-custom__main bg-gray-light">
    <div class="container">
      <ul class="breadcrumbs-custom__path">
        <li><a href="/techsulsite">Home</a></li>
        <li><a href="software">Software</a></li>
        <li class="active">Zonesoft</li>
      </ul>
    </div>
  </div>
</section>

<!-- Page title -->
<section class="section section-md bg-white text-center">
  <div class="container">
    <div class="row justify-content-xl-center">
      <div class="col-xl-12">
        <!--<h4>Horizontal Tabs</h4>-->
        <!-- Bootstrap tabs -->
        <div class="tabs-custom tabs-horizontal tabs-corporate" id="tabs-1">
          <!-- Nav tabs-->
          <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" href="#tabs-1-1" data-toggle="tab">ZS REST</a></li>
            <!--<li class="nav-item"><a class="nav-link" href="#tabs-1-2" data-toggle="tab">ZS REST 3 em 1</a></li>-->
            <li class="nav-item"><a class="nav-link" href="#tabs-1-3" data-toggle="tab">ZS POS</a></li>
            <li class="nav-item"><a class="nav-link" href="#tabs-1-4" data-toggle="tab">ZS POS Mobile</a></li>
          </ul>
          <!-- Tab panes-->
          <div class="tab-content">
            <div class="tab-pane fade show active" id="tabs-1-1">              
              <?php include 'includes/sw-zonesoft-zsrest.php';?>
            </div>
            <!--
            <div class="tab-pane fade" id="tabs-1-2">
              <?//php include 'includes/sw-zonesoft-zsrest-3-1.php';?>
            </div>
            -->
            <div class="tab-pane fade" id="tabs-1-3">
              <?php include 'includes/sw-zonesoft-zspos.php';?>
            </div>
            <div class="tab-pane fade" id="tabs-1-4">
              <?php include 'includes/sw-zonesoft-zspos-mobile.php';?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>