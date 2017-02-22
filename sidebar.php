<?php

include "config.php";



$re = $_SESSION['email'];

$req = mysql_query ("select * from admin where email='".$re."' ");
$res = mysql_fetch_array($req);
?> 

<aside id="sidebar_left" class="sidebar-light nano nano-primary">
            <div class="nano-content">

                <!-- Start: Sidebar Header -->
                <header class="sidebar-header">
                    <div class="user-menu">
                        <div class="row text-center mbn">
                            <div class="col-xs-4">
                                <a href="dashboard.html" class="text-primary" data-toggle="tooltip" data-placement="top" title="Dashboard">
                                    <span class="glyphicons glyphicons-home"></span>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="pages_messages.html" class="text-info" data-toggle="tooltip" data-placement="top" title="Messages">
                                    <span class="glyphicons glyphicons-inbox"></span>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="pages_profile.html" class="text-alert" data-toggle="tooltip" data-placement="top" title="Tasks">
                                    <span class="glyphicons glyphicons-bell"></span>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="pages_timeline.html" class="text-system" data-toggle="tooltip" data-placement="top" title="Activity">
                                    <span class="glyphicons glyphicons-imac"></span>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="pages_profile.html" class="text-danger" data-toggle="tooltip" data-placement="top" title="Settings">
                                    <span class="glyphicons glyphicons-settings"></span>
                                </a>
                            </div>
                            <div class="col-xs-4">
                                <a href="pages_gallery.html" class="text-warning" data-toggle="tooltip" data-placement="top" title="Cron Jobs">
                                    <span class="glyphicons glyphicons-restart"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- End: Sidebar Header -->

                <!-- sidebar menu -->
                <ul class="nav sidebar-menu">
                    <li class="sidebar-label pt20">Menu</li>
                    <li class="active">
                        <a href="dashboard.php">
                            <span class="glyphicons glyphicons-home"></span>
                            <span class="sidebar-title">Statistique</span>
                        </a>
                    </li>
					<?php
					
					$yy=mysql_query("SELECT count(etat) as total FROM  `messages` WHERE etat='non lu' ");
					$dd=mysql_fetch_assoc($yy);
					
					
					?>
					<li>
                        <a href="messages.php">
                            <span class="fa fa-calendar"></span>
                            <span class="sidebar-title">Messages</span>
                            <span class="sidebar-title-tray">
                                <span class="label label-xs bg-warning"><?php echo $dd['total']; ?></span>
                            </span>
                        </a>
                    </li>
					
                    <li class="sidebar-label pt15">Exclusive</li>
					<?php
					
					$y=mysql_query("SELECT count(etat) as total FROM  `reservation` WHERE etat='non vu' ");
					$d=mysql_fetch_assoc($y);
					
					
					?>
					<li>
						<a href="reserva_vehi.php">
							<span class="glyphicons glyphicons-edit"></span>
							<span class="sidebar-title">Réservation</span>
							 <span class="sidebar-title-tray">
                                <span class="label bg-danger"><?php echo $d['total']; ?></span>
                            </span>
						</a>
					</li>
					<?php
					
					
					?>
					<li>
						 
                        <a class="accordion-toggle" href="#">
                            <span class="glyphicons glyphicons-more_items"></span>
                            <span class="sidebar-title">Gérer mon compte</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="nav sub-nav">
							<li>
                                <a href="parametre_compte.php">
                                    <span class="glyphicons glyphicons-book"></span> Paramètre de compte </a>
                            </li>
                            <li>
                                <a class="accordion-toggle" href="#">
                                    <span class="glyphicons glyphicons-cogwheels"></span> Les personnels
                                    <span class="caret"></span>
                                </a>
                                <ul class="nav sub-nav">
                                    <li>
                                        <a href="pages_login.html"> Ajouter des personnels </a>
                                    </li>
                                    <li>
                                        <a href="pages_register.html"> Consulter </a>
                                    </li>
                                    <li>
                                        <a href="pages_screenlock.html"> Gérer </a>
                                    </li>
                                    
                                </ul>
                            </li>
                        </ul>
                    </li>
					
                    <li>
                        <a class="accordion-toggle" href="#">
                            <span class="glyphicons glyphicons-cup"></span>
                            <span class="sidebar-title">Gérer site web</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="nav sub-nav">
                            <li>
                                <a href="admin_forms-elements.html">
                                    <span class="glyphicons glyphicons-edit"></span> Ajouter des articles </a>
                            </li>
                            <li>
                                <a href="admin_forms-widgets.html">
                                    <span class="glyphicons glyphicons-calendar"></span> Ajouter </a>
                            </li>
                            
                        </ul>
                    </li>

                    <!-- sidebar resources -->
                    <li class="sidebar-label pt20">Elements</li>
                    <li>
                        <a class="accordion-toggle" href="#">
                            <span class="glyphicons glyphicons-car"></span>
                            <span class="sidebar-title">Mes voitures</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="nav sub-nav">
                            <li>
                                <a href="ajouter_voiture.php">
                                    <span class="glyphicons glyphicons-warning_sign"></span> Ajouter </a>
                            </li>
                            <li>
                                <a href="consu_voiture.php">
                                    <span class="glyphicons glyphicons-dislikes"></span> Consulter </a>
                            </li>
                            <li>
                                <a href="gerer_voiture.php">
                                    <span class="glyphicons glyphicons-macbook"></span> Gérer </a>
                            </li>
                            
                        </ul>
                    </li>
                    <li>
                        <a class="accordion-toggle" href="#">
                            <span class="glyphicons glyphicons-user"></span>
                            <span class="sidebar-title">Mes Clients</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="nav sub-nav">
                            <li>
                                <a href="ajouter_client.php">
                                    <span class="glyphicons glyphicons-pen"></span> Ajouter </a>
                            </li>
                            <li>
                                <a href="consu_client.php">
                                    <span class="glyphicons glyphicons-text_height"></span> Consulter </a>
                            </li>
                            <li>
                                <a href="gerer_client.php">
                                    <span class="glyphicons glyphicons-book_open"></span> Gérer </a>
                            </li>
                         </ul>
                    </li>
					
					<li>
                        <a class="accordion-toggle" href="#">
                            <span class="glyphicons glyphicons-adress_book"></span>
                            <span class="sidebar-title">Mes Chauffeurs</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="nav sub-nav">
                            <li>
                                <a href="ajouter_chauffeurs.php">
                                    <span class="glyphicons glyphicons-pen"></span> Ajouter </a>
                            </li>
                            <li>
                                <a href="consu_chauffeurs.php">
                                    <span class="glyphicons glyphicons-text_height"></span> Consulter </a>
                            </li>
                            <li>
                                <a href="gerer_chauffeurs.php">
                                    <span class="glyphicons glyphicons-book_open"></span> Gérer </a>
                            </li>
                         </ul>
                    </li>
					
					<li>
                        <a class="accordion-toggle" href="#">
                            <span class="glyphicons glyphicons-cars"></span>
                            <span class="sidebar-title">Louer voiture</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="nav sub-nav">
                            <li>
                                <a href="ajouter_vehic.php">
                                    <span class="glyphicons glyphicons-pen"></span> Louer voiture </a>
                            </li>
                            <li>
                                <a href="consu_louer.php">
                                    <span class="glyphicons glyphicons-text_height"></span> Consulter </a>
                            </li>
                            <li>
                                <a href="gerer_louer.php">
                                    <span class="glyphicons glyphicons-book_open"></span> Gérer </a>
                            </li>
                         </ul>
                    </li>
                    </li>
					
                </ul>
                <div class="sidebar-toggle-mini">
                    <a href="#">
                        <span class="fa fa-sign-out"></span>
                    </a>
                </div>
            </div>
        </aside>