 <?php
	include "config.php";
										
		$id=$_GET['id_client'];
		$supp = "DELETE FROM client WHERE id_client =$id";
											 
		$requete = mysql_query($supp) or die( mysql_error() );
			if($requete)
				{
					echo '<script type="text/javascript">alert("Le client est bien supprimer ") </script>';
					echo '<script type="text/javascript">window.location.href="gerer_client.php";</script>';
				}
				else
				{
					echo '<script type="text/javascript">alert("La suppression est échouée")</script>';
				}
											
											
?>

