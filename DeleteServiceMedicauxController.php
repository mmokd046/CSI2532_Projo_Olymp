	<?php
	include_once 'index.php';

	$service_id = intval($_POST['service_medical_id']);

	$deleteQuery = "DELETE FROM service_medicaux
	  		   			WHERE id = '$service_id';";
	$stm = $dbh->prepare($deleteQuery);
	$stm->execute();

 	header("Location: AdminWelcomePage.php");
