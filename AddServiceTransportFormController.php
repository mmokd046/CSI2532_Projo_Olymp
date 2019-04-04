<?php

    include_once 'index.php'; 

	$serviceName = $_POST['name'];
	$residence_id = intval($_POST['residence']);
	$installation_id =intval($_POST['installation_olympique']);
	$frequence = intval($_POST['frequence']);

	 $serviceTransportQuery = "INSERT INTO service_transport (nom_service,frequence)
	   		   VALUES('$serviceName','$frequence');";
	 $stm = $dbh->prepare($serviceTransportQuery);
	 $stm->execute();
	 $service_transport_id= intval($dbh->lastInsertId());

	 $itineraireQuery = "INSERT INTO itneraire(transport_id,point_depart,point_arriver)
	   		   VALUES('$service_transport_id','$residence_id','$installation_id ');";

	 $stm1 = $dbh->prepare($itineraireQuery);
	 $stm1->execute();

	 header("Location: AdminWelcomePage.php");


