<?php

	include_once 'index.php';

	$employeeFirstName = $_POST['firstName'];
	$employeeLastName = $_POST['LastName'];
	$employeeAddress = $_POST['permanent_address'];
	$employeePhoneNumber = $_POST['phone_number'];
	$residenceOlympique = intval($_POST['residence_address']);

	$personneQuery = "INSERT INTO personne (prenom,last_name,addresse_permanente)
	  		   VALUES('$employeeFirstName','$employeeLastName', '$employeeAddress');";
	$stm = $dbh->prepare($personneQuery);
	$stm->execute();
	$personne_id = intval($dbh->lastInsertId());

	$employeeQuery = "INSERT INTO employee (employer_id,phone_number)
	  		   VALUES('$personne_id','$employeePhoneNumber');";

	$stm1 = $dbh->prepare($employeeQuery );
	$stm1->execute();

	$residenceAssignmentQuery = "INSERT INTO reside (personne_id,addresse_id)
	  		   VALUES('$personne_id','$residenceOlympique');";

	$stm2 = $dbh->prepare($residenceAssignmentQuery);
	$stm2->execute();
	header("Location: AdminWelcomePage.php");


