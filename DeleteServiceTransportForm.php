	<?php
	include_once 'index.php';

	$transport_id = intval($_POST['transport_id']);

	$deleteQuery = "DELETE FROM service_transport
	  		   			WHERE id = '$transport_id';";
	$stm = $dbh->prepare($deleteQuery);
	$stm->execute();

 	header("Location: AdminWelcomePage.php");
