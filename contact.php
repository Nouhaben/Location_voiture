<!DOCTYPE html>

<!-- Mirrored from themes.webinane.com/rays/contact.html by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 16 Jan 2015 16:32:03 GMT -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>RESORT</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="" />
<meta name="keywords" content="" />

<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Arimo:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

<!-- Styles -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="css/animate.css" rel="stylesheet" type="text/css" />
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link href="css/responsive.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/colors/color.css" title="color1" />
<link href="css/colorpicker.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/owl-carousel.css" type="text/css" />
<link rel="stylesheet" href="layerslider/css/layerslider.css" type="text/css">

</head>

<body>
<div class="theme-layout">
<?php require "header_site.php"; ?>


<div class="page-top blackish">
	<div class="parallax" style="background:url(images/parallax2.jpg) repeat scroll 0 0 rgba(0, 0, 0, 0);" data-velocity="-.4"></div><!-- PARALLAX BACKGROUND IMAGE -->				
	<div class="container">
		<h1>NOUS CONTACTER</h1>
	</div>
</div>


<section>
	<div class="block">
		<div class="container">
			<div class="row">
				<div class="title">
					<h2>Nos <span>COORDONNÉES</span></h2>
					<p>Nous sommes heureux de vous servir</p>
				</div><!-- Title -->		
				<div class="col-md-6 column">
					<div class="contact-img">
						<img src="images/resource/contact-info.jpg" alt="" />
					</div>
				</div>
				<div class="col-md-6 column">
					<div class="info">
						<p>Duis at ante nec neque rhoncus pretium. Ut placerat euismod nibh.orcid mollis, est nonscelerisque blandit, velit nunc laoreet dol augue no elitin vehicula sem phasellu. Beforeyour treatment, treat yourself to a stea pool amidst the tranquil.</p>
						<div class="row">
							<div class="col-md-6">
								<strong>(800) 123-4567</strong>
								<ul>
									<li><i class="fa fa-home"></i> Address: 1234 Street Name, City Name, United States</li>
									<li><i class="fa fa-envelope"></i> Email: info@spyropress.com</li>
									<li><i class="fa fa-info"></i> http://www.webinane.com</li>
								</ul>
							</div>
							<div class="col-md-6">
								<ul class="timetable">
									<li>Monday – Friday: 9am to 20 pm</li>
									<li>Saturday: 9am to 17 pm</li>
									<li>Sunday: day off</li>									
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!-- Contact Information Section -->	




<?php require "footer_site.php"; ?>
</div>


<!-- SCRIPTS-->
	<script type="text/javascript" src="js/modernizr.custom.17475.js"></script>
	<script src="js/jquery-2.1.1.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.prettyPhoto.js" type="text/javascript"></script>
	<script src="js/jquery.plugin.min.js"></script>
	<script src="js/jquery.datepick.js"></script>
	<script src="js/jquery.scrolly.js"></script>
	<script src="js/userincr.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>    
	<script src="js/bootstrap-colorpicker.js"></script> 
  	<script src="js/script.js"></script>
	
	<!-- Scripts For Layer Slider  -->
	<script src="layerslider/js/greensock.js" type="text/javascript"></script>
	<script src="layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
	<script src="layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
    
	<script>
    jQuery(document).ready(function( $ ) {
        /* ============ LAYER SLIDER ================*/
		jQuery("#layerslider").layerSlider({
			responsive: true,
			responsiveUnder: 1280,
			layersContainer: 1170,
			skin: 'fullwidth',
			hoverPrevNext: true,
			skinsPath: 'layerslider/skins/'
		});

        /* ============ Date Pickers ================*/
		$('#popupDatepicker').datepick();
		$('#popupDatepicker2').datepick();

        /* ============ Increamenter Decreamenter ================*/
		$(".inc-dec").data({'min':0,'max':20,'step':1}).userincr();


        /* ============ Offer Carousel 1 ================*/
		$('.offer-carousel').owlCarousel({
			autoplay:true,
			autoplayTimeout:3500,
			smartSpeed:2000,
			loop:true,
			dots:false,
			nav:false,
			margin:0,
			singleItem:true,
			mouseDrag:false,
			items:1,
			autoHeight:true,
			animateIn:"fadeIn",
			animateOut:"fadeOut",
		});	 
        /* ============ Offer Carousel 2 ================*/
		$('.offer-carousel2').owlCarousel({
			autoplay:true,
			autoplayTimeout:1500,
			smartSpeed:2000,
			loop:true,
			dots:false,
			nav:false,
			margin:0,
			singleItem:true,
			mouseDrag:false,
			items:1,
			autoHeight:true,
			animateIn:"fadeIn",
			animateOut:"fadeOut",
		});	 
        /* ============ Offer Carousel 3 ================*/
		$('.offer-carousel3').owlCarousel({
			autoplay:true,
			autoplayTimeout:2500,
			smartSpeed:2000,
			loop:true,
			dots:false,
			nav:false,
			margin:0,
			singleItem:true,
			mouseDrag:false,
			items:1,
			autoHeight:true,
			animateIn:"fadeIn",
			animateOut:"fadeOut",
		});	 

        /* ============ Deal Carousel ================*/
		$('.deal-carousel').owlCarousel({
			autoplay:true,
			autoplayTimeout:2500,
			smartSpeed:2000,
			loop:true,
			dots:false,
			nav:true,
			margin:0,
			singleItem:true,
			mouseDrag:true,
			items:1,
			autoHeight:true,
			animateIn:"fadeIn",
			animateOut:"fadeOut",
		});	 


        /* ============ Sponsors Carousel ================*/
		$('.sponsors-carousel').owlCarousel({
			autoplay:true,
			autoplayTimeout:2500,
			smartSpeed:2000,
			loop:true,
			dots:false,
			nav:true,
			margin:0,
			mouseDrag:true,
			items:5,
			autoHeight:true,
			responsive : {
			    0 : {items : 1},
			    480 : {items :2},
			    768 : {items : 3},
			    1200 : {items : 5},
			}	
		});	
		
		 /* ============ Service Carousel ================*/
		$('.service-carousal').owlCarousel({
			autoplay:true,
			autoplayTimeout:3000,
			smartSpeed:2000,
			loop:true,
			dots:false,
			nav:true,
			margin:30,
			mouseDrag:true,
			items:3,
			autoHeight:true,
			responsive : {
			    0 : {items : 1},
			    480 : {items :2},
			    768 : {items : 2},
			    1200 : {items : 3},
			}	
		});	 

	});	 
	</script>	

</body>