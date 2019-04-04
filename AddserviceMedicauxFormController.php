<?php

    include_once 'index.php'; 

	$serviceName = $_POST['nom'];
	$serviceDescription = $_POST['description'];
	$serviceAddress = $_POST['address'];
	$phoneNumber= $_POST['phone_number'];
	$disciplineValue = intval($_POST['discipline']);

	 $serviceMedicauxQuery = "INSERT INTO service_medicaux (nom,description,addresse,phone_number)
	   		   VALUES('$serviceName','$serviceDescription', '$serviceAddress','$phoneNumber');";
	 $stm = $dbh->prepare($serviceMedicauxQuery);
	 $stm->execute();
	 $service_id = intval($dbh->lastInsertId());

	 $take_careQuery = "INSERT INTO take_care(discipline_id,service_medical_id)
	   		   VALUES('$disciplineValue','$service_id');";

	 $stm1 = $dbh->prepare($take_careQuery);
	 $stm1->execute();

	 header("Location: AdminWelcomePage.php");



