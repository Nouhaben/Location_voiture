 <?php
	include "config.php";
										
		$id=$_GET['id_voiture'];
		$supp = "DELETE FROM voiture WHERE id_voiture =$id";
											 
		$requete = mysql_query($supp) or die( mysql_error() );
			if($requete)
				{
					echo '<script type="text/javascript">alert("La voiture est bien supprimer ") </script>';
					echo '<script type="text/javascript">window.location.href="gerer_voiture.php";</script>';
				}
				else
				{
					echo '<script type="text/javascript">alert("La suppression est échouée")</script>';
				}
											
											
?>

