<?php

	include_once 'index.php';

	$countryName = $_POST['country'];

	$query = "INSERT INTO pays (nom_pays)
			  VALUES('$countryName');";

	$stm = $dbh->prepare($query);
	
	$stm->execute();

	header("Location: AdminWelcomePage.php");

