<?php

	include_once 'index.php';

	$prenom = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$addresse_permanente = $_POST['permanent_address'];

	$query = "INSERT INTO pays (prenom,last_name_addresse_permanente)
	 		   VALUES('$countryName,$lastName,$addresse_permanente');";
	$stm = $dbh->prepare($query);
	$stm->execute();

	// I get the Id of the last person inserted in the database.

	$athleted_id = $dbh->insert_id;




	header("Location: AdminWelcomePage.php");


