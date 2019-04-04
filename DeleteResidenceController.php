	<?php
	include_once 'index.php';

	$residence_id = intval($_POST['residence_id']);

	$deleteQuery = "DELETE FROM residence
	  		   			WHERE id = '$residence_id';";
	$stm = $dbh->prepare($deleteQuery);
	$stm->execute();

 	header("Location: AdminWelcomePage.php");
