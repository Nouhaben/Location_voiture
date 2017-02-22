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
                        <li class="crumb-link">Louer voiture</li>
                        <li class="crumb-trail">Gérer</li>
                        <li class="crumb-trail">Modifier</li>
                    </ol>
                </div>
                
            </header>
            <!-- End: Topbar -->

            <!-- Begin: Content -->
            <section id="content">

                <h2 class="lh30 mt15 text-center">BADMEL <b class="text-primary">Location</b></h2>
                <p class="lead mb30 text-center">Location de voiture كــــراء السـيــارات</p>
				// <h4 class="lh30 mt15 text-center">Modifier les informations</b></h4>

                <div class="row">
                    <div class="col-md-9 center-block">


                        <!-- Form Wizard -->
                        <div class="admin-form theme-primary">

                            <div class="panel">
							<?php
								include "config.php";

										$query ="SELECT * FROM louer_voiture where id_location='".$_GET['id']."'";
										$response = mysql_query($query) or die(mysql_error());
												while ($enreg=mysql_fetch_array($response)){
				?>
				
                                <form method="post" action="" id="admin-form">
                                    <div class="panel-body">
                                    <div class="section">
                                        <div class="section-divider mb40 mt20"><span> VEHICULE </span></div><!-- .section-divider -->
                                        
										<center><label for="username" class="field-label">Client ou raison social</label></center>
											<?php	
												
											
												$y=mysql_query("SELECT * FROM client where  id_client='".$enreg['id_client']."' ");
														$dat=mysql_fetch_array($y);
												
													
											?>
											
                                                 
												
												<label class="field select">
											<?php	
												
											
												$q=mysql_query("SELECT * FROM client ");
													echo '<select id="select"  class="gui-input" name="id_client" >';
													
													echo '<option>'.$dat['nom_rais_cli'].'</option>';
													while ($row = mysql_fetch_array($q)) {
													echo '<option value="'.$row['id_client'].'" >'.$row['nom_rais_cli'].'</option>';
												}
													echo '</select>';
													
											?>
											
                                                 <i class="arrow"></i>  
                                            </label> <br><br><br><br>
										
                                            <center><label for="username" class="field-label">Voiture</label></center>
											<label class="field select">
													<?php $yy=mysql_query("SELECT * FROM voiture where  id_voiture='".$enreg['id_voiture']."' ");
														$rw=mysql_fetch_array($yy);
												
													 ?>
													
													 <?php	
												
														$qq=mysql_query("SELECT * FROM voiture ");
															echo '<select id="select"  class="gui-input" name="id_voiture" >';
															
															echo '<option>'.$rw['marque'].'&nbsp'.$rw['modele'].'&nbsp'.$rw['num_immat'].'</option>';
															
															while ($r = mysql_fetch_array($qq)) 
													{
															echo '<option value="'.$r['id_voiture'].'" >'.$r['marque'].'&nbsp'.$r['modele'].'&nbsp'.$r['num_immat'].'</option>';
														}
															echo '</select>';
															
													?>
													
													
                                                 <i class="arrow"></i>  
                                            </label> <br><br><br><br>
											
											  
									</div>
                                        <div class="section-divider mb40 mt20"><span> DATE ET LIEU DE LOCATION </span></div><!-- .section-divider -->
                                        
										<div class="section">
									   <label for="username" class="field-label">Lieu de livraison et de retour</label>	
                                            <label for="website" class="field prepend-icon">
                                                <input type="text" name="lieu_livr_retour" id="website" class="gui-input" placeholder="" value="<?php echo $enreg['lieu_livr_retour'] ;?>" >
                                                <label for="website" class="field-icon"></label>  
                                            </label>
										</div>
										
										<div class="row">
                                            <div class="col-md-6">
                                                <div class="section">
													<label for="username" class="field-label">Date de Départ </label>
                                                    <label class="field prepend-icon">
                                                        <input  name="date_depart" id="firstname" class="gui-input"  value="<?php echo $enreg['date_depart'] ;?>">
                                                        <label for="firstname" class="field-icon">
                                                        </label>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="section">
												<label for="username" class="field-label">Heure de Départ</label>
                                                    <label class="field append-icon">
                                                        <input  name="heure_depart" id="firstname" class="gui-input" value="<?php echo $enreg['heure_depart'] ;?>">
                                                        <label for="firstname" class="field-icon">
                                                        </label>
                                                    </label>
                                                </div>
                                            </div>
                                            
                                        </div>
												
										<div class="row">
                                            <div class="col-md-6">
                                                <div class="section">
													<label for="username" class="field-label">Date de Retour </label>
                                                    <label class="field prepend-icon">
                                                        <input  name="date_retour" id="firstname" class="gui-input"  value="<?php echo $enreg['date_retour'] ;?>">
                                                        <label for="firstname" class="field-icon">
                                                        </label>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="section">
												<label for="username" class="field-label">Heure de Retour</label>
                                                    <label class="field append-icon">
                                                        <input  name="heure_retour" id="firstname" class="gui-input" value="<?php echo $enreg['heure_retour'] ;?>" >
                                                        <label for="firstname" class="field-icon">
                                                        </label>
                                                    </label>
                                                </div>
                                            </div>
                                            
                                        </div>
												
										<div class="section">
										<label for="username" class="field-label">Date de retour réelle</label>
                                      
                                             <label for="datetimepicker3" class="field prepend-icon">
                                                    <input type="text" id="datetimepicker3" name="date_retour_reele" class="gui-input" placeholder="" value="<?php echo $enreg['date_retour_reele'] ;?>">
                                                    <label class="field-icon"><i class="fa fa-calendar-o"></i>
                                                    </label>
                                                </label></div>
												
										<div class="section">
										
										<label for="username" class="field-label">Durée de Location</label>
                                        
                                                <label for="firstname" class="field prepend-icon">
                                                    <input type="text" name="dure_location" id="firstname" class="gui-input" placeholder="Durée de Location" value="<?php echo $enreg['dure_location'] ;?>">
                                                    <label class="field-icon"> </label>  
                                                </label></div>
												
										<div class="section">
										
										
                                         
											
											<div class="section">
												<label for="username" class="field-label">Assurance "TOUS RISQUES"</label>
												
													<label class="field select">
														<select id="language" name="assurance">
															<option><?php echo $enreg['assurance'] ;?></option>
															<option value="Sans">Sans</option>
														<option value="Avec">Avec (Franchise)</option>
														</select>
														<i class="arrow double"></i>                    
													</label> <br><br>
												</div>
                                       <div class="section-divider mv40 mt20"><span> EQUIPEMENTS ET ACCESSOIRES  </span></div><!-- .section-divider -->                                         
											
												<div class="section"><label for="username" class="field-label">Poste radio :</label>
												<label class="field select">
													
													<select id="language" name="poste_radio">
														<option><?php echo $enreg['poste_radio'] ;?></option>
														<option value="oui">Oui</option>
														<option value="non">Non</option>
													</select>
													<i class="arrow double"></i>                    
												</label> 
												
											</div> <br>
												<div class="section">
												<label for="username" class="field-label">Roue de secours :</label>	
												<label class="field select">
													<select id="language" name="roue_secours">
														<option><?php echo $enreg['roue_secours'] ;?></option>
														<option value="oui">Oui</option>
														<option value="non">Non</option>
													</select>
													<i class="arrow double"></i>                    
												</label> 
											</div> <br>
												<div class="section">
												<label for="username" class="field-label">Cric</label>	
												<label class="field select">
													<select id="language" name="cric">
														<option><?php echo $enreg['cric'] ;?></option>
														<option value="oui">Oui</option>
														<option value="non">Non</option>
													</select>
													<i class="arrow double"></i>                    
												</label> 
											</div> <br>
												<div class="section">
												<label for="username" class="field-label">Documents</label>	
												<label class="field select">
													<select id="language" name="document">
														<option><?php echo $enreg['document'] ;?></option>
														<option value="oui">Oui</option>
														<option value="non">Non</option>
													</select>
													<i class="arrow double"></i>                    
												</label>  
											</div><br>
												<div class="section">
											<label for="username" class="field-label">Siège bébé :</label>	
												<label class="field select">
													<select id="language" name="siege_bb">
														<option><?php echo $enreg['siege_bb'] ;?></option>
														<option value="oui">Oui</option>
														<option value="non">Non</option>
													</select>
													<i class="arrow double"></i>                    
												</label>  
											</div><br>
											
											
											<div class="row">
                                            <div class="col-md-6">
                                                <div class="section">
													<label for="username" class="field-label">Carburant - Départ :</label>
                                                    <label class="field select">
														<select id="language" name="carburant_depart">
															<option><?php echo $enreg['carburant_depart'] ;?></option>
															<option value="oui">Faible</option>
															<option value="non">Moyen</option>
															<option value="non">Plein</option>
														</select>
														<i class="arrow double"></i>                    
													</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="section">
												<label for="username" class="field-label">Carburant - Retour :</label>
                                                    <label class="field select">
														<select id="language" name="carburant_retour">
															<option><?php echo $enreg['carburant_retour'] ;?></option>
															<option value="oui">Faible</option>
															<option value="non">Moyen</option>
															<option value="non">Plein</option>
														</select>
														<i class="arrow double"></i>                    
													</label> 
                                                </div>
                                            </div>
                                            
                                        </div><br>
											
											<div class="row">
                                            <div class="col-md-6">
                                                <div class="section">
													<label for="username" class="field-label">Kilométrage - Départ :</label>
														<label for="username" class="field prepend-icon">
															<input type="text" name="kilom_depart" id="username" class="gui-input" placeholder="Kilométrage - Départ" value="<?php echo $enreg['kilom_depart'] ;?>">
															<label for="firstname" class="field-icon"></label> 
														</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="section">
												<label for="username" class="field-label">Kilométrage - Retour :</label>
                                                    <label for="firstname" class="field prepend-icon">
														<input type="text" name="kilom_retour" id="firstname" class="gui-input" placeholder="Kilométrage - Retour" value="<?php echo $enreg['kilom_retour'] ;?>">
														<label for="firstname" class="field-icon"></label>  
													</label> 
                                                </div>
                                            </div>
                                            
                                        </div><br>
											
                                       <div class="section-divider mv40"><span>  ETAT DU VEHICULE </span></div><!-- .section-divider --> 
                                        
                                         <section>
												<center><img src="assets/img/etat_vehicule.jpg" alt="avatar" ></center>
										</section> <br><!-- end .section  -->
										
										<div class="section">
                                            <label for="comment" class="field prepend-icon">
                                                <textarea class="gui-textarea" id="comment" name="etat_vehicule" placeholder="Etat de vehicule"><?php echo $enreg['etat_vehicule'] ;?></textarea>
                                                <label for="comment" class="field-icon"><i class="fa fa-comments"></i></label>
                                                  
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
		
						$id_client=$_POST['id_client'];
						$id_voiture=$_POST['id_voiture'];
						$lieu_livr_retour=$_POST['lieu_livr_retour'];
						$date_depart=$_POST['date_depart'];
						$heure_depart=$_POST['heure_depart'];
						$date_retour=$_POST['date_retour'];
						$heure_retour=$_POST['heure_retour'];
						$date_retour_reele=$_POST['date_retour_reele'];
						$dure_location=$_POST['dure_location'];
						$assurance=$_POST['assurance'];
						$poste_radio=$_POST['poste_radio'];
						$roue_secours=$_POST['roue_secours'];
						$cric=$_POST['cric'];
						$document=$_POST['document'];
						$siege_bb=$_POST['siege_bb'];
						$carburant_depart=$_POST['carburant_depart'];
						$carburant_retour=$_POST['carburant_retour'];
						$kilom_depart=$_POST['kilom_depart'];
						$kilom_retour=$_POST['kilom_retour'];
						$etat_vehicule=$_POST['etat_vehicule'];
	
		
						
	$sql = "update louer_voiture set id_client = '".$id_client."', 
					id_voiture = '".$id_voiture."' ,
					lieu_livr_retour = '".$lieu_livr_retour."' , 
					date_depart = '".$date_depart."' ,
					heure_depart = '".$heure_depart."' ,
					date_retour = '".$date_retour."' ,
					heure_retour = '".$heure_retour."' ,
					date_retour_reele = '".$date_retour_reele."' ,
					dure_location = '".$dure_location."' ,
					assurance = '".$assurance."' ,
					poste_radio = '".$poste_radio."' ,
					roue_secours = '".$roue_secours."' ,
					cric = '".$cric."',
					document = '".$document."',
					siege_bb = '".$siege_bb."',
					carburant_depart = '".$carburant_depart."',
					carburant_retour = '".$carburant_retour."',
					kilom_depart = '".$kilom_depart."',
					kilom_retour = '".$kilom_retour."',
					etat_vehicule = '".$etat_vehicule."'
					where id_location ='".$_GET['id']."' ;";
					$requete = mysql_query($sql) or die( mysql_error() );
 
  if($requete)
  {
    
	echo '<script type="text/javascript">alert("Votre modification ont bien effectué");</script>';
	echo '<script type="text/javascript">window.location.href="gerer_louer.php";</script>';
				
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
