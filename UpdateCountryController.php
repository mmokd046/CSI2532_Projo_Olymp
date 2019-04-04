<?php

    include_once 'index.php'; 

	$pays_id = intval($_POST['pays_id']);
	$pays = $_POST['pays'];

	 $paysQuery = "UPDATE pays SET nom_pays = '$pays'
  						WHERE id = '$pays_id';";
	 $stm = $dbh->prepare( $paysQuery);
	 $stm->execute();
	 $result = $stm->fetchAll();

	 header("Location: AdminWelcomePage.php");
?>



