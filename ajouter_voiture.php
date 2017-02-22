<!DOCTYPE html>
<?php

include "config.php";


	if ( isset($_POST['marque']) && isset($_POST['modele']) ) {
		
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
		
		
						
	mysql_query( "INSERT INTO voiture(marque,modele,num_immat,couleur,energie,puissance,vidange_dernier,vidange_prochaine,num_visite,visite_debut,visite_fin,prix_jour) 
	VALUES('$marque','$modele','$num_immat','$couleur','$energie','$puissance','$vidange_dernier','$vidange_prochaine','$num_visite','$visite_debut','$visite_fin','$prix_jour')");
	$sql = mysql_query( "select MAX(id_voiture) from voiture" ) ;
	$requete=mysql_fetch_array($sql);
 
  if($requete)
  {
    
	echo '<script type="text/javascript">alert("Vous avez bien ajouter la voiture");</script>';
	echo '<script type="text/javascript">window.location.href="ajout_photo_voiture.php?id='.$requete[0].'";</script>';
				
  }
  
  else
  {
    echo '<script type="text/javascript">alert("Il y a un problème dans votre ajout ");</script>';
  }
  

}
 else {
		
	}

?>

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
	
	<!-- Plugin CSS -->
    <link rel="stylesheet" type="text/css" href="vendor/plugins/datepicker/css/bootstrap-datetimepicker.css">
    <link rel="stylesheet" type="text/css" href="vendor/plugins/magnific/magnific-popup.css">
    
  

 

	

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
   <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
   <![endif]-->
</head>

<body class="dashboard-page sb-l-o sb-r-c"  class="timeline-page">

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
                        <li class="crumb-trail">Ajouter voiture</li>
                    </ol>
                </div>
                
            </header>
            <!-- End: Topbar -->

            <!-- Begin: Content -->
            <section id="content">

                 <h2 class="lh30 mt15 text-center">BADMEL <b class="text-primary">Location</b></h2>
                <p class="lead mb30 text-center">Location de voiture كــــراء السـيــارات</p>

                <div class="row">
                    <div class="col-md-9 center-block">
						<div class="admin-form">

                            <div id="p1" class="panel heading-border">

                                <div class="panel-body bg-light">

                                    <form method="post" action="" id="admin-form" id="timeline-image-form" enctype="multipart/form-data" role="form" >
                                   
                                    
                                        <div class="section-divider mb40 mt20"><span> VOITURES </span></div><!-- .section-divider -->
                                        
                                        <div class="section">
                                                <label for="firstname" class="field prepend-icon">
                                                    <input type="text" name="marque" id="firstname" class="gui-input" placeholder="Marque">
                                                    <label for="firstname" class="field-icon"></label>  
                                                </label>
                                            
                                        </div><!-- end .section row section -->                                    
                                                                          
                                    
										<div class="section">
                                                <label for="firstname" class="field prepend-icon">
                                                    <input type="text" name="modele" id="firstname" class="gui-input" placeholder="Modèle">
                                                    <label for="firstname" class="field-icon"></label>  
                                                </label>
                                            
                                        </div><!-- end .section row section -->                                    
                                    
                                        <div class="section">
                                            <label for="usercouleur" class="field prepend-icon">
                                                <input type="text" name="num_immat" id="usercouleur" class="gui-input" placeholder="N° d'Immat">
                                                <label for="usercouleur" class="field-icon"></label>  
                                            </label>
                                        </div><!-- end section -->
                                        
                                        <div class="section">
                                            <label for="website" class="field prepend-icon">
                                                <input type="text" name="couleur" id="website" class="gui-input" placeholder="Couleur">
                                                <label for="website" class="field-icon"></label>  
                                            </label>
                                        </div><!-- end section --> 
										
										<div class="section">
                                            <label class="field select">
                                                <select id="language" name="energie">
                                                    <option value="">Enérgie</option>
                                                    <option value="Gasoil">Gasoil</option>
                                                    <option value="Essence">Essence</option>
                                                </select>
                                                <i class="arrow double"></i>                    
                                            </label>  
                                        </div><!-- end section -->

										<div class="section">
                                            <label for="website" class="field prepend-icon">
                                                <input type="texte" name="puissance" id="website" class="gui-input" placeholder="Puissanse">
                                                <label for="website" class="field-icon"></label>  
                                            </label>
                                        </div><!-- end section -->                    
                                        
										<div class="section">
												<label for="username" class="field-label">Vidange : Dernier changement</label>
													
													<label for="" class="field prepend-icon">
														<input type="date"  name="vidange_dernier" class="gui-input" placeholder="Dernier changement">
														<label class="field-icon"><i class="field-icon"></i>
														</label>
													</label><br><br>
												<label for="username" class="field-label">Vidange : Prochaine changement</label>	
													<label for="" class="field prepend-icon">
														<input type="date" name="vidange_prochaine"  class="gui-input" placeholder="Prochaine changement">
														<label for="firstname" class="field-icon"></label>  
													</label>
												
										</div>
										
										<div class="section">
												<label for="username" class="field-label">Visite technique : Numéro document</label>
												
													<label for="username" class="field prepend-icon">
														<input type="text" name="num_visite" id="username" class="gui-input" placeholder="Numéro document">
														<label for="firstname" class="field-icon"></label> 
													</label><br><br>
												
												<label for="username" class="field-label">Visite technique : Date début</label>												
													<label for="" class="field prepend-icon">
														<input type="date"  name="visite_debut" class="gui-input" placeholder="Date début">
														<label class="field-icon"><i class="field-icon"></i>
														</label>
													</label><br><br>
												<label for="username" class="field-label">Visite technique : Date fin</label>	
													<label for="" class="field prepend-icon">
														<input type="date" name="visite_fin" class="gui-input" placeholder="Date fin">
														<label class="field-icon"><i class="field-icon"></i>
														</label>
													</label><br>
													
												
										</div>
										
										<div class="section">
                                            <label for="website" class="field prepend-icon">
                                                <input type="text" name="prix_jour" id="website" class="gui-input" placeholder="Prix par jour">
                                                <label for="website" class="field-icon"></label>  
                                            </label>
                                        </div><!-- end section --> 
										
										
							
							<div class="text-right">
                                        <button type="submit" name="envoyer_photo"class="button btn-primary"> Ajouter voiture </button>
                                        <button type="reset" class="btn btn-default"> Cancel </button>
                                    </div><!-- end .form-footer section --><br>

                       
   </form>
                                       
                                    
                                </div>
                            </div>
                        </div>

                            
                    </div>

                </div>
            
            </section>
            <!-- End: Content -->

        </section>
        <!-- End: Content-Wrapper -->


		
        <!-- Start: Right Sidebar -->
        <aside id="sidebar_right" class="nano">
            <div class="sidebar_right_content nano-content">
                <div class="tab-block sidebar-block br-n">
                    <ul class="nav nav-tabs tabs-border nav-justified hidden">
                        <li class="active">
                            <a href="#sidebar-right-tab1" data-toggle="tab">Tab 1</a>
                        </li>
                        <li>
                            <a href="#sidebar-right-tab2" data-toggle="tab">Tab 2</a>
                        </li>
                        <li>
                            <a href="#sidebar-right-tab3" data-toggle="tab">Tab 3</a>
                        </li>
                    </ul>
                    <div class="tab-content br-n">
                        <div id="sidebar-right-tab1" class="tab-pane active">

                            <h5 class="title-divider text-muted mb20"> Server Statistics <span class="pull-right"> 2013 <i class="fa fa-caret-down ml5"></i> </span> </h5>
                            <div class="progress mh5">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 44%">
                                    <span class="fs11">DB Request</span>
                                </div>
                            </div>
                            <div class="progress mh5">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 84%">
                                    <span class="fs11 text-left">Server Load</span>
                                </div>
                            </div>
                            <div class="progress mh5">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 61%">
                                    <span class="fs11 text-left">Server Connections</span>
                                </div>
                            </div>

                            <h5 class="title-divider text-muted mt30 mb10">Traffic Margins</h5>
                            <div class="row">
                                <div class="col-xs-5">
                                    <h3 class="text-primary mn pl5">132</h3>
                                </div>
                                <div class="col-xs-7 text-right">
                                    <h3 class="text-success-dark mn"> <i class="fa fa-caret-up"></i> 13.2% </h3>
                                </div>
                            </div>

                            <h5 class="title-divider text-muted mt25 mb10">Database Request</h5>
                            <div class="row">
                                <div class="col-xs-5">
                                    <h3 class="text-primary mn pl5">212</h3>
                                </div>
                                <div class="col-xs-7 text-right">
                                    <h3 class="text-success-dark mn"> <i class="fa fa-caret-up"></i> 25.6% </h3>
                                </div>
                            </div>

                            <h5 class="title-divider text-muted mt25 mb10">Server Response</h5>
                            <div class="row">
                                <div class="col-xs-5">
                                    <h3 class="text-primary mn pl5">82.5</h3>
                                </div>
                                <div class="col-xs-7 text-right">
                                    <h3 class="text-danger mn"> <i class="fa fa-caret-down"></i> 17.9% </h3>
                                </div>
                            </div>

                            <h5 class="title-divider text-muted mt40 mb20"> Server Statistics <span class="pull-right text-primary fw600">USA</span> </h5>
                            <div id="sidebar-right-map" class="hide-jzoom" style="width: 100%; height: 180px;"></div>

                        </div>
                        <div id="sidebar-right-tab2" class="tab-pane"></div>
                        <div id="sidebar-right-tab3" class="tab-pane"></div>
                    </div>
                    <!-- end: .tab-content -->
                </div>
            </div>
        </aside>
        <!-- End: Right Sidebar -->

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
	
	<!-- Page Plugins -->
    <script type="text/javascript" src="vendor/plugins/gmap/jquery.ui.map.min.js"></script>
    <script type="text/javascript" src="vendor/plugins/magnific/jquery.magnific-popup.js"></script>
    <script type="text/javascript" src="vendor/plugins/fileupload/fileupload.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap/holder.min.js"></script>


	
	
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



            $('#timeline-toggle').on('click', function() {
                $('#timeline').toggleClass('timeline-single');
                Holder.run();
            });

            // Attach debounced resize handler
            var rescale = function() {
                if ($(window).width() < 1250) {
                    $('#timeline').addClass('timeline-single');
                    $('#timeline-toggle').hide();
                } else {
                    $('#timeline').removeClass('timeline-single');
                    $('#timeline-toggle').show();
                }
                Holder.run();
            }
            var lazyLayout = _.debounce(rescale, 300);

            // convert to single timeline if under 1250px on load/resize
            $(window).resize(lazyLayout);
            rescale();



            // All of the event creation forms attached to the timeline
            var forms = '#timeline-basic-form, #timeline-image-form, #timeline-video-form, #timeline-map-form';

            // Cancel Form Submit and pass required variables 
            // to event creation function
            $(forms).submit(function(e) {
                var This = $(this);
                createEvent(e, This);
            });

            // Initilize Gmap1 - basic
            if ($('#map_canvas').length) {
                $('#map_canvas').gmap({
                    'center': '57.7973333,12.0502107',
                    'zoom': 10,
                    'disableDefaultUI': true,
                    'callback': function() {
                        var self = this;
                        self.addMarker({
                            'position': this.get('map').getCenter()
                        }).click(function() {
                            self.openInfoWindow({
                                'content': 'Hello World!'
                            }, this);
                        });
                    }
                });
            }

            // unique ID counter for Panel Clones
            var counter = 0;

            function createEvent(e, This) {
                e.preventDefault();
                // shared event field data
                var eventTitle = This.find('.event-name').val(),
                    eventDate = This.find('.datepicker').val();

                if (eventTitle == '') {
                    var eventTitle = "Example Title";
                }
                if (eventDate == '') {
                    var eventDate = "01/01/2014";
                }

                // The form creation panel simply collects data from the user
                // proccesses it and then creates a new panel to place it in.
                // That new panel is simply a clone of one which already exists.
                var clone = $('#clone').clone(true).attr('id', 'clone-' + counter).removeClass('panel-clone');
                clone.find('.panel-heading .panel-title').text(eventTitle);
                clone.find('.panel-heading .panel-date').text(eventDate)

                // append clone to container and display it
                var setClone = function setClone() {
                    clone.insertAfter(This.parents('.timeline-item')).hide();
                    clone.fadeIn();
                    This[0].reset();
                }

                // unique event field data
                var id = This.attr('id');

                switch (id) {
                    case 'timeline-basic-form':
                        var eventDesc = This.find('.event-desc').val();
                        clone.find('.panel-body p').text(eventDesc);
                        setClone()
                        break;
                    case 'timeline-image-form':
                        var eventImage = This.find('.fileupload-preview img').clone().addClass('img-responsive');
                        clone.find('.panel-body p').html(eventImage);
                        setClone()
                        break;
                    case 'timeline-video-form':
                        // cache form value
                        var eventVideo = This.find('.event-video').val();
                        // Create responsive video container
                        var eventCont = clone.find('.panel-body').html('<div class="embed-responsive embed-responsive-16by9"></div>');
                        // Fill container with iframe url from eventVideo Val
                        eventCont.find('.embed-responsive').html(eventVideo);
                        setClone()
                        break;
                    case 'timeline-map-form':
                        var eventMap = This.find('.event-map').val();
                        clone.find('.panel-body p').html('<div id="map_canvas1" class="map"></div>');
                        setClone();
                        $('#map_canvas1').gmap({
                            'center': '' + eventMap + '',
                            'zoom': 10,
                            'disableDefaultUI': true,
                            'callback': function() {
                                var self = this;
                                self.addMarker({
                                    'position': this.get('map').getCenter()
                                }).click(function() {
                                    self.openInfoWindow({
                                        'content': 'Hello World!'
                                    }, this);
                                });
                            }
                        });
                        break;
                }
                // add to unique ID counter
                counter++;

                // location.hash = clone.attr('id');        
            }

            // buttons for example map event creator
            $(".example-loc-1").click(function() {
                $('.event-map').val('34.0522342,-118.2436849');
            });
            $(".example-loc-2").click(function() {
                $('.event-map').val('40.7143528,-74.0059731');
            });
            $(".example-loc-3").click(function() {
                $('.event-map').val('35.6894875,139.69170639999993');
            });

            // Init Admin plugins
            $(".datepicker").datepicker({
                numberOfMonths: 1,
                prevText: '<i class="fa fa-chevron-left"></i>',
                nextText: '<i class="fa fa-chevron-right"></i>',
                showButtonPanel: false,
                beforeShow: function(input, inst) {
                    var newclass = 'admin-form';
                    var themeClass = $(this).parents('.admin-form').attr('class');
                    var smartpikr = inst.dpDiv.parent();
                    if (!smartpikr.hasClass(themeClass)) {
                        inst.dpDiv.wrap('<div class="' + themeClass + '"></div>');
                    }
                }
            });

            // Init Misc plugins
            $('a.gallery-item').magnificPopup({
                type: 'image',
                gallery: {
                    enabled: true
                }
            });

            // Demo purposes. Runs holder.js (temp images) after 
            // a tab has been clicked. Fixes content hidden bug
            $('a[data-toggle="tab"]').click(function() {
                var tabDelay = setTimeout(function() {
                    Holder.run();
                }, 20);
            });




        });
    </script>
    <!-- END: PAGE SCRIPTS -->

</body>


<!-- Mirrored from admindesigns.com/framework/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2013], Sun, 18 Jan 2015 11:44:31 GMT -->
</html>
