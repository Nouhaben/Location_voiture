   <!DOCTYPE html>
<html>

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title>BADMEL Location</title>
    <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
    <meta name="description" content="BADMEL Location">
    <meta name="author" content="AdminDesigns">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">

    <!-- Admin Panels CSS -->
    <link rel="stylesheet" type="text/css" href="assets/admin-tools/admin-plugins/admin-panels/adminpanels.css">

    <!-- Admin Forms CSS -->
    <link rel="stylesheet" type="text/css" href="assets/admin-tools/admin-forms/css/admin-forms.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
   <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
   <![endif]-->
</head>

<body class="dashboard-page sb-l-o sb-r-c">

    <!-- Start: Theme Preview Pane -->
    <div id="skin-toolbox">
        
            
    </div>
    <!-- End: Theme Preview Pane -->

    <!-- Start: Main -->
    <div id="main">

        <!-- Start: Header -->
		
			<?php require "header.php"; ?>
		
        <!-- End: Header -->

        <!-- Start: Sidebar -->
			<?php require "sidebar.php"; ?>
		<!-- End: Sidebar -->
		 
        <!-- Start: Content -->
        <section id="content_wrapper">

            <!-- Start: Topbar-Dropdown -->
            <div id="topbar-dropmenu">
                <div class="topbar-menu row">
                    <div class="col-xs-4 col-sm-2">
                        <a href="#" class="metro-tile bg-success">
                            <span class="metro-icon glyphicons glyphicons-inbox"></span>
                            <p class="metro-title">Messages</p>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-2">
                        <a href="#" class="metro-tile bg-info">
                            <span class="metro-icon glyphicons glyphicons-parents"></span>
                            <p class="metro-title">Users</p>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-2">
                        <a href="#" class="metro-tile bg-alert">
                            <span class="metro-icon glyphicons glyphicons-headset"></span>
                            <p class="metro-title">Support</p>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-2">
                        <a href="#" class="metro-tile bg-primary">
                            <span class="metro-icon glyphicons glyphicons-cogwheels"></span>
                            <p class="metro-title">Settings</p>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-2">
                        <a href="#" class="metro-tile bg-warning">
                            <span class="metro-icon glyphicons glyphicons-facetime_video"></span>
                            <p class="metro-title">Videos</p>
                        </a>
                    </div>
                    <div class="col-xs-4 col-sm-2">
                        <a href="#" class="metro-tile bg-system">
                            <span class="metro-icon glyphicons glyphicons-picture"></span>
                            <p class="metro-title">Pictures</p>
                        </a>
                    </div>
                </div>
            </div>
            <!-- End: Topbar-Dropdown -->

            <!-- Start: Topbar -->
            <header id="topbar">
                <div class="topbar-left">
                    <ol class="breadcrumb">
                        <li class="crumb-active">
                             <a href="dashboard.php"><b>BADMEL </b>Location</a>
                        </li>
                        <li class="crumb-icon">
                            <a href="dashboard.html">
                                <span class="glyphicon glyphicon-home"></span>
                            </a>
                        </li>
                        <li class="crumb-link">Mes voitures</li>
                        <li class="crumb-link">Gérer mes voiture</li>
                        <li class="crumb-trail">Modifier </li>
                    </ol>
                </div>
                
            </header>
            <!-- End: Topbar -->

            <!-- Begin: Content -->
            <section id="content">

                <h2 class="lh30 mt15 text-center">BADMEL <b class="text-primary">Location</b></h2>
                <p class="lead mb30 text-center">Location de voiture كــــراء السـيــارات</p>
				<h4 class="lh30 mt15 text-center">Modifier voiture</b></h4>

                <div class="row">
                    <div class="col-md-9 center-block">

