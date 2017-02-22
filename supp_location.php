 <?php
	include "config.php";
										
		$id=$_GET['id_location'];
		$supp = "DELETE FROM louer_voiture WHERE id_location =$id";
											 
		$requete = mysql_query($supp) or die( mysql_error() );
			if($requete)
				{
					echo '<script type="text/javascript">alert("il est bien supprimer ") </script>';
					echo '<script type="text/javascript">window.location.href="gerer_louer.php";</script>';
				}
				else
				{
					echo '<script type="text/javascript">alert("La suppression est échouée")</script>';
				}
											
											
?>

