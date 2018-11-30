<!-- Swiper-->
<?php include 'hp-swiper.php';?>

<!-- Software-->
<?php include 'hp-software.php';?>

<!-- Pricing Tables-->
<?php include 'hp-pricing.php';?>

<!-- Why Choose Us NOT ANGULAR-->
<?php include 'hp-why-choose-us.php';?>

<!-- Facts-->
<?php include 'hp-facts.php';?>      

<!-- Our Clients-->
<?php include 'hp-testimonials.php';?>

<!-- Partners-->
<?php include 'hp-partners.php';?>

<script>
	document.addEventListener("DOMContentLoaded", function(){		
		var classSelect = document.querySelectorAll(".navegar")
		var numberClass = document.querySelectorAll(".navegar").length
		for(i=0; i<numberClass;i++) {
			classSelect[i].classList.add("scroll")
		}		
	})
    /*$(document).ready(function () {
        $(".rd-navbar-nav li a").addClass('scroll')
    })*/
</script>