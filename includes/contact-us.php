<!-- Breadcrumbs -->
<section class="breadcrumbs-custom">
  <div class="breadcrumbs-custom__aside bg-image context-dark" style="background-image: url(images/bg-image-8-1920x1000.jpg);">
    <div class="container">
      <h2 class="breadcrumbs-custom__title">Contactos</h2>
    </div>
  </div>
  <div class="breadcrumbs-custom__main bg-gray-light">
    <div class="container">
      <ul class="breadcrumbs-custom__path">
        <li><a href="/techsulsite">Home</a></li>
        <li class="active">Contact Us</li>
      </ul>
    </div>
  </div>
</section>

<!-- Contact Form -->
<section class="section section-md bg-white">
  <div class="container container_bigger"> 
    <div class="row justify-content-md-center justify-content-xl-between row-2-columns-bordered row-50">
      <div class="col-md-10 col-lg-5">
        <h3>Get in Touch</h3>
        <ul class="list-creative">
          <li>
            <dl class="list-terms-medium list-terms-medium_secondary">
              <dt>Morada</dt>
              <dd>Rua Vitorino Nemésio, Aldeia Azul Bloco 1, Loja B C D</dd>
              <dd>8200-093 Albufeira</dd>
            </dl>
          </li>
          <li>
            <dl class="list-terms-medium">
              <dt>Telefones</dt>
              <dd>
                <ul class="list-comma">
                  <li><a href="tel:#">+351 289 586 137 </a></li>
                  <li><a href="tel:#">+351 913 657 054</a></li>
                </ul>
              </dd>
            </dl>
          </li>
          <li>
            <dl class="list-terms-medium list-terms-medium_tertiary">
              <dt>E-mails</dt>
              <dd>
                <ul class="list-comma">
                  <li><a href="mailto:#">info@techsul.pt</a></li>                        
                </ul>
              </dd>
            </dl>
          </li>
        </ul>
      </div>
      <div class="col-md-10 col-lg-7 col-xl-6">
        <h3 class="text-center">Formulário de Contacto</h3>
        <!-- RD Mailform -->
        <form class="rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="/techsulsite/bat/rd-mailform.php">
          <div class="row align-items-md-end row-20">
            <div class="col-md-6"> 
              <div class="form-wrap">
                <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                <label class="form-label" for="contact-name">O seu Nome</label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-wrap">
                <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@PhoneNumber">
                <label class="form-label" for="contact-phone">Telefone</label>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-wrap">
                <label class="form-label" for="contact-message">A sua Mensagem</label>
                <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-wrap">
                <label class="form-label" for="contact-email">E-mail</label>
                <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">                
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-wrap">
                <label for="check" class="checkbox-inline">
                    <input id="check" name="check" class='checkboxtext' type="checkbox" data-constraints="@Checked"> Li e aceito a politica de privacidade da Techul
                  </label>
              </div>
            </div>
            <div class="col-md-6">
              <button class="button button-block button-primary button-ujarak" type="submit">Enviar</button>
            </div>
            <div class="col-md-7">
              <div class="form-wrap form-wrap-recaptcha">
                <!-- Google captcha-->
                <div class="recaptcha" id="captcha1" data-sitekey="6LctXH0UAAAAAFjLR7MmBxlXnrlIExfLCdLhJ5tO"></div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- RD Google Map  AIzaSyBJkMzDplq1Ybpq3cjubmLwPwSnHqcqbsQ AIzaSyCCwi-kSsonmT8fJ62fRomgP1-jcbGw-QY-->
<section class="section">
  <div class="google-map-container" data-center="Techsul IT Solutions" data-zoom="17" data-key="AIzaSyCCwi-kSsonmT8fJ62fRomgP1-jcbGw-QY" data-styles1="[{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;poi.attraction&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;poi.business&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi.government&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi.medical&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi.park&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;poi.place_of_worship&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi.school&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi.sports_complex&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]}]">
    <div class="google-map"></div>
    <ul class="google-map-markers">
      <li data-location="Techsul IT Solutions" data-description="Rua Vitorino Nemésio, Aldeia Azul Bloco 1, Loja B C D, 8200-093 Albufeira" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png"></li>
    </ul>
  </div>
</section>