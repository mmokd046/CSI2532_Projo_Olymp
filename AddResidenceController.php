<?php

	include_once 'index.php';

	$residenceAddress = $_POST['adresseResidence'];

	$residenceCapacity = $_POST['capacity'];

	$residencePhoneNumber =$_POST['phone_number'];


	$query = "INSERT INTO residence(addresse,capacity,phone_number)
			  VALUES('$residenceAddress','$residenceCapacity','$residencePhoneNumber');";

	$stm = $dbh->prepare($query);
	
	$stm->execute();

	header("Location: AdminWelcomePage.php");

