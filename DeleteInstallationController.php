	<?php
	include_once 'index.php';

	$service_id = intval($_POST['installation_id']);

	$deleteQuery = "DELETE FROM installation_olympiques
	  		   			WHERE id = '$service_id';";
	$stm = $dbh->prepare($deleteQuery);
	$stm->execute();

 	header("Location: AdminWelcomePage.php");
