	<?php
	include_once 'index.php';

	$pays_id = intval($_POST['pays_id']);

	$deleteQuery = "DELETE FROM pays
	  		   			WHERE id = '$pays_id';";
	$stm = $dbh->prepare($deleteQuery);
	$stm->execute();

 	header("Location: AdminWelcomePage.php");
