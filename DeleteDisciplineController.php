	<?php
	include_once 'index.php';

	$discipline_id = intval($_POST['discipline_id']);

	$deleteQuery = "DELETE FROM discipline 
	  		   			WHERE id = '$discipline_id';";
	$stm = $dbh->prepare($deleteQuery);
	$stm->execute();

 	header("Location: AdminWelcomePage.php");
