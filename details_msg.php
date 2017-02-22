   <!DOCTYPE html>
<?php

include "config.php";

if($_GET['id']){
	$r = "UPDATE messages SET etat = 'lu' where id_msg='".$_GET['id']."' ";
	$req = mysql_query($r) or die( mysql_error() );
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
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">

    <!-- Admin Forms CSS -->
    <link rel="stylesheet" type="text/css" href="assets/admin-tools/admin-forms/css/admin-forms.css">

    <!-- Admin Dock CSS -->
    <link rel="stylesheet" type="text/css" href="assets/admin-tools/admin-plugins/admin-dock/dockmodal.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>

<body class="messages-page" class="admin-dock-page">
      <!-- Start: Settings Scripts -->
    

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
                                    <?php
										
										
										$query ="SELECT * FROM messages where id_msg='".$_GET['id']."' ";
										$response = mysql_query($query) or die(mysql_error());
												while ($enreg=mysql_fetch_array($response)){
												
												
											
									?>
									<thead>
                                        <tr class="">
                                            <th><?php echo $enreg['nom_dess']?>&nbsp< <?php echo $enreg['email_dess']?> ><span style="float:right"> <?php echo $enreg['date_envoie']?></span> </th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<tr>
                                            <td  style="float:left"><br> <?php echo $enreg['message']?></span> </td>
                                        </tr>
										<tr>
                                            <td  style="float:left"><br><br> Mon Numéro de téléphone :  <?php echo $enreg['tel_dess']?></span> </td>
                                        </tr>
                                        
                                    </tbody>
									
									<?php
									
									}
									?>
									
                                </table>
                            </div> 
							<button id="dock-push" type="button" class="btn btn-success  btn-block">Répondre</button>
						</div>
					</div>
				</div>
				
				<div class="row animated-delay" data-animate='["500","fadeIn"]'>

                    <div class="col-md-10 center-block text-center">

                        <div class="row table-layout">
                            
                            <div class="col-xs-8 br-a br-light bg-light dark va-t p10 va-m hidden">
                                

                                <div id="dock-content" class="ph20">
                                    <div id="dock-image" class="active-content">
                                        <div class="dock-item" data-title="Répondre">
                                            <div class="admin-form">
                                                <div class="panel panel-success heading-border">
                                                    <div class="panel-heading bg-white ">
                                                        <span class="panel-title"><i class="fa fa-rocket"></i>Nouveau Message</span>
                                                    </div>
                                                    <!-- end .panel-heading section -->

                                                    <form method="post" action="" id="comment">
                                                            
                                                                <label for="comment" class="field prepend-icon">
                                                                    <textarea class="gui-textarea" id="comment" name="comment" placeholder="Your comment"></textarea>
                                                                    <label for="comment" class="field-icon"><i class="fa fa-comments"></i>
                                                                    </label>
                                                                    
                                                                </label>
                                                            
                                                            <!-- end section -->


                                                            <button type="submit" class="btn btn-primary" style="float:right" >Envoyer</button>
                                                      
                                                    </form>
                                                </div>
                                                <!-- end: .panel -->
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </section>

          
        </section>
        <!-- End: Content -->

        

    </div>
    <!-- End: Main -->

<style>
    
    /* Demo only styles */
   
    #dock-content > div {
        display: none;
    }
    #dock-content > div.active-content {
        display: block;
    }
    #dock-content .active-content .modal-placeholder {
        position: relative;
        visibility: visible;
        display: block;
        height: 100%;
        width: 100%;
        text-align: center;
        font-size: 20px;
    }
    #dock-content .active-content .modal-placeholder:before {
        content: "It's been sent to AdminDock!";
    }
    #dock-content .active-content .modal-placeholder:after {
        content: "\f0a7";
        font-family: "FontAwesome";
        font-size: 30px;
        position: relative;
        top: 3px;
        padding-left: 20px;
        color: #999;
    }
    </style>
	
 <!-- Google Map API -->
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>

    <!-- jQuery -->
    <script type="text/javascript" src="vendor/jquery/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="assets/js/bootstrap/bootstrap.min.js"></script>

    <!-- Admin Dock -->
    <script type="text/javascript" src="assets/admin-tools/admin-plugins/admin-dock/dockmodal.js"></script>

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

            // Demo only javascript. no real use
            var contentType = $('#content-type');
            var Content = $('#dock-content');

            contentType.on('click', '.holder-style', function(e) {
                e.preventDefault();

                var This = $(this);
                var activeContent = This.attr('href');

                // Content button active
                contentType.find('.holder-style').removeClass('holder-active');
                This.addClass('holder-active');

                Content.children('div').removeClass('active-content');
                $(activeContent).addClass('active-content');
            });

            $('#dock-push').on('click', function() {

                var findPush = Content.children('.active-content').find('.dock-item');

                // Admin Dock Plugin
                findPush.dockmodal({
                    minimizedWidth: 220,
                    height: 430,
                    title: function() {
                        // note this is a panel specific callback
                        // will return undefined if nonexistant
                        return this.data('title');
                    },
                    initialState: "minimized"
                });

            });


        });
    </script>
</body>


<!-- Mirrored from admindesigns.com/framework/tables_datatables.html by HTTrack Website Copier/3.x [XR&CO'2013], Sun, 18 Jan 2015 11:50:16 GMT -->
</html>