<?php
if(isset($_GET['id_voiture'])) {

	$email_utilisateur = $_GET['id_voiture'];
	
	$imagesGlobalPath = "img_voiture/"; //le répértoire dans lequel on va stocker les images des candidats
    if(isset($_FILES['photo_candidat'])){ //on vérifie que l'utilisateur a envoyé une image
    $fichier = basename($_FILES['photo_candidat']['name']); // on stock le nom du fichier envoyé dans une varibale
    $extension = strrchr($_FILES['photo_candidat']['name'], '.'); 
    $extensionsAutorisees = array(".png", ".jpg", ".JPG", ".jpeg", ".bmp"); 
    if(file_exists($imagesGlobalPath.$fichier)){ 
       echo '<script type="text/javascript">alert("Cette image existe déjà ou ça peut qu\'elle à le même nom d\'une autre image, veuillez la renommer.");</script>'; 
     }elseif(!(in_array($extension, $extensionsAutorisees))){ 
        echo '<script type="text/javascript">alert("Erreur : Aucun fichier selectionné ou l\'extension n\'est pas bonne !");</script>'; 
	 }elseif(move_uploaded_file($_FILES['photo_candidat']['tmp_name'], $imagesGlobalPath.$fichier) AND in_array($extension, $extensionsAutorisees)){ 
          echo '<script type="text/javascript">alert("Photo transférée avec succès !");</script>';
			header("Cache-Control: no-cache, must-revalidate");
			header("Expires: Mon, 26 Jul 2014 05:00:00 GMT");
     }else{ 
                switch ($_FILES['nom_du_fichier']['error']){  
                   case 1: // UPLOAD_ERR_INI_SIZE    
                   $err = '<script type="text/javascript">alert("Le fichier dépasse la limite du serveur (fichier php.ini) !");</script>';    
                   break;    
                   case 2: // UPLOAD_ERR_FORM_SIZE    
                   $err = '<script type="text/javascript">alert("Le fichier dépasse la limite du formulaire HTML !");</script>';
                   break;    
                   case 3: // UPLOAD_ERR_PARTIAL    
                   $err = '<script type="text/javascript">alert("L\'envoie du fichier à été interrompu par le serveur !");</script>';    
                   break;    
                   case 4: // UPLOAD_ERR_NO_FILE    
                   $err = '<script type="text/javascript">alert("Le fichier que vous avez envoyer à un taille 0 !");</script>';
                   break;    
                }
          echo 'Erreur : '.$err;
     }
	if(file_exists("img_voiture/".$email_utilisateur.".png")) {
		unlink("img_voiture/".$email_utilisateur.".png");
	}
	rename("img_voiture/".$fichier, "img_voiture/".$email_utilisateur.".png"); 
}
}
else{}

