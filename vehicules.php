<!DOCTYPE html>

<!-- Mirrored from themes.webinane.com/rays/ by HTTrack Website Copier/3.x [XR&CO'2013], Fri, 16 Jan 2015 16:13:13 GMT -->
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
<link href="css/animate.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/owl-carousel.css" type="text/css" />
<link rel="stylesheet" href="layerslider/css/layerslider.css" type="text/css">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link href="css/responsive.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/colors/color.css" title="color1" />
<link href="css/colorpicker.css" rel="stylesheet" type="text/css" />

</head>

<body>
<div class="theme-layout">
<?php require "header_site.php"; ?>

<div class="page-top blackish">
	<div class="parallax" style="background:url(images/parallax2.jpg) repeat scroll 0 0 rgba(0, 0, 0, 0);" data-velocity="-.4"></div><!-- PARALLAX BACKGROUND IMAGE -->				
	<div class="container">
		<h1>Nos véhicules</h1>
		<p>Vous trouvez ci-dessus les vehicules de la location</p>
	</div>
</div>

<section>
	<div class="block gray">
		<div class="container">
			<div class="row">
				<div class="col-md-12 column">
					<div class="blog-posts">
						<div class="row">
							<?php
									
									include "config.php";
									
										$query ="SELECT * FROM voiture ";
										$response = mysql_query($query) or die(mysql_error());
												while ($enreg=mysql_fetch_array($response)){
												
												$email_utilisateur = $enreg['id_voiture'];
							?>
							<div class="col-md-3">
								<div class="blog">
									<img src="img_voiture/<?php echo $email_utilisateur.".png"; ?>" alt="voiture" style="margin-top: 5px;" width="230" height="450" >
									<div class="blog-detail">
										<ul>
											<li><a href="#" title=""><?php echo $enreg['marque'] ?></a></li>
											<li><a href="#" title=""><?php echo $enreg['modele'] ?></a></li>
										</ul>
										<h3><a href="#" title=""><?php echo $enreg['energie'] ?></a></h3>
										<p>Description de la voiture</p>
										<ul class="meta">
											<li><a href="#" title=""><i class="fa fa-key"></i> A partir de: </a></li>
											<li><a href="#" title=""><?php echo $enreg['prix_jour'] ?></a></li>
										</ul>
									</div>	
								</div><!-- Blog Post -->
							</div>
							<?php
							}
							?>
							
						</div>
					</div><!-- Offers -->
				</div>
			</div>
		</div>
	</div>
</section><!-- Offers Section With Half Parallax -->


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
	<script src="js/bootstrap-colorpicker.js"></script> 
  	<script src="js/script.js"></script>



</body>