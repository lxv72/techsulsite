<section class="section section-md bg-white text-center" id="partners">
	<div class="container" ng-controller="PartnersController">
		<h2>Portfólio</h2>

		<div class="owl-carousel" data-dots="false" data-nav="false" data-xl-items="8" data-lg-items="6" data-md-items="5" data-sm-items="3" data-loop="true" data-autoplay="true" data-autoplay-timeout="1500" data-margin="30" data-mouse-drag="true">			
			<div class="item" ng-repeat="partner in partners">
      			<img ng-src="{{ partner.image }}" alt="{{ partner.title }}" width="202" height="141"/>
      		</div>     
		</div>

	</div>
</section>