 <?php
	include "config.php";
										
		$id=$_GET['id_chauffeur'];
		$supp = "DELETE FROM chauffeur WHERE id_chauffeur =$id";
											 
		$requete = mysql_query($supp) or die( mysql_error() );
			if($requete)
				{
					echo '<script type="text/javascript">alert("Le chauffeur est bien supprimer ") </script>';
					echo '<script type="text/javascript">window.location.href="gerer_chauffeurs.php";</script>';
				}
				else
				{
					echo '<script type="text/javascript">alert("La suppression est échouée")</script>';
				}
											
											
?>

