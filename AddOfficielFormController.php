<?php

	include_once 'index.php';

	$firstName = $_POST['firstName'];
	$lastName = $_POST['LastName'];
	$permanent_address = $_POST['permanent_address'];
	$officiel_type = intval($_POST['type_officiel']);
	$residence_address= intval($_POST['residence_address']);
	$athletes = $_POST['athletes'];


	$personneQuery = "INSERT INTO personne (prenom,last_name,addresse_permanente)
	   		   VALUES('$firstName ','$lastName', '$permanent_address');";
	 $stm = $dbh->prepare($personneQuery);
	 $stm->execute();
	 $personne_id = intval($dbh->lastInsertId());


	 $officielQuery = "INSERT INTO officiel (officiel_id)
	   		   VALUES('$personne_id');";

  	 $stm = $dbh->prepare($officielQuery);
	 $stm->execute();
	 $personne_id = intval($dbh->lastInsertId());

	 if ($officiel_type == 1) {
 	 $athleteQuery = "INSERT INTO entraineur(entraineur_id)
	   		   VALUES('$personne_id');";
	 $stm1 = $dbh->prepare($athleteQuery);
	 $stm1->execute();

	 } else if ($officiel_type == 2) {

 	 $athleteQuery = "INSERT INTO directeur_technique(directeur_technique_id)
	   		   VALUES('$personne_id');";
	 $stm1 = $dbh->prepare($athleteQuery);
	 $stm1->execute();
	 } else  {
 	 $athleteQuery = "INSERT INTO chef_de_delegation(chef_de_delegation_id)
	   		   VALUES('$personne_id');";
	 $stm1 = $dbh->prepare($athleteQuery);
	 $stm1->execute();
	 }
	 $residenceQuery = "INSERT INTO reside(personne_id,addresse_id)
	   		   VALUES('$personne_id','$residence_address');";
	 $stm2 = $dbh->prepare($residenceQuery);
	 $stm2->execute();

	foreach($athletes as $val){
		$inserted_value = intval($val);
		$superviseQuery = "INSERT INTO supervise (athlete_id,superviseur_id)
	   		   VALUES('$inserted_value','$personne_id');";
	 	$stm2 = $dbh->prepare($superviseQuery);
	 	$stm2->execute();
	}
	header("Location: AdminWelcomePage.php");


