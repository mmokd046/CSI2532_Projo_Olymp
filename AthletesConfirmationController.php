<?php

	include_once 'index.php';

	$personne_id = intval($_POST['personne_id']);
	$athletesEpreuves = $_POST['epreuves'];

	foreach($athletesEpreuves as $val){
		
		$epreuveQuery = "INSERT INTO participe (athlete_id,epreuves_id)
	   		   VALUES('$personne_id','$val');";
	 	$stm2 = $dbh->prepare($epreuveQuery);
	 	$stm2->execute();
	}
	 header("Location: AdminWelcomePage.php");


