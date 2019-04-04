	<?php
	include_once 'index.php';

	$epreuve_id = intval($_POST['epreuve_id']);

	$deleteQuery = "DELETE FROM epreuve 
	  		   			WHERE id = '$epreuve_id ';";
	$stm = $dbh->prepare($deleteQuery);
	$stm->execute();

 	header("Location: AdminWelcomePage.php");
