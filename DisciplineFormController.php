<?php

	include_once 'index.php';

	$discipleName = $_POST['discipline'];
	$epreuves = $_POST['epreuves'];
	$disciplineQuery = "INSERT INTO discipline (discipline_name)
	  		   VALUES('$discipleName');";
	 $stm = $dbh->prepare($disciplineQuery);
	 $stm->execute();
	 $discipline_id = intval($dbh->lastInsertId());

	foreach($epreuves as $val){
		$epreuveQuery = "INSERT INTO epreuve (epreuve_name)
	  		   VALUES('$val');";
   	    $stm1 = $dbh->prepare($epreuveQuery);
	 	$stm1->execute();
	    $epreuve_id = intval($dbh->lastInsertId());
	    $appartientQuery = "INSERT INTO appartient(discipline_id,epreuves_id)
	   		   VALUES('$discipline_id','$epreuve_id');";
  	    $stm2 = $dbh->prepare($appartientQuery);
	 	$stm2->execute();
	}

	header("Location: AdminWelcomePage.php");


