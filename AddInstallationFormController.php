<?php

    include_once 'index.php'; 

	$installationName = $_POST['nom'];
	$installationDescription = $_POST['description'];
	$installationCapacity =intval($_POST['capacity']);
	$installationAddress = $_POST['address'];
	$installationUsage = intval($_POST['usage']);
	$disciplineValue = intval($_POST['discipline']);

	if ($installationUsage == 1) {
		$usage = "Entrainement";
	} else {
		$usage = "Competition";
	}

	 $installationOlympiquesQuery = "INSERT INTO installation_olympiques (nom,description,capacity,installation_usage,addresse)
	   		   VALUES('$installationName','$installationDescription', '$installationCapacity','$usage','$installationAddress');";
	 $stm = $dbh->prepare($installationOlympiquesQuery);
	 $stm->execute();
	 $installation_id = intval($dbh->lastInsertId());

	 $take_careQuery = "INSERT INTO take_place(discipline_id,installation_id)
	   		   VALUES('$disciplineValue','$installation_id');";

	 $stm1 = $dbh->prepare($take_careQuery);
	 $stm1->execute();

	 header("Location: AdminWelcomePage.php");



