<?php include 'includes/head.php';?>          

<?php include 'includes/nav.php';?>

<?php
// Engine
$pages = array('home'=>'includes/home.php',
            'software'=>'includes/sw-geral.php',
            'software-techpos'=>'includes/sw-techsul.php',
            'software-techrest'=>'includes/sw-techsul.php',
            'software-qticket'=>'includes/sw-qticket.php',
            'software-mobile-suport'=>'includes/sw-mobile-suport.php',
            'software-mobile-logistic'=>'includes/sw-mobile-logistic.php',
            'software-tripmanager'=>'includes/sw-tripmanager.php',
            'software-phc'=>'includes/sw-phc.php',
            'software-phcfx'=>'includes/sw-techsul.php',
            'software-zonesoft'=>'includes/sw-zonesoft.php',
            'software-etpos'=>'includes/sw-etpos.php',
            'blog-post'=>'includes/blog-post.php',
            'blogg'=>'includes/blog.php',
            'contatos'=>'includes/contact-us.php',
            'privacy-policy'=>'includes/privacy-policy.php',
            'cookies'=>'includes/cookies.php',
            'faq'=>'includes/faq.php');

//print_r($_GET);
if(isset($_GET["l"])){	
	if (array_key_exists($_GET["l"], $pages)){
		$page = $pages[$_GET["l"]];
	}else{
		header ("HTTP/1.0 404 Not Found");
        $page = "includes/404.php";
	}
}else{	
	$page = 'includes/home.php';
}
?>

<!--<div ng-view></div>-->

<?php include $page;?>      

<!-- Page Footer-->
<?php include 'includes/footer.php';?>