<?php

    include_once 'index.php'; 

	$installation_id = intval($_POST['transport_id']);
	$nom_installation = $_POST['nom_installation'];
	$description = $_POST['description'];
	$capacity = intval($_POST['capacity']);
	$usage = $_POST['usage'];
	$addresse = $_POST['addresse'];

	print_r($nom_installation);
	print_r($description);
	print_r($capacity);
	print_r($usage);
	print_r($addresse);
	print_r($installation_id); 

	 $query = "UPDATE installation_olympiques SET nom = '$nom_installation',
	 				    description = '$description',
	 				    capacity = '$capacity',
	 				    installation_usage = '$usage',
	 				    addresse = '$addresse' 
  						WHERE id = '$installation_id';";
	 $stm = $dbh->prepare($query);
	 $stm->execute();
	 $result = $stm->fetchAll();

	 header("Location: AdminWelcomePage.php");


?>