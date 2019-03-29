<?php

    include_once 'index.php'; 

	$discipline_id = intval($_POST['discipline_id']);
	$discipline = $_POST['discipline'];

	 $residenceQuery = "UPDATE discipline SET discipline_name = '$discipline'
  						WHERE id = '$discipline_id';";
	 $stm = $dbh->prepare($residenceQuery);
	 $stm->execute();
	 $result = $stm->fetchAll();

	 header("Location: AdminWelcomePage.php");
?>



