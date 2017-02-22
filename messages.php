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
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300">

    <!-- Required Plugin CSS -->
    <link rel="stylesheet" type="text/css" href="vendor/plugins/datatables/media/css/dataTables.bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/js/utility/highlight/styles/googlecode.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body class="messages-page">
    

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
                         <li class="crumb-link">Accueil</li>
                        <li class="crumb-trail">Les réservation</li>
                    </ol>
                </div>
                
            </header>
            <!-- End: Topbar -->

            <div id="content">
				
				<h2 class="lh30 mt15 text-center">BADMEL <b class="text-primary">Location</b></h2>
                <p class="lead mb30 text-center">Location de voiture كــــراء السـيــارات</p>
				<h4 class="lh30 mt15 text-center">Consulter Mes messages</b></h4>
			</div>
			
			<section id="content" class="p25">

                <div class="row">
                    <div class="col-md-3 pl5-md animated fadeIn">
                        <button type="button" class="btn btn-danger light btn-block compose-btn">Compose Message</button>
                        <div class="panel">
                            <div class="panel-body p10">

                                <div class="ph15 pv10 br-b br-light hidden">
                                    <div class="row table-layout">
                                        <div class="col-md-12 va-m pn">
                                            <button type="button" class="btn btn-danger light btn-block fw600">Compose Message
                                            </button>
                                        </div>
                                        <div class="col-md-6 text-right hidden">
                                            <div class="btn-group mr10">
                                                <button type="button" class="btn btn-default light"><i class="fa fa-star"></i>
                                                </button>
                                                <button type="button" class="btn btn-default light"><i class="fa fa-calendar"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h4 class="ph10 mt5 mb5"> Menu </h4>
                                <ul class="nav nav-messages p5" role="menu">
									<?php
					
									$yy=mysql_query("SELECT count(etat) as total FROM  `messages` WHERE etat='non lu' ");
									$dd=mysql_fetch_assoc($yy);
									
									
									?>
                                    <li class="active">
                                        <a href="#" class="text-dark fw600 p8 animated animated-short fadeInUp">
                                            <span class="fa fa-envelope pr5"></span> Messages
                                            <span class="pull-right lh20 h-20 label label-warning label-sm"><?php echo $dd['total']; ?></span>
                                        </a>
                                    </li>
									<li class="">
                                        <a href="#" class="fw600 p8 animated animated-short fadeInDown">
                                            <span class="fa fa-gear pr5"></span> Nouveau message
                                        </a>
                                    </li>
                                    
                                    
                                </ul>

                               

                            </div>
                        </div>
                    </div>
                    <div class="col-md-9 prn-md animated fadeIn">
                        <div class="panel">
                            <div class="bg-light pv8 pl15 pr10 br-a br-light">
                                <div class="row">
                                    <div class="hidden-xs hidden-sm col-md-3 va-m">
                                        
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default light"><i class="fa fa-refresh"></i>
                                            </button>
                                            <button type="button" class="btn btn-default light"><i class="fa fa-pencil"></i>
                                            </button>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="panel-body pn br-t-n">
                                <table class="table admin-form theme-warning tc-checkbox-1 br-t-n">
                                    <thead>
                                        <tr class="">
                                            <th>N° message</th>
                                            <th>Expéditeur  </th>
                                            <th>Sujet</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
										
										
										$query ="SELECT * FROM messages ";
										$response = mysql_query($query) or die(mysql_error());
												while ($enreg=mysql_fetch_array($response)){
												
												
												echo"<tr class=\"message-unread\">"; 
													echo"<td>".$enreg['id_msg']."<b></td>";
													echo"<td>".$enreg['nom_dess']."<b></td>";
													echo"<td>";
													
														$news = "'".$enreg['message']."'"; // le contenu de ton texte complet

														$idnews = 1; // ce qui servira à faire le lien

														$max = 50; // Le nombre maximal de caractères à afficher en page d'accueil

														if (strlen($news)>$max) {

														   $accnews = substr($news, 0, $max);

														   $accnews .= "<a style=\"float:right\" href='details_msg.php?id=".$enreg['id_msg']." ' >Lire la suite</a>\n";
														   

														} else {

														   $accnews = "<a style=\"float:right\" href='details_msg.php?id=".$enreg['id_msg']." '>Lire la suite</a>\n";

														 }

														 echo $accnews;
													
													echo"<b></td>";
													echo"<td  class=\"text-right fw600 pr15\" >".$enreg['date_envoie']."</td>"; 
												echo"</tr>";	
												}
									?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

          
        </section>
        <!-- End: Content -->

        

    </div>
    <!-- End: Main -->


 <!-- Google Map API -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>

    <!-- jQuery -->
    <script type="text/javascript" src="vendor/jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Theme Javascript -->
    <script type="text/javascript" src="assets/js/utility/utility.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/demo.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {

            "use strict";

            // Init Theme Core    
            Core.init();

            // Init Demo JS    
            Demo.init();


        });
    </script>
    <!-- END: PAGE SCRIPTS -->
</body>


<!-- Mirrored from admindesigns.com/framework/tables_datatables.html by HTTrack Website Copier/3.x [XR&CO'2013], Sun, 18 Jan 2015 11:50:16 GMT -->
</html>
