<!-- Breadcrumbs -->
<section class="breadcrumbs-custom">
  <div class="breadcrumbs-custom__aside bg-image context-dark" style="background-image: url(images/bg-image-10-1920x1080.jpg);">
    <div class="container">
      <h2 class="breadcrumbs-custom__title">FAQ</h2>
    </div>
  </div>
  <div class="breadcrumbs-custom__main bg-gray-light">
    <div class="container">
      <ul class="breadcrumbs-custom__path">
        <li><a href="index.html">Home</a></li>       
        <li class="active">FAQ</li>
      </ul>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="section section-md bg-gray-light">
  <div class="container" ng-controller="FaqsController">
    <!-- Bootstrap tabs -->
    <div class="tabs-custom tabs-horizontal tabs-creative" id="tabs-faq">
      <!-- Nav tabs  -->
      <ul class="nav nav-tabs"> 
        <li class="nav-item" ng-repeat="faq in faqs"><a class="nav-link" href="#tabs-faq-{{ faq.id }}" data-toggle="tab">{{ faq.type }} </a></li>
        <!--li class="nav-item"><a class="nav-link" href="#tabs-faq-2" data-toggle="tab">Software</a></li>
        <li class="nav-item"><a class="nav-link" href="#tabs-faq-3" data-toggle="tab">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="#tabs-faq-4" data-toggle="tab">Payments</a></li>
        <li class="nav-item"><a class="nav-link" href="#tabs-faq-5" data-toggle="tab">Technical problems</a></li-->
      </ul>
      <!-- Tab panes-->
      <div class="tab-content">
        <div class="tab-pane fade show active" id="tabs-faq-1">
          <div class="card-group card-group-custom card-group-corporate" id="accordion1" role="tablist" aria-multiselectable="true">
            <div class="row row-30">
              <div class="col-lg-6">
                <!-- Bootstrap card-->
                <div class="card card-custom card-corporate">
                  <div class="card-heading" id="accordion1Heading1" role="tab">
                    <div class="card-title"><a role="button" data-toggle="collapse" data-parent="#accordion1" href="#accordion1Collapse1" aria-controls="accordion1Collapse1" aria-expanded="true">Can I track my order?
                        <div class="card-arrow"></div></a>
                    </div>
                  </div>
                  <div class="card-collapse collapse show" id="accordion1Collapse1" role="tabpanel" aria-labelledby="accordion1Heading1">
                    <div class="card-body">
                      <p>Yes, you can! After placing your order you will receive an order confirmation via email. Each order starts production 24 hours after your order is placed. Within 72 hours of you placing your order, you will receive an expected delivery date. When the order ships, you will receive another email with the tracking number and a link. to trace the order online with the carrier.</p>
                    </div>
                  </div>
                </div>
                <!-- Bootstrap card-->
                <div class="card card-custom card-corporate">
                  <div class="card-heading" id="accordion1Heading2" role="tab">
                    <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#accordion1Collapse2" aria-controls="accordion1Collapse2">How can I change something in my order?
                        <div class="card-arrow"></div></a>
                    </div>
                  </div>
                  <div class="card-collapse collapse" id="accordion1Collapse2" role="tabpanel" aria-labelledby="accordion1Heading2">
                    <div class="card-body">
                      <p>If you need to change something in your order, please contact us immediately. We usually process orders within 30 minutes, and once we have processed your order, we will be unable to make any changes.</p>
                    </div>
                  </div>
                </div>
                <!-- Bootstrap card-->
                <div class="card card-custom card-corporate">
                  <div class="card-heading" id="accordion1Heading3" role="tab">
                    <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#accordion1Collapse3" aria-controls="accordion1Collapse3">Can I track my order?
                        <div class="card-arrow"></div></a>
                    </div>
                  </div>
                  <div class="card-collapse collapse" id="accordion1Collapse3" role="tabpanel" aria-labelledby="accordion1Heading3">
                    <div class="card-body">
                      <p>We accept Visa, MasterCard, and American Express credit and debit cards for your convenience.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <!-- Bootstrap card-->
                <div class="card card-custom card-corporate">
                  <div class="card-heading" id="accordion1Heading4" role="tab">
                    <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#accordion1Collapse4" aria-controls="accordion1Collapse4">How long will my order be delivered?
                        <div class="card-arrow"></div></a>
                    </div>
                  </div>
                  <div class="card-collapse collapse" id="accordion1Collapse4" role="tabpanel" aria-labelledby="accordion1Heading4">
                    <div class="card-body">
                      <p>Delivery times will depend on your location. Once payment is confirmed your order will be packaged. Delivery can be expected within a day.</p>
                    </div>
                  </div>
                </div>
                <!-- Bootstrap card-->
                <div class="card card-custom card-corporate">
                  <div class="card-heading" id="accordion1Heading5" role="tab">
                    <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#accordion1Collapse5" aria-controls="accordion1Collapse5">Can I return an item?
                        <div class="card-arrow"></div></a>
                    </div>
                  </div>
                  <div class="card-collapse collapse" id="accordion1Collapse5" role="tabpanel" aria-labelledby="accordion1Heading5">
                    <div class="card-body">
                      <p>Please contact our administrators for more information on returning products purchased on our website.</p>
                    </div>
                  </div>
                </div>
                <!-- Bootstrap card-->
                <div class="card card-custom card-corporate">
                  <div class="card-heading" id="accordion1Heading6" role="tab">
                    <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#accordion1Collapse6" aria-controls="accordion1Collapse6">What is a unique/non-unique purchase?
                        <div class="card-arrow"></div></a>
                    </div>
                  </div>
                  <div class="card-collapse collapse" id="accordion1Collapse6" role="tabpanel" aria-labelledby="accordion1Heading6">
                    <div class="card-body">
                      <p>Non-exclusive purchase means that other people can buy the template you have chosen some time later. Exclusive or unique purchase guarantees that you are the last person to buy this template. After an exclusive purchase occurs the template is being permanently removed from the sales directory and will never be available to other customers again. Only you and people who bought the template before you will own it.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="tabs-faq-2">
          <div class="card-group card-group-custom card-group-corporate" id="accordion2" role="tablist" aria-multiselectable="true">
            <div class="row row-30">
              <div class="col-lg-6">
                <!-- Bootstrap card-->
                <div class="card card-custom card-corporate">
                  <div class="card-heading" id="accordion2Heading1" role="tab">
                    <div class="card-title"><a role="button" data-toggle="collapse" data-parent="#accordion2" href="#accordion2Collapse1" aria-controls="accordion2Collapse1" aria-expanded="true">What template formats are available?
                        <div class="card-arrow"></div></a>
                    </div>
                  </div>
                  <div class="card-collapse collapse show" id="accordion2Collapse1" role="tabpanel" aria-labelledby="accordion2Heading1">
                    <div class="card-body">
                      <p>Website templates are available in Photoshop and HTML formats. Fonts are included with Photoshop file. In most templates HTML is compatible with Adobe® GoLive®, Macromedia Dreamweaver® and Microsoft Frontpage®.</p>
                    </div>
                  </div>
                </div>
                <!-- Bootstrap card-->
                <div class="card card-custom card-corporate">
                  <div class="card-heading" id="accordion2Heading2" role="tab">
                    <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#accordion2Collapse2" aria-controls="accordion2Collapse2">What can I do with your products?
                        <div class="card-arrow"></div></a>
                    </div>
                  </div>
                  <div class="card-collapse collapse" id="accordion2Collapse2" role="tabpanel" aria-labelledby="accordion2Heading2">
                    <div class="card-body">
                      <p>You may build a website using the template in any way you like. You may not resell or redistribute templates (like we do); claim intellectual or exclusive ownership to any of our products, modified or unmodified. All products are property of content providing companies and individuals. You are also not allowed to make more than one project using the same template (you have to purchase the same template once more in order to make another project with the same design).</p>
                    </div>
                  </div>
                </div>
                <!-- Bootstrap card-->
                <div class="card card-custom card-corporate">
                  <div class="card-heading" id="accordion2Heading3" role="tab">
                    <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#accordion2Collapse3" aria-controls="accordion2Collapse3">What is a unique/non-unique purchase?
                        <div class="card-arrow"></div></a>
                    </div>
                  </div>
                  <div class="card-collapse collapse" id="accordion2Collapse3" role="tabpanel" aria-labelledby="accordion2Heading3">
                    <div class="card-body">
                      <p>Non-exclusive purchase means that other people can buy the template you have chosen some time later. Exclusive or unique purchase guarantees that you are the last person to buy this template. After an exclusive purchase occurs the template is being permanently removed from the sales directory and will never be available to other customers again. Only you and people who bought the template before you will own it.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <!-- Bootstrap card-->
                <div class="card card-custom card-corporate">
                  <div class="card-heading" id="accordion2Heading4" role="tab">
                    <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#accordion2Collapse4" aria-controls="accordion2Collapse4">What are the advantages of a template?
                        <div class="card-arrow"></div></a>
                    </div>
                  </div>
                  <div class="card-collapse collapse" id="accordion2Collapse4" role="tabpanel" aria-labelledby="accordion2Heading4">
                    <div class="card-body">
                      <p>The major advantage is price: You get a high quality design for just $20-$70. You don’t have to hire a web designer or web design studio. Second advantage is time frame: It usually takes 5-15 days for a good designer to produce a web page of such quality.</p>
                    </div>
                  </div>
                </div>
                <!-- Bootstrap card-->
                <div class="card card-custom card-corporate">
                  <div class="card-heading" id="accordion2Heading5" role="tab">
                    <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#accordion2Collapse5" aria-controls="accordion2Collapse5">Do you provide any scripts?
                        <div class="card-arrow"></div></a>
                    </div>
                  </div>
                  <div class="card-collapse collapse" id="accordion2Collapse5" role="tabpanel" aria-labelledby="accordion2Heading5">
                    <div class="card-body">
                      <p>Our templates do not include any additional scripts. Newsletter subscriptions, search fields, forums, image galleries (in HTML versions of Flash products) are inactive. Basic scripts can be easily added at www.TemplateTuning.com If you are not sure that the element you’re interested in is active please contact our Support Chat for clarification.</p>
                    </div>
                  </div>
                </div>
                <!-- Bootstrap card-->
                <div class="card card-custom card-corporate">
                  <div class="card-heading" id="accordion2Heading6" role="tab">
                    <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#accordion2Collapse6" aria-controls="accordion2Collapse6">What do I receive when I order a template?
                        <div class="card-arrow"></div></a>
                    </div>
                  </div>
                  <div class="card-collapse collapse" id="accordion2Collapse6" role="tabpanel" aria-labelledby="accordion2Heading6">
                    <div class="card-body">
                      <p>After you complete the payment via our secure form you will receive the instructions for downloading the product. The source files in the download package can vary based on the type of the product you have purchased.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="tabs-faq-3">
          <div class="card-group card-group-custom card-group-corporate" id="accordion3" role="tablist" aria-multiselectable="true">
            <div class="row row-30">
              <div class="col-lg-6">
                <!-- Bootstrap card-->
                <div class="card card-custom card-corporate">
                  <div class="card-heading" id="accordion3Heading1" role="tab">
                    <div class="card-title"><a role="button" data-toggle="collapse" data-parent="#accordion3" href="#accordion3Collapse1" aria-controls="accordion3Collapse1" aria-expanded="true">What are the advantages of a template?
                        <div class="card-arrow"></div></a>
                    </div>
                  </div>
                  <div class="card-collapse collapse show" id="accordion3Collapse1" role="tabpanel" aria-labelledby="accordion3Heading1">
                    <div class="card-body">
                      <p>The major advantage is price: You get a high quality design for just $20-$70. You don’t have to hire a web designer or web design studio. Second advantage is time frame: It usually takes 5-15 days for a good designer to produce a web page of such quality.</p>
                    </div>
                  </div>
                </div>
                <!-- Bootstrap card-->
                <div class="card card-custom card-corporate">
                  <div class="card-heading" id="accordion3Heading2" role="tab">
                    <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#accordion3Collapse2" aria-controls="accordion3Collapse2">Do you provide any scripts?
                        <div class="card-arrow"></div></a>
                    </div>
                  </div>
                  <div class="card-collapse collapse" id="accordion3Collapse2" role="tabpanel" aria-labelledby="accordion3Heading2">
                    <div class="card-body">
                      <p>Our templates do not include any additional scripts. Newsletter subscriptions, search fields, forums, image galleries (in HTML versions of Flash products) are inactive. Basic scripts can be easily added at www.TemplateTuning.com If you are not sure that the element you’re interested in is active please contact our Support Chat for clarification.</p>
                    </div>
                  </div>
                </div>
                <!-- Bootstrap card-->
                <div class="card card-custom card-corporate">
                  <div class="card-heading" id="accordion3Heading3" role="tab">
                    <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#accordion3Collapse3" aria-controls="accordion3Collapse3">What do I receive when I order a template?
                        <div class="card-arrow"></div></a>
                    </div>
                  </div>
                  <div class="card-collapse collapse" id="accordion3Collapse3" role="tabpanel" aria-labelledby="accordion3Heading3">
                    <div class="card-body">
                      <p>After you complete the payment via our secure form you will receive the instructions for downloading the product. The source files in the download package can vary based on the type of the product you have purchased.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <!-- Bootstrap card-->
                <div class="card card-custom card-corporate">
                  <div class="card-heading" id="accordion3Heading4" role="tab">
                    <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#accordion3Collapse4" aria-controls="accordion3Collapse4">What template formats are available?
                        <div class="card-arrow"></div></a>
                    </div>
                  </div>
                  <div class="card-collapse collapse" id="accordion3Collapse4" role="tabpanel" aria-labelledby="accordion3Heading4">
                    <div class="card-body">
                      <p>Website templates are available in Photoshop and HTML formats. Fonts are included with Photoshop file. In most templates HTML is compatible with Adobe® GoLive®, Macromedia Dreamweaver® and Microsoft Frontpage®.</p>
                    </div>
                  </div>
                </div>
                <!-- Bootstrap card-->
                <div class="card card-custom card-corporate">
                  <div class="card-heading" id="accordion3Heading5" role="tab">
                    <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#accordion3Collapse5" aria-controls="accordion3Collapse5">What can I do with your products?
                        <div class="card-arrow"></div></a>
                    </div>
                  </div>
                  <div class="card-collapse collapse" id="accordion3Collapse5" role="tabpanel" aria-labelledby="accordion3Heading5">
                    <div class="card-body">
                      <p>You may build a website using the template in any way you like. You may not resell or redistribute templates (like we do); claim intellectual or exclusive ownership to any of our products, modified or unmodified. All products are property of content providing companies and individuals. You are also not allowed to make more than one project using the same template (you have to purchase the same template once more in order to make another project with the same design).</p>
                    </div>
                  </div>
                </div>
                <!-- Bootstrap card-->
                <div class="card card-custom card-corporate">
                  <div class="card-heading" id="accordion3Heading6" role="tab">
                    <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion3" href="#accordion3Collapse6" aria-controls="accordion3Collapse6">What is a unique/non-unique purchase?
                        <div class="card-arrow"></div></a>
                    </div>
                  </div>
                  <div class="card-collapse collapse" id="accordion3Collapse6" role="tabpanel" aria-labelledby="accordion3Heading6">
                    <div class="card-body">
                      <p>Non-exclusive purchase means that other people can buy the template you have chosen some time later. Exclusive or unique purchase guarantees that you are the last person to buy this template. After an exclusive purchase occurs the template is being permanently removed from the sales directory and will never be available to other customers again. Only you and people who bought the template before you will own it.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="tabs-faq-4">
          <div class="card-group card-group-custom card-group-corporate" id="accordion4" role="tablist" aria-multiselectable="true">
            <div class="row row-30">
              <div class="col-lg-6">
                <!-- Bootstrap card-->
                <div class="card card-custom card-corporate">
                  <div class="card-heading" id="accordion4Heading1" role="tab">
                    <div class="card-title"><a role="button" data-toggle="collapse" data-parent="#accordion4" href="#accordion4Collapse1" aria-controls="accordion4Collapse1" aria-expanded="true">What template formats are available?
                        <div class="card-arrow"></div></a>
                    </div>
                  </div>
                  <div class="card-collapse collapse show" id="accordion4Collapse1" role="tabpanel" aria-labelledby="accordion4Heading1">
                    <div class="card-body">
                      <p>Website templates are available in Photoshop and HTML formats. Fonts are included with Photoshop file. In most templates HTML is compatible with Adobe® GoLive®, Macromedia Dreamweaver® and Microsoft Frontpage®.</p>
                    </div>
                  </div>
                </div>
                <!-- Bootstrap card-->
                <div class="card card-custom card-corporate">
                  <div class="card-heading" id="accordion4Heading2" role="tab">
                    <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#accordion4Collapse2" aria-controls="accordion4Collapse2">What can I do with your products?
                        <div class="card-arrow"></div></a>
                    </div>
                  </div>
                  <div class="card-collapse collapse" id="accordion4Collapse2" role="tabpanel" aria-labelledby="accordion4Heading2">
                    <div class="card-body">
                      <p>You may build a website using the template in any way you like. You may not resell or redistribute templates (like we do); claim intellectual or exclusive ownership to any of our products, modified or unmodified. All products are property of content providing companies and individuals. You are also not allowed to make more than one project using the same template (you have to purchase the same template once more in order to make another project with the same design).</p>
                    </div>
                  </div>
                </div>
                <!-- Bootstrap card-->
                <div class="card card-custom card-corporate">
                  <div class="card-heading" id="accordion4Heading3" role="tab">
                    <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#accordion4Collapse3" aria-controls="accordion4Collapse3">What is a unique/non-unique purchase?
                        <div class="card-arrow"></div></a>
                    </div>
                  </div>
                  <div class="card-collapse collapse" id="accordion4Collapse3" role="tabpanel" aria-labelledby="accordion4Heading3">
                    <div class="card-body">
                      <p>Non-exclusive purchase means that other people can buy the template you have chosen some time later. Exclusive or unique purchase guarantees that you are the last person to buy this template. After an exclusive purchase occurs the template is being permanently removed from the sales directory and will never be available to other customers again. Only you and people who bought the template before you will own it.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <!-- Bootstrap card-->
                <div class="card card-custom card-corporate">
                  <div class="card-heading" id="accordion4Heading4" role="tab">
                    <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#accordion4Collapse4" aria-controls="accordion4Collapse4">What are the advantages of a template?
                        <div class="card-arrow"></div></a>
                    </div>
                  </div>
                  <div class="card-collapse collapse" id="accordion4Collapse4" role="tabpanel" aria-labelledby="accordion4Heading4">
                    <div class="card-body">
                      <p>The major advantage is price: You get a high quality design for just $20-$70. You don’t have to hire a web designer or web design studio. Second advantage is time frame: It usually takes 5-15 days for a good designer to produce a web page of such quality.</p>
                    </div>
                  </div>
                </div>
                <!-- Bootstrap card-->
                <div class="card card-custom card-corporate">
                  <div class="card-heading" id="accordion4Heading5" role="tab">
                    <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#accordion4Collapse5" aria-controls="accordion4Collapse5">Do you provide any scripts?
                        <div class="card-arrow"></div></a>
                    </div>
                  </div>
                  <div class="card-collapse collapse" id="accordion4Collapse5" role="tabpanel" aria-labelledby="accordion4Heading5">
                    <div class="card-body">
                      <p>Our templates do not include any additional scripts. Newsletter subscriptions, search fields, forums, image galleries (in HTML versions of Flash products) are inactive. Basic scripts can be easily added at www.TemplateTuning.com If you are not sure that the element you’re interested in is active please contact our Support Chat for clarification.</p>
                    </div>
                  </div>
                </div>
                <!-- Bootstrap card-->
                <div class="card card-custom card-corporate">
                  <div class="card-heading" id="accordion4Heading6" role="tab">
                    <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion4" href="#accordion4Collapse6" aria-controls="accordion4Collapse6">What do I receive when I order a template?
                        <div class="card-arrow"></div></a>
                    </div>
                  </div>
                  <div class="card-collapse collapse" id="accordion4Collapse6" role="tabpanel" aria-labelledby="accordion4Heading6">
                    <div class="card-body">
                      <p>After you complete the payment via our secure form you will receive the instructions for downloading the product. The source files in the download package can vary based on the type of the product you have purchased.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="tabs-faq-5">
          <div class="card-group card-group-custom card-group-corporate" id="accordion5" role="tablist" aria-multiselectable="true">
            <div class="row row-30">
              <div class="col-lg-6">
                <!-- Bootstrap card-->
                <div class="card card-custom card-corporate">
                  <div class="card-heading" id="accordion5Heading1" role="tab">
                    <div class="card-title"><a role="button" data-toggle="collapse" data-parent="#accordion5" href="#accordion5Collapse1" aria-controls="accordion5Collapse1" aria-expanded="true">What are the advantages of a template?
                        <div class="card-arrow"></div></a>
                    </div>
                  </div>
                  <div class="card-collapse collapse show" id="accordion5Collapse1" role="tabpanel" aria-labelledby="accordion5Heading1">
                    <div class="card-body">
                      <p>The major advantage is price: You get a high quality design for just $20-$70. You don’t have to hire a web designer or web design studio. Second advantage is time frame: It usually takes 5-15 days for a good designer to produce a web page of such quality.</p>
                    </div>
                  </div>
                </div>
                <!-- Bootstrap card-->
                <div class="card card-custom card-corporate">
                  <div class="card-heading" id="accordion5Heading2" role="tab">
                    <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion5" href="#accordion5Collapse2" aria-controls="accordion5Collapse2">Do you provide any scripts?
                        <div class="card-arrow"></div></a>
                    </div>
                  </div>
                  <div class="card-collapse collapse" id="accordion5Collapse2" role="tabpanel" aria-labelledby="accordion5Heading2">
                    <div class="card-body">
                      <p>Our templates do not include any additional scripts. Newsletter subscriptions, search fields, forums, image galleries (in HTML versions of Flash products) are inactive. Basic scripts can be easily added at www.TemplateTuning.com If you are not sure that the element you’re interested in is active please contact our Support Chat for clarification.</p>
                    </div>
                  </div>
                </div>
                <!-- Bootstrap card-->
                <div class="card card-custom card-corporate">
                  <div class="card-heading" id="accordion5Heading3" role="tab">
                    <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion5" href="#accordion5Collapse3" aria-controls="accordion5Collapse3">What do I receive when I order a template?
                        <div class="card-arrow"></div></a>
                    </div>
                  </div>
                  <div class="card-collapse collapse" id="accordion5Collapse3" role="tabpanel" aria-labelledby="accordion5Heading3">
                    <div class="card-body">
                      <p>After you complete the payment via our secure form you will receive the instructions for downloading the product. The source files in the download package can vary based on the type of the product you have purchased.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <!-- Bootstrap card-->
                <div class="card card-custom card-corporate">
                  <div class="card-heading" id="accordion5Heading4" role="tab">
                    <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion5" href="#accordion5Collapse4" aria-controls="accordion5Collapse4">What template formats are available?
                        <div class="card-arrow"></div></a>
                    </div>
                  </div>
                  <div class="card-collapse collapse" id="accordion5Collapse4" role="tabpanel" aria-labelledby="accordion5Heading4">
                    <div class="card-body">
                      <p>Website templates are available in Photoshop and HTML formats. Fonts are included with Photoshop file. In most templates HTML is compatible with Adobe® GoLive®, Macromedia Dreamweaver® and Microsoft Frontpage®.</p>
                    </div>
                  </div>
                </div>
                <!-- Bootstrap card-->
                <div class="card card-custom card-corporate">
                  <div class="card-heading" id="accordion5Heading5" role="tab">
                    <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion5" href="#accordion5Collapse5" aria-controls="accordion5Collapse5">What can I do with your products?
                        <div class="card-arrow"></div></a>
                    </div>
                  </div>
                  <div class="card-collapse collapse" id="accordion5Collapse5" role="tabpanel" aria-labelledby="accordion5Heading5">
                    <div class="card-body">
                      <p>You may build a website using the template in any way you like. You may not resell or redistribute templates (like we do); claim intellectual or exclusive ownership to any of our products, modified or unmodified. All products are property of content providing companies and individuals. You are also not allowed to make more than one project using the same template (you have to purchase the same template once more in order to make another project with the same design).</p>
                    </div>
                  </div>
                </div>
                <!-- Bootstrap card-->
                <div class="card card-custom card-corporate">
                  <div class="card-heading" id="accordion5Heading6" role="tab">
                    <div class="card-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion5" href="#accordion5Collapse6" aria-controls="accordion5Collapse6">What is a unique/non-unique purchase?
                        <div class="card-arrow"></div></a>
                    </div>
                  </div>
                  <div class="card-collapse collapse" id="accordion5Collapse6" role="tabpanel" aria-labelledby="accordion5Heading6">
                    <div class="card-body">
                      <p>Non-exclusive purchase means that other people can buy the template you have chosen some time later. Exclusive or unique purchase guarantees that you are the last person to buy this template. After an exclusive purchase occurs the template is being permanently removed from the sales directory and will never be available to other customers again. Only you and people who bought the template before you will own it.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>