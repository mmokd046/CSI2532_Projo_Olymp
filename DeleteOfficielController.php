	<?php
	include_once 'index.php';

	$personne_id = intval($_POST['personne_id']);

	$deleteQuery = "DELETE FROM personne 
	  		   			WHERE id = '$personne_id';";
	$stm = $dbh->prepare($deleteQuery);
	$stm->execute();

 	header("Location: AdminWelcomePage.php");
