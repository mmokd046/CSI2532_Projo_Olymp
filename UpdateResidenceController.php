<?php

    include_once 'index.php'; 

	$residence_id = intval($_POST['residence_id']);
	$address = $_POST['addresse'];
	$capacity= intval($_POST['capacity']);
	$phone_number = intval($_POST['phone_number']);


	 $residenceQuery = "UPDATE residence SET addresse = '$address', capacity = '$capacity', phone_number = '$phone_number'
  						WHERE id = '$residence_id';";
	 $stm = $dbh->prepare($residenceQuery);
	 $stm->execute();
	 $result = $stm->fetchAll();

	 header("Location: AdminWelcomePage.php");
?>



