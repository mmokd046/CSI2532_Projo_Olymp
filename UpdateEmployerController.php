<?php

    include_once 'index.php'; 

	$personne_id = intval($_POST['personne_id']);
	$first_name = $_POST['firstName'];
	$last_name= $_POST['LastName'];
	$permanent_address = $_POST['permanent_address'];
	$phone_number = $_POST['phone_number'];


	 $personneQuery = "UPDATE personne SET prenom = '$first_name', last_name = '$last_name', addresse_permanente = '$permanent_address'
  						WHERE id = '$personne_id';";
	 $stm = $dbh->prepare($personneQuery);
	 $stm->execute();
	 $result = $stm->fetchAll();

 	 $employerQuery = "UPDATE employee SET phone_number = '$phone_number'
  						WHERE employer_id = '$personne_id';";
	 $stm = $dbh->prepare($employerQuery);
	 $stm->execute();
	 $result = $stm->fetchAll();

	 header("Location: AdminWelcomePage.php");
?>



