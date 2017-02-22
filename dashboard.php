<!DOCTYPE html>
<?php 
	include "config.php";
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
                            <a href="dashboard.php"><b> Location</b> Voiture</a>
                        </li>
                        <li class="crumb-icon">
                            <a href="dashboard.html">
                                <span class="glyphicon glyphicon-home"></span>
                            </a>
                        </li>
                        <li class="crumb-link">Accueil</li>
                        <li class="crumb-trail">Statistique</li>
                    </ol>
                </div>
                
            </header>
            <!-- End: Topbar -->

            <!-- Begin: Content -->
            <section id="content">
				<?php
									$req = "select * from client";
									$res = mysql_query($req);
									$num = 1;
									while($enreg=mysql_fetch_array($res))
									{ 
									$enr['id_client'][$num] = $enreg['id_client'];
									$enr['date_ajout'][$num] = strstr($enreg['date_ajout'], " ",true);
									$enr['nom_rais_cli'][$num] = $enreg['nom_rais_cli'];
									$num++;
								}
							
					?>
					
                <!-- Dashboard Tiles -->
                <div class="row mb10">
                    <div class="col-md-3">
                        <div class="panel bg-alert light of-h mb10">
                            <div class="pn pl20 p5">
                                <div class="icon-bg"> <i class="fa fa-user"></i> </div>
                                <h2 class="mt15 lh15"> <b> <?php echo count($enr['id_client']); ?></b> </h2>
                                <h3 class="text-muted"><a style="color:white" href="syntheses_cli.php" >Infos clients</a></h3>
                            </div>
                        </div>
                    </div>
					
					<?php
									$req = "select * from voiture";
									$res = mysql_query($req);
									$num = 1;
									while($enreg=mysql_fetch_array($res))
									{ 
									$enr['id_voiture'][$num] = $enreg['id_voiture'];
									$enr['date_ajout'][$num] = strstr($enreg['date_ajout'], " ",true);
									$enr['marque'][$num] = $enreg['marque'];
									$num++;
								}
							
					?>
                    <div class="col-md-3">
                        <div class="panel bg-info light of-h mb10">
                            <div class="pn pl20 p5">
                                <div class="icon-bg"> <i class="fa fa-car"></i> </div>
                                <h2 class="mt15 lh15"> <b><?php echo count($enr['id_voiture']); ?></b> </h2>
                                <h3 class="text-muted"><a style="color:white" href="syntheses_voiture.php" >Infos voitures</a></h3>
                            </div>
                        </div>
                    </div>
					
					<?php
									$req = "select * from chauffeur";
									$res = mysql_query($req);
									$num = 1;
									while($enreg=mysql_fetch_array($res))
									{ 
									$enr['id_chauffeur'][$num] = $enreg['id_chauffeur'];
									$enr['date_ajout_chauff'][$num] = strstr($enreg['date_ajout_chauff'], " ",true);
									$enr['nom_pren'][$num] = $enreg['nom_pren'];
									$num++;
								}
							
					?>
                    <div class="col-md-3">
                        <div class="panel bg-danger light of-h mb10">
                            <div class="pn pl20 p5">
                                <div class="icon-bg"> <i class="fa fa-group"></i> </div>
                                <h2 class="mt15 lh15"> <b><?php echo count($enr['id_chauffeur']); ?></b> </h2>
                                <h3 class="text-muted">Infos chauffeurs</h3>
                            </div>
                        </div>
                    </div>
					
					<?php
									$req = "select * from louer_voiture";
									$res = mysql_query($req);
									$num = 1;
									while($enreg=mysql_fetch_array($res))
									{ 
									$enr['id_location'][$num] = $enreg['id_location'];
									$enr['date_ajout'][$num] = strstr($enreg['date_ajout'], " ",true);
									$enr['lieu_livr_retour'][$num] = $enreg['lieu_livr_retour'];
									$num++;
								}
							
					?>
                    <div class="col-md-3">
                        <div class="panel bg-warning light of-h mb10">
                            <div class="pn pl20 p5">
                                <div class="icon-bg"> <i class="fa fa-bar-chart-o"></i> </div>
                                <h2 class="mt15 lh15"> <b><?php echo count($enr['id_location']); ?></b> </h2>
                                <h3 class="text-muted"><a style="color:white" href="syntheses_vehicule.php" >Infos vehicules</a></h3>
                            </div>
                        </div>
                    </div>
					<?php
							
						$reqete = mysql_query("SELECT COUNT(  `vidange_prochaine` ) as total FROM  `voiture` WHERE  `vidange_prochaine` >= CURRENT_DATE( )" );
						$resultat =mysql_fetch_assoc($reqete);
											
								
					?>
					<div class="col-md-6">
                        <div class="panel bg-success light of-h mb10">
                            <div class="pn pl20 p5">
                                <div class="icon-bg"></div>
								<h3 class="text-muted"><a style="color:white, " href="syntheses_vehicule.php" ><?php echo $resultat['total']?></a></h3>
                                <h3 class="mt15 lh15"> <b>Nombre de voitures ayant besoin de vidange</b> </h3>
                                
                            </div>
                        </div>
                    </div>
					
					<?php
							
						$reqete = mysql_query("SELECT COUNT(  `visite_fin` ) as total FROM  `voiture` WHERE  `visite_fin` >= CURRENT_DATE( )" );
						$resultat =mysql_fetch_assoc($reqete);
											
								
					?>
					<div class="col-md-6">
                        <div class="panel bg-primary light of-h mb10">
                            <div class="pn pl20 p5">
                                <div class="icon-bg"></div>
                                <h3 class="text-muted"><a style="color:white" href="syntheses_vehicule.php" ><?php echo $resultat['total']?></a></h3>
								<h3 class="mt15 lh15"> <b>Nombre de voitures ayant besoin de visite technique</b> </h3>
                                
                            </div>
                        </div>
                    </div>
                </div>

               <?php
			
			   ?>
                
            </section>
            <!-- End: Content -->

        </section>
        <!-- End: Content-Wrapper -->


    </div>
    <!-- End: Main -->

    <!-- BEGIN: PAGE SCRIPTS -->

    <!-- Google Map API -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>

    <!-- jQuery -->
    <script type="text/javascript" src="vendor/jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Sparklines CDN -->
    <script type="text/javascript" src="../../cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>

    <!-- Chart Plugins -->
    <script type="text/javascript" src="vendor/plugins/highcharts/highcharts.js"></script>
    <script type="text/javascript" src="vendor/plugins/circles/circles.js"></script>
    <script type="text/javascript" src="vendor/plugins/raphael/raphael.js"></script>

    <!-- Holder js  -->
    <script type="text/javascript" src="assets/js/bootstrap/holder.min.js"></script>

    <!-- Theme Javascript -->
    <script type="text/javascript" src="assets/js/utility/utility.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/demo.js"></script>

    <!-- Admin Panels  -->
    <script type="text/javascript" src="assets/admin-tools/admin-plugins/admin-panels/json2.js"></script>
    <script type="text/javascript" src="assets/admin-tools/admin-plugins/admin-panels/jquery.ui.touch-punch.min.js"></script>
    <script type="text/javascript" src="assets/admin-tools/admin-plugins/admin-panels/adminpanels.js"></script>

    <!-- Page Javascript -->
    <script type="text/javascript" src="assets/js/pages/widgets.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {

            "use strict";

            // Init Theme Core      
            Core.init({
                sbm: "sb-l-c",
            });

            // Init Demo JS
            Demo.init();

            // Init Widget Demo JS
            // demoHighCharts.init();

            // Because we are using Admin Panels we use the OnFinish 
            // callback to activate the demoWidgets. It's smoother if
            // we let the panels be moved and organized before 
            // filling them with content from various plugins

            // Init plugins used on this page
            // HighCharts, JvectorMap, Admin Panels

            // Init Admin Panels on widgets inside the ".admin-panels" container
            $('.admin-panels').adminpanel({
                grid: '.admin-grid',
                draggable: true,
                mobile: false,
                callback: function() {
                    bootbox.confirm('<h3>A Custom Callback!</h3>', function() {});
                },
                onFinish: function() {
                    $('.admin-panels').addClass('animated fadeIn').removeClass('fade-onLoad');

                    // Init the rest of the plugins now that the panels
                    // have had a chance to be moved and organized.
                    // It's less taxing to organize empty panels
                    demoHighCharts.init();
                    runVectorMaps();

                    // We also refresh any "in-view" waypoints to ensure
                    // the correct position is being calculated after the 
                    // Admin Panels plugin moved everything
                    Waypoint.refreshAll();

                },
                onSave: function() {
                    $(window).trigger('resize');
                }
            });

            // Widget VectorMap
            function runVectorMaps() {

                // Jvector Map Plugin
                var runJvectorMap = function() {
                    // Data set
                    var mapData = [900, 700, 350, 500];
                    // Init Jvector Map
                    $('#WidgetMap').vectorMap({
                        map: 'us_lcc_en',
                        //regionsSelectable: true,
                        backgroundColor: 'transparent',
                        series: {
                            markers: [{
                                attribute: 'r',
                                scale: [3, 7],
                                values: mapData
                            }]
                        },
                        regionStyle: {
                            initial: {
                                fill: '#E5E5E5'
                            },
                            hover: {
                                "fill-opacity": 0.3
                            }
                        },
                        markers: [{
                            latLng: [37.78, -122.41],
                            name: 'San Francisco,CA'
                        }, {
                            latLng: [36.73, -103.98],
                            name: 'Texas,TX'
                        }, {
                            latLng: [38.62, -90.19],
                            name: 'St. Louis,MO'
                        }, {
                            latLng: [40.67, -73.94],
                            name: 'New York City,NY'
                        }],
                        markerStyle: {
                            initial: {
                                fill: '#a288d5',
                                stroke: '#b49ae0',
                                "fill-opacity": 1,
                                "stroke-width": 10,
                                "stroke-opacity": 0.3,
                                r: 3
                            },
                            hover: {
                                stroke: 'black',
                                "stroke-width": 2
                            },
                            selected: {
                                fill: 'blue'
                            },
                            selectedHover: {}
                        },
                    });
                    // Manual code to alter the Vector map plugin to 
                    // allow for individual coloring of countries
                    var states = ['US-CA', 'US-TX', 'US-MO',
                        'US-NY'
                    ];
                    var colors = [bgWarningLr, bgPrimaryLr, bgInfoLr, bgAlertLr];
                    var colors2 = [bgWarning, bgPrimary, bgInfo, bgAlert];
                    $.each(states, function(i, e) {
                        $("#WidgetMap path[data-code=" + e + "]").css({
                            fill: colors[i]
                        });
                    });
                    $('#WidgetMap').find('.jvectormap-marker')
                        .each(function(i, e) {
                            $(e).css({
                                fill: colors2[i],
                                stroke: colors2[i]
                            });
                        });
                }

                if ($('#WidgetMap').length) {
                    runJvectorMap();
                }
            }

        });
    </script>

    <!-- END: PAGE SCRIPTS -->

</body>


<!-- Mirrored from admindesigns.com/framework/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2013], Sun, 18 Jan 2015 11:44:31 GMT -->
</html>
