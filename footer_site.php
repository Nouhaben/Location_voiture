<?php
include "config.php";

?>
<section>
	<div class="block remove-gap">
		<div class="container">
			<div class="row">
				<div class="col-md-12 column">
					<div class="sponsors-carousel">
						<div class="sponsor"><img src="images/resource/1.png" alt="" style="margin-top: 5px;" width="165" height="45" /></div>
						<div class="sponsor"><img src="images/resource/2.png" alt="" style="margin-top: 5px;" width="165" height="45" /></div>
						<div class="sponsor"><img src="images/resource/3.png" alt="" style="margin-top: 5px;" width="165" height="45" /></div>
						<div class="sponsor"><img src="images/resource/4.png" alt="" style="margin-top: 5px;" width="165" height="45" /></div>
						<div class="sponsor"><img src="images/resource/5.png" alt="" style="margin-top: 5px;" width="165" height="45" /></div>
						<div class="sponsor"><img src="images/resource/6.png" alt="" style="margin-top: 5px;" width="165" height="45" /></div>
						<div class="sponsor"><img src="images/resource/7.png" alt="" style="margin-top: 5px;" width="165" height="45" /></div>
						<div class="sponsor"><img src="images/resource/8.png" alt="" style="margin-top: 5px;" width="165" height="45" /></div>
						<div class="sponsor"><img src="images/resource/9.png" alt="" style="margin-top: 5px;" width="165" height="45" /></div>
						<div class="sponsor"><img src="images/resource/10.png" alt="" style="margin-top: 5px;" width="165" height="45" /></div>
						<div class="sponsor"><img src="images/resource/11.png" alt="" style="margin-top: 5px;" width="165" height="45" /></div>
						<div class="sponsor"><img src="images/resource/12.png" alt="" style="margin-top: 5px;" width="165" height="45" /></div>
						<div class="sponsor"><img src="images/resource/13.png" alt="" style="margin-top: 5px;" width="165" height="45" /></div>
						<div class="sponsor"><img src="images/resource/14.png" alt="" style="margin-top: 5px;" width="165" height="45" /></div>
						<div class="sponsor"><img src="images/resource/15.png" alt="" style="margin-top: 5px;" width="165" height="45" /></div>
						<div class="sponsor"><img src="images/resource/16.png" alt="" style="margin-top: 5px;" width="165" height="45" /></div>
						<div class="sponsor"><img src="images/resource/17.png" alt="" style="margin-top: 5px;" width="165" height="45" /></div>
						<div class="sponsor"><img src="images/resource/18.png" alt="" style="margin-top: 5px;" width="165" height="45" /></div>
						<div class="sponsor"><img src="images/resource/19.png" alt="" style="margin-top: 5px;" width="165" height="45" /></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!-- Sponsors Section -->


<section>
	<div class="block extra-gap no-padding">
		<div class="">
			<div class="row">
				<div class="col-md-12 column">
					<div class="map">
						<div id="map-canvas"></div>
					</div><!-- Google Map -->
				</div>
			</div>
		</div>
	</div>
</section><!-- Google Map Section -->

 <footer>
	<div class="block">
		<div class="container">
			<div class="row">
				<div class="col-md-4 column">
					<div class="widget">
						<div class="about">
							<a href="#" title=""><img src="images/logo.png" alt="" /></a>
							<p>Ut wisi enim ad minim veniam, quis nostrud tation ullamcorper suscipit loborts nisl ut ali ea commodo consequat. Lorem ipsum doloiet, consectetuer adipiscng elitre.Lorem ipsum doloiet, consectetuer adipiscng elitre.Ut wisi enim ad minim veniam, quis nostrud tation ullamcorper suscipit loborts nisl.Ut wisi enim ad minim veniam.</p>
						</div>
			 		</div><!-- About Widget -->
				</div>
				<div class="col-md-4 column">
					<div class="widget">
						<div class="about">
							<h2> <span>ADRESSE</span></h2>
							<p>Adresse</p>
						</div>
			 		</div><!-- About Widget -->
				</div>
				<div class="col-md-4 column">
					<div class="widget">
						<div class="contact-box overlap">
							<h4>NOUS CONTACTER</h4>
							<div id="message"></div>
							<form method="post" action="" >
								<div class="row">
									<div class="col-md-12">
										<div class="form-field">
											<input name="nom_dess" type="text" id="name"  placeholder="Votre Nom" />
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-field">
											<input name="tel_dess" type="text" id="email" placeholder="Votre Telephone" />
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-field">
											<input name="email_dess" type="email" id="email" placeholder="Votre Email" />
										</div>
									</div>
									<div class="col-md-12">
										<div class="form-field">
											<textarea name="message" id="comments" placeholder="Message"></textarea>
										</div>
									</div>
									<div class="col-md-12">
										<button   type="submit" name="submit" >ENVOYER</button></div>
								</div>
							</form>
						</div>
						
						<?php
								
								
								
								if ( isset($_POST['submit']) ) 
								{
									
									$nom_dess=$_POST['nom_dess'];
									$tel_dess=$_POST['tel_dess'];
									$email_dess=$_POST['email_dess'];
									$message=addslashes($_POST['message']);
									
                                    
									$sql = "INSERT INTO messages (nom_dess,tel_dess,email_dess,message,etat) VALUES ('$nom_dess','$tel_dess','$email_dess','$message','non lu') ";
									$requete = mysql_query($sql) or die( mysql_error() ) ;
									
									
									if($requete){
										echo '<script type="text/javascript">alert("Vous message est envoyé");</script>';
										
									}
									
									else{
										echo '<script type="text/javascript">alert("Il y a un problème dans votre réservation ");</script>';
									}
								}
								
								else {}
								
						?>
								
					</div><!-- Contact Us Widget -->
				</div>
			</div>
		</div>
	</div>
</footer><!-- Footer -->

<div class="social-bar">
	<div class="container">
		<a href="#" title=""><i class="fa fa-skype"></i> Skype</a>
		<a href="#" title=""><i class="fa fa-google-plus"></i> Google Plus</a>
		<a href="#" title=""><i class="fa fa-twitter"></i> Twitter</a>
		<a href="#" title=""><i class="fa fa-facebook"></i> Facebook</a>
	</div>
</div><!-- Social Bar -->

<div class="bottom-footer">
	<div class="container">
		<p>Conception et réalisation : <a href="#" title="">Nouhaila BenAbdelkader</a></p>
	</div>
</div><!-- Bottom Footer -->