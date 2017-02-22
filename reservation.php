 <!DOCTYPE html>
<?php
include "config.php";

?>
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



<section>
	<div class="block coloured">
	<div class="parallax" style="background:url(images/parallax10.jpg) repeat scroll 0 0 rgba(0, 0, 0, 0);" data-velocity="-.1"></div><!-- PARALLAX BACKGROUND IMAGE -->				
		<div class="container">
			<div class="row">
			<div class="title">
						<h2>RESERVER <span>MAINTENANT</span></h2>
						<p>Réservation simple et rapide de votre voiture  avec de nombreuses offres </p>
					</div><!-- Title -->
				<div class="contact-box fancy">
						<form action="" method="post" >
							<div class="row">
								<div class="col-md-6">
									<div class="form-field">
										<label>Nom ou raison social</label>
										<input type="text" name="nom" /><i class="fa fa-user"></i>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-field">
										<label>Telephone</label>
										<input type="text"  name="tel" /><i class="fa fa-phone"></i>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-field">
										<label>Email</label>
										<input type="text" name="email" /><i class="fa fa-envelope"></i>
										
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-field">
										<label>Véhicule réservé</label>
										<?php	
												
														$qq=mysql_query("SELECT * FROM voiture ");
															
															echo '<select  name="id_voiture" ><i class="fa fa-phone"></i>';
															while ($rw = mysql_fetch_array($qq)) 
													{
															echo '<option value="'.$rw['id_voiture'].'" >'.$rw['marque'].'&nbsp'.$rw['modele'].'&nbsp'.$rw['energie'].'&nbsp'.$rw['couleur'].'</option>';
														}
															echo '</select>';
															
													?>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-field">
										<label>Date départ</label>
										<input type="date"  name="date_depart"/><i class="fa fa-calendar-o"></i>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-field">
										<label>Heure départ</label>
										<input  type="text" name="heure_depart" value="<?php echo date('H:i'); ?>" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-field">
										<label>Date retour</label>
										<input type="date"  name="date_retour" /><i class="fa fa-calendar-o"></i>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-field">
										<label>Heure retour</label>
										<input  type="text" name="heure_retour" value="<?php echo date('H:i'); ?>" />
									</div>
								</div>
								
										<button style="float:right" type="submit" name="submit">Réserver Maintenant</button></a>
								
							</div>
						</form>
						<?php
								
								
								
								if ( isset($_POST['submit']) ) 
								{
									
									$nom=$_POST['nom'];
									$tel=$_POST['tel'];
									$email=$_POST['email'];
									$id_voiture=$_POST['id_voiture'];
									$date_depart=$_POST['date_depart'];
									$heure_depart=$_POST['heure_depart'];
									$date_retour=$_POST['date_retour'];
									$heure_retour=$_POST['heure_retour'];
									
                                    
									$sql = "INSERT INTO reservation (nom,tel,email,id_voiture,date_depart,heure_depart,date_retour,heure_retour,etat) VALUES ('$nom','$tel','$email','$id_voiture','$date_depart','$heure_depart','$date_retour','$heure_retour','non vu') ";
									$requete = mysql_query($sql) or die( mysql_error() ) ;
									
									
									if($requete){
										echo '<script type="text/javascript">alert("Vous réservation est bien effectuée");</script>';
										echo '<script type="text/javascript">window.location.href="reservation.php ";</script>';
									}
									
									else{
										echo '<script type="text/javascript">alert("Il y a un problème dans votre réservation ");</script>';
									}
								}
								
								else {}
									
								?>
					</div>
			</div>
		</div>
	</div>
</section><!-- Simple Text And Counters Section -->



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