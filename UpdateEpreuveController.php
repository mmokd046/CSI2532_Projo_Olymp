<?php

    include_once 'index.php'; 

	$epreuve_id = intval($_POST['epreuve_id']);
	$epreuve = $_POST['epreuve'];

	 $residenceQuery = "UPDATE epreuve SET epreuve_name = '$epreuve'
  						WHERE id = '$epreuve_id';";
	 $stm = $dbh->prepare($residenceQuery);
	 $stm->execute();
	 $result = $stm->fetchAll();

	 header("Location: AdminWelcomePage.php");
?>



