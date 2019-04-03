<?php

    include_once 'index.php'; 

	$service_medicaux_id = intval($_POST['service_medicaux_id']);
	$nom_service = $_POST['nom_Service'];
	$description = $_POST['description'];
	$addresse = $_POST['addresse'];
	$phone_number = $_POST['phone_number'];

	 $transportQuery = "UPDATE service_medicaux SET nom = '$nom_service', description = '$description', addresse = '$addresse', phone_number = '$phone_number'
  						WHERE id = '$service_medicaux_id';";
	 $stm = $dbh->prepare($transportQuery);
	 $stm->execute();
	 $result = $stm->fetchAll();

	 header("Location: AdminWelcomePage.php");
?>