?>
                        <!-- Form Wizard -->
                        <div class="admin-form theme-primary">

                            <div class="panel">
							<?php
								include "config.php";

										$query ="SELECT * FROM voiture where id_voiture='".$_GET['id_voiture']."'";
										$response = mysql_query($query) or die(mysql_error());
												while ($enreg=mysql_fetch_array($response)){
												
												$email_utilisateur = $_GET['id_voiture'];
				?>
								<div class="section-divider mb40 mt20"><span> IMAGE VOITURE </span></div><!-- .section-divider -->
								
                            <div class="timeline-item">
								<div class="panel">
                                   
                                    <div class="panel-body">
                                        <div class="admin-form theme-primary">
                                            <div class="tab-content pn pt10 border-none">

                                                <div id="tab1" class="tab-pane active">
                                                   

                                                        <div class="fileupload fileupload-new" data-provides="fileupload">

                                                            <div class="tab-body">
                                                                <div class="fileupload-preview thumbnail">
                                                                    <img src="img_voiture/<?php echo $email_utilisateur.".png"; ?>" alt="voiture" style="margin-top: 5px;" width="170" height="190">
																	
                                                                </div>
                                                               
                                                            </div>
														<form method="post" action=""  enctype="multipart/form-data" role="form" >
															<span class="btn btn-system btn-file ">
																<span class="fileinput-new" >Select image</span>
																<input type="file" name="photo_candidat">
															</span>
															
															<button style="float:right" type="submit" name="envoyer_photo" class="btn btn-success "> Modifier </button>
														</form>
														</div>
                                                </div>
											</div>
                                        </div>
                                    </div>
                                </div>
							</div>
                                <form method="post" action="" id="admin-form">
                                    <div class="panel-body">
                                    
                                        <div class="section-divider mb40 mt20"><span> VOITURES </span></div><!-- .section-divider -->
                                        
                                        <div class="section">
                                                <label for="firstname" class="field prepend-icon">
                                                    <input type="text" name="marque" id="firstname" class="gui-input" placeholder="Marque" value="<?php echo $enreg['marque']?>">
                                                    <label for="firstname" class="field-icon"></label>  
                                                </label>
                                            
                                        </div><!-- end .section row section -->                                    
                                    
										<div class="section">
                                                <label for="firstname" class="field prepend-icon">
                                                    <input type="text" name="modele" id="firstname" class="gui-input" placeholder="Modèle" value="<?php echo $enreg['modele']?>">
                                                    <label for="firstname" class="field-icon"></label>  
                                                </label>
                                            
                                        </div><!-- end .section row section -->                                    
                                    
                                        <div class="section">
                                            <label for="useremail" class="field prepend-icon">
                                                <input type="text" name="num_immat" id="useremail" class="gui-input" placeholder="N° d'Immat" value="<?php echo $enreg['num_immat']?>">
                                                <label for="useremail" class="field-icon"></label>  
                                            </label>
                                        </div><!-- end section -->
                                        
                                        <div class="section">
                                            <label for="website" class="field prepend-icon">
                                                <input type="text" name="couleur" id="website" class="gui-input" placeholder="Couleur" value="<?php echo $enreg['couleur']?>">
                                                <label for="website" class="field-icon"></label>  
                                            </label>
                                        </div><!-- end section --> 
										
										<div class="section">
                                            <label class="field select">
                                                <select id="language" name="energie">
                                                    <option><?php echo $enreg['energie']?></option>
                                                    <option value="Gasoil">Gasoil</option>
                                                    <option value="Essence">Essence</option>
                                                </select>
                                                <i class="arrow double"></i>                    
                                            </label>  
                                        </div><!-- end section -->

										<div class="section">
                                            <label for="website" class="field prepend-icon">
                                                <input type="texte" name="puissance" id="website" class="gui-input" placeholder="Puissanse" value="<?php echo $enreg['puissance']?>">
                                                <label for="website" class="field-icon"></label>  
                                            </label>
                                        </div><!-- end section -->                    
                                        
										<div class="section">
												<label for="username" class="field-label">Vidange</label>
													
													<label class="field prepend-icon">
														<input type="date" name="vidange_dernier" class="gui-input" placeholder="Dernier changement" value="<?php echo $enreg['vidange_dernier']?>">
														<label class="field-icon"><i class="field-icon"></i>
														</label>
													</label><br><br>
													
													<label class="field prepend-icon">
														<input type="date" name="vidange_prochaine" class="gui-input" placeholder="Prochaine changement" value="<?php echo $enreg['vidange_prochaine']?>">
														<label for="firstname" class="field-icon"></label>  
													</label>
												
										</div>
										
										<div class="section">
												<label for="username" class="field-label">Visite technique</label>
												
													<label for="username" class="field prepend-icon">
														<input type="text" name="num_visite" id="username" class="gui-input" placeholder="Numéro document" value="<?php echo $enreg['num_visite']?>">
														<label for="firstname" class="field-icon"></label> 
													</label><br><br>
													
													<label class="field prepend-icon">
														<input type="date"  name="visite_debut" class="gui-input" placeholder="Date début" value="<?php echo $enreg['visite_debut']?>">
														<label class="field-icon"><i class="field-icon"></i>
														</label>
													</label><br><br>
													
													<label class="field prepend-icon">
														<input type="date"  name="visite_fin" class="gui-input" placeholder="Date fin" value="<?php echo $enreg['visite_fin']?>">
														<label class="field-icon"><i class="field-icon"></i>
														</label>
													</label>
												
										</div>
										
										<div class="section">
                                            <label for="website" class="field prepend-icon">
                                                <input type="text" name="prix_jour" id="website" class="gui-input" placeholder="Prix par jour" value="<?php echo $enreg['prix_jour']?>">
                                                <label for="website" class="field-icon"></label>  
                                            </label>
                                        </div><!-- end section --> 
											
                                    </div><!-- end .form-body section -->
                                    <div class="panel-footer text-right">
                                        <button type="submit" name="modifier" class="btn btn-success "> Modifier </button>
										<button type="reset" class="btn btn-default"> Cancel </button>
                                    </div><!-- end .form-footer section -->
                                </form>

                            </div>
				<?php
				}
				
				if ( isset($_POST['modifier']) ) {
		
						$marque=$_POST['marque'];
						$modele=$_POST['modele'];
						$num_immat=$_POST['num_immat'];
						$couleur=$_POST['couleur'];
						$energie=$_POST['energie'];
						$puissance=$_POST['puissance'];
						$vidange_dernier=$_POST['vidange_dernier'];
						$vidange_prochaine=$_POST['vidange_prochaine'];
						$num_visite=$_POST['num_visite'];
						$visite_debut=$_POST['visite_debut'];
						$visite_fin=$_POST['visite_fin'];
						$prix_jour=$_POST['prix_jour'];		
	
		
						
	$sql = "update voiture set marque = '".$marque."', 
					modele = '".$modele."' ,
					num_immat = '".$num_immat."' , 
					couleur = '".$couleur."' ,
					energie = '".$energie."' ,
					puissance = '".$puissance."' ,
					vidange_dernier = '".$vidange_dernier."' ,
					vidange_prochaine = '".$vidange_prochaine."' ,
					num_visite = '".$num_visite."' ,
					visite_debut = '".$visite_debut."' ,
					visite_fin = '".$visite_fin."' ,
					prix_jour = '".$prix_jour."'
					where id_voiture ='".$_GET['id_voiture']."' ;";
					$requete = mysql_query($sql) or die( mysql_error() );
 
  if($requete)
  {
    
	echo '<script type="text/javascript">alert("Votre modification ont bien effectué");</script>';
	echo '<script type="text/javascript">window.location.href="gerer_voiture.php";</script>';
				
  }
  
  else
  {
    echo '<script type="text/javascript">alert("Il y a un problème dans votre modification ");</script>';
  }
  

}
else{}
				?>
                        </div>
                        <!-- end: .admin-form -->

                    </div>

                </div>
            
            </section>
            <!-- End: Content -->

        </section>
        <!-- End: Content-Wrapper -->

        

    </div>
    <!-- End: Main -->

    <!-- BEGIN: PAGE SCRIPTS -->

    <style>
    
    /* demo page styles */
    body {
        min-height: 2300px;
    }
    .affix-pane.affix {
        top: 80px;
    }
    .admin-form .panel.heading-border:before,
    .admin-form .panel .heading-border:before {
        transition: all 0.7s ease;
    }
    .custom-nav-animation li {
        display: none;
    }
    .custom-nav-animation li.animated {
        display: block;
    }
    </style>

    <!-- Google Map API -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>

    <!-- jQuery -->
    <script type="text/javascript" src="vendor/jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Forms Javascript -->
    <script type="text/javascript" src="assets/admin-tools/admin-forms/js/jquery-tcm-month.js"></script>
    <script type="text/javascript" src="assets/admin-tools/admin-forms/js/jquery-ui-timepicker.min.js"></script>
    <script type="text/javascript" src="assets/admin-tools/admin-forms/js/jquery-ui-touch-punch.min.js"></script>
    <script type="text/javascript" src="assets/admin-tools/admin-forms/js/jquery.spectrum.min.js"></script>
    <script type="text/javascript" src="assets/admin-tools/admin-forms/js/jquery.stepper.min.js"></script>

    <!-- Theme Javascript -->
    <script type="text/javascript" src="assets/js/utility/utility.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/demo.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {

            "use strict";

            // Init Theme Core    
            Core.init();

            // Init Theme Core    
            Demo.init();


            // Init custom page animation
            setTimeout(function() {
                $('.custom-nav-animation li').each(function(i, e) {
                    var This = $(this);
                    var timer = setTimeout(function() {
                        This.addClass('animated animated-short zoomIn');
                    }, 50 * i);
                });
            }, 500);

            // Init tray navigation smooth scroll
            $('.tray-nav a').smoothScroll({
                offset: -145
            });

            // Form Switcher
            $('#form-switcher > button').on('click', function() {
                var btnData = $(this).data('form-layout');
                var btnActive = $('#form-elements-pane .admin-form.active');

                // Remove any existing animations and then fade current form out
                btnActive.removeClass('slideInUp').addClass('animated fadeOutRight animated-shorter');
                // When above exit animation ends remove leftover classes and animate the new form in
                btnActive.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
                    btnActive.removeClass('active fadeOutRight animated-shorter');
                    $('#' + btnData).addClass('active animated slideInUp animated-shorter')
                });
            });

            // Cache some dom elements
            var adminForm = $('.admin-form');
            var options = adminForm.find('.option');
            var switches = adminForm.find('.switch');
            var buttons = adminForm.find('.button');


            var Panel = $('#p1');

            // Form Skin Switcher
            $('#skin-switcher a').on('click', function() {
                var btnData = $(this).data('form-skin');

                $('#skin-switcher a').removeClass('item-active');
                $(this).addClass('item-active')

                adminForm.each(function(i, e) {
                    var skins = 'theme-primary theme-info theme-success theme-warning theme-danger theme-alert theme-system theme-dark'
                    var panelSkins = 'panel-primary panel-info panel-success panel-warning panel-danger panel-alert panel-system panel-dark'
                    $(e).removeClass(skins).addClass('theme-' + btnData);
                    Panel.removeClass(panelSkins).addClass('panel-' + btnData);
                });

                $(options).each(function(i, e) {
                    if ($(e).hasClass('block')) {
                        $(e).removeClass().addClass('block mt15 option option-' + btnData);
                    } else {
                        $(e).removeClass().addClass('option option-' + btnData);
                    }
                });


                // var sliders = $('.ui-timepicker-div', adminForm).find('.ui-slider');
                $('body').find('.ui-slider').each(function(i, e) {
                    $(e).addClass('slider-primary');
                });

                $(switches).each(function(i, ele) {
                    if ($(ele).hasClass('switch-round')) {
                        if ($(ele).hasClass('block')) {
                            $(ele).removeClass().addClass('block mt15 switch switch-round switch-' + btnData);
                        } else {
                            $(ele).removeClass().addClass('switch switch-round switch-' + btnData);
                        }
                    } else {
                        if ($(ele).hasClass('block')) {
                            $(ele).removeClass().addClass('block mt15 switch switch-' + btnData);
                        } else {
                            $(ele).removeClass().addClass('switch switch-' + btnData);
                        }
                    }

                });
                buttons.removeClass().addClass('button btn-' + btnData);
            });


            setTimeout(function() {
                adminForm.addClass('theme-primary');
                Panel.addClass('panel-primary');

                $(options).each(function(i, e) {
                    if ($(e).hasClass('block')) {
                        $(e).removeClass().addClass('block mt15 option option-primary');
                    } else {
                        $(e).removeClass().addClass('option option-primary');
                    }
                });

                // var sliders = $('.ui-timepicker-div', adminForm).find('.ui-slider');
                $('body').find('.ui-slider').each(function(i, e) {
                    $(e).addClass('slider-primary');
                });

                $(switches).each(function(i, ele) {
                    if ($(ele).hasClass('switch-round')) {
                        if ($(ele).hasClass('block')) {
                            $(ele).removeClass().addClass('block mt15 switch switch-round switch-primary');
                        } else {
                            $(ele).removeClass().addClass('switch switch-round switch-primary');
                        }
                    } else {
                        if ($(ele).hasClass('block')) {
                            $(ele).removeClass().addClass('block mt15 switch switch-primary');
                        } else {
                            $(ele).removeClass().addClass('switch switch-primary');
                        }
                    }
                });
                buttons.removeClass().addClass('button btn-primary');
            }, 2200);

            /* @time picker
             ------------------------------------------------------------------ */
            $('.inline-tp').timepicker();

            $('#timepicker1').timepicker({
                beforeShow: function(input, inst) {
                    var newclass = 'admin-form';
                    var themeClass = $(this).parents('.admin-form').attr('class');
                    var smartpikr = inst.dpDiv.parent();
                    if (!smartpikr.hasClass(themeClass)) {
                        inst.dpDiv.wrap('<div class="' + themeClass + '"></div>');
                    }
                }
            });

            $('#timepicker2').timepicker({
                showOn: 'both',
                buttonText: '<i class="fa fa-clock-o"></i>',
                beforeShow: function(input, inst) {
                    var newclass = 'admin-form';
                    var themeClass = $(this).parents('.admin-form').attr('class');
                    var smartpikr = inst.dpDiv.parent();
                    if (!smartpikr.hasClass(themeClass)) {
                        inst.dpDiv.wrap('<div class="' + themeClass + '"></div>');
                    }
                }
            });

            $('#timepicker3').timepicker({
                showOn: 'both',
                disabled: true,
                buttonText: '<i class="fa fa-clock-o"></i>',
                beforeShow: function(input, inst) {
                    var newclass = 'admin-form';
                    var themeClass = $(this).parents('.admin-form').attr('class');
                    var smartpikr = inst.dpDiv.parent();
                    if (!smartpikr.hasClass(themeClass)) {
                        inst.dpDiv.wrap('<div class="' + themeClass + '"></div>');
                    }
                }
            });


            /* @date time picker
            ------------------------------------------------------------------ */
            $('#datetimepicker1').datetimepicker({
                prevText: '<i class="fa fa-chevron-left"></i>',
                nextText: '<i class="fa fa-chevron-right"></i>',
                beforeShow: function(input, inst) {
                    var newclass = 'admin-form';
                    var themeClass = $(this).parents('.admin-form').attr('class');
                    var smartpikr = inst.dpDiv.parent();
                    if (!smartpikr.hasClass(themeClass)) {
                        inst.dpDiv.wrap('<div class="' + themeClass + '"></div>');
                    }
                }
            });

            $('#datetimepicker2').datetimepicker({
                //showOn: 'both',
                //buttonText: '<i class="fa fa-calendar-o"></i>',
				prevText: '<i class="fa fa-chevron-left"></i>',
                nextText: '<i class="fa fa-chevron-right"></i>',
                beforeShow: function(input, inst) {
                    var newclass = 'admin-form';
                    var themeClass = $(this).parents('.admin-form').attr('class');
                    var smartpikr = inst.dpDiv.parent();
                    if (!smartpikr.hasClass(themeClass)) {
                        inst.dpDiv.wrap('<div class="' + themeClass + '"></div>');
                    }
                }
            });

            $('#datetimepicker3').datetimepicker({
               // showOn: 'both',
                //buttonText: '<i class="fa fa-calendar-o"></i>',
                //disabled: true,
                prevText: '<i class="fa fa-chevron-left"></i>',
                nextText: '<i class="fa fa-chevron-right"></i>',
                beforeShow: function(input, inst) {
                    var newclass = 'admin-form';
                    var themeClass = $(this).parents('.admin-form').attr('class');
                    var smartpikr = inst.dpDiv.parent();
                    if (!smartpikr.hasClass(themeClass)) {
                        inst.dpDiv.wrap('<div class="' + themeClass + '"></div>');
                    }
                }
            });

            $('.inline-dtp').datetimepicker({
                prevText: '<i class="fa fa-chevron-left"></i>',
                nextText: '<i class="fa fa-chevron-right"></i>',
            });


            /* @date picker
            ------------------------------------------------------------------ */
            $("#datepicker1").datepicker({
                prevText: '<i class="fa fa-chevron-left"></i>',
                nextText: '<i class="fa fa-chevron-right"></i>',
                showButtonPanel: false
            });

            $('#datepicker2').datepicker({
                prevText: '<i class="fa fa-chevron-left"></i>',
                nextText: '<i class="fa fa-chevron-right"></i>',
                showButtonPanel: false
            });
			
			$('#datepicker3').datepicker({
                prevText: '<i class="fa fa-chevron-left"></i>',
                nextText: '<i class="fa fa-chevron-right"></i>',
                showButtonPanel: false
            });
			
			$('#datepicker4').datepicker({
                prevText: '<i class="fa fa-chevron-left"></i>',
                nextText: '<i class="fa fa-chevron-right"></i>',
                showButtonPanel: false
            });

            $('#datepicker3').datepicker({
                showOn: 'both',
                disabled: true,
                buttonText: '<i class="fa fa-calendar-o"></i>',
                prevText: '<i class="fa fa-chevron-left"></i>',
                nextText: '<i class="fa fa-chevron-right"></i>',
                beforeShow: function(input, inst) {
                    var newclass = 'admin-form';
                    var themeClass = $(this).parents('.admin-form').attr('class');
                    var smartpikr = inst.dpDiv.parent();
                    if (!smartpikr.hasClass(themeClass)) {
                        inst.dpDiv.wrap('<div class="' + themeClass + '"></div>');
                    }
                }
            });

            $('.inline-dp').datepicker({
                numberOfMonths: 1,
                prevText: '<i class="fa fa-chevron-left"></i>',
                nextText: '<i class="fa fa-chevron-right"></i>',
                showButtonPanel: false
            });

            /* @month picker
            ------------------------------------------------------------------ */
            $("#monthpicker1").monthpicker({
                changeYear: false,
                stepYears: 1,
                prevText: '<i class="fa fa-chevron-left"></i>',
                nextText: '<i class="fa fa-chevron-right"></i>',
                showButtonPanel: true,
                beforeShow: function(input, inst) {
                    var newclass = 'admin-form';
                    var themeClass = $(this).parents('.admin-form').attr('class');
                    var smartpikr = inst.dpDiv.parent();
                    if (!smartpikr.hasClass(themeClass)) {
                        inst.dpDiv.wrap('<div class="' + themeClass + '"></div>');
                    }
                }
            });

            $("#monthpicker2").monthpicker({
                prevText: '<i class="fa fa-chevron-left"></i>',
                nextText: '<i class="fa fa-chevron-right"></i>',
                showOn: 'both',
                buttonText: '<i class="fa fa-calendar-o"></i>',
                showButtonPanel: true,
                beforeShow: function(input, inst) {
                    var newclass = 'admin-form';
                    var themeClass = $(this).parents('.admin-form').attr('class');
                    var smartpikr = inst.dpDiv.parent();
                    if (!smartpikr.hasClass(themeClass)) {
                        inst.dpDiv.wrap('<div class="' + themeClass + '"></div>');
                    }
                }
            });

            $("#monthpicker3").monthpicker({
                changeYear: false,
                stepYears: 1,
                prevText: '<i class="fa fa-chevron-left"></i>',
                nextText: '<i class="fa fa-chevron-right"></i>',
                showOn: 'both',
                buttonText: '<i class="fa fa-calendar-o"></i>',
                showButtonPanel: true,
                disabled: true,
            });

            $('.inline-mp').monthpicker({
                prevText: '<i class="fa fa-chevron-left"></i>',
                nextText: '<i class="fa fa-chevron-right"></i>',
                showButtonPanel: false
            });

            /* @color picker
            ------------------------------------------------------------------ */

            var cPicker1 = $("#colorpicker1"),
                cPicker2 = $("#colorpicker2");

            var cContainer1 = cPicker1.parents('.sfcolor').parent(),
                cContainer2 = cPicker2.parents('.sfcolor').parent();

            $(cContainer1).add(cContainer2).addClass('posr');

            $("#colorpicker1").spectrum({
                color: bgInfo,
                appendTo: cContainer1,
                containerClassName: 'sp-left'
            });

            $("#colorpicker2").spectrum({
                color: bgPrimary,
                appendTo: cContainer2,
                containerClassName: 'sp-left',
                showInput: true,
                showPalette: true,
                palette: [
                    [bgPrimary, bgSuccess, bgInfo],
                    [bgWarning, bgDanger, bgAlert],
                    [bgSystem, bgDark, bgBlack]
                ]
            });

            $("#colorpicker3").spectrum({
                color: bgLightDr,
                showInput: true
            });

            $(".inline-cp").spectrum({
                color: bgInfo,
                showInput: true,
                showPalette: true,
                chooseText: "Select Color",
                flat: true,
                palette: [
                    [bgPrimary, bgSuccess, bgInfo, bgWarning,
                        bgDanger, bgAlert, bgSystem, bgDark,
                        bgSystem, bgDark, bgBlack
                    ]
                ]
            });

            $("#colorpicker1, #colorpicker2, #colorpicker3, .inline-cp").show();

            /* @numeric stepper
            ------------------------------------------------------------------ */
            $('#stepper3').stepper({
                wheel_step: 0.1,
                arrow_step: 0.2
            });

            $('#stepper4').stepper({
                UI: false,
                allowWheel: false
            });

            /* @ui slider
            ------------------------------------------------------------------ */
            $("#slider1").slider({
                range: "min",
                min: 0,
                max: 100,
                value: 30
            });

            $("#slider2").slider({
                range: true,
                values: [27, 63]
            });
            $("#slider3").slider({
                range: true,
                values: [7, 53]
            });

            $("#slider4").slider({
                range: true,
                values: [57, 93]
            });

            $("#slider5").slider({
                range: true,
                values: [37, 63]
            });


        });
    </script>

    <!-- END: PAGE SCRIPTS -->

</body>


<!-- Mirrored from admindesigns.com/framework/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2013], Sun, 18 Jan 2015 11:44:31 GMT -->
</html>
