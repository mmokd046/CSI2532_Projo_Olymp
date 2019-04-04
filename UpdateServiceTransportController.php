<?php

    include_once 'index.php'; 

	$transport_id = intval($_POST['transport_id']);
	$nom_service = $_POST['nom_Service'];
	$frequence = intval($_POST['frequence']);

	 $transportQuery = "UPDATE service_transport SET nom_service = '$nom_service', frequence = '$frequence'
  						WHERE id = '$transport_id';";
	 $stm = $dbh->prepare($transportQuery);
	 $stm->execute();
	 $result = $stm->fetchAll();

	 header("Location: AdminWelcomePage.php");
?>



