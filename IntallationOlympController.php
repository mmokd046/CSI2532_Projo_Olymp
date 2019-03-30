 <head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Home page</title>
		<link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
   		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script type='text/javascript' src="AthleteEpreuves.js"></script>
</head>
 
<body>
	<div style="display: inline-block;
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    width: 500px;
    height: 400px;
    margin: auto;">

    <?php

    include_once 'index.php'; 

	$athleteFirstName = $_POST['firstName'];
	$athleteLastName = $_POST['LastName'];
	$athleteAddress = $_POST['permanent_address'];
	$athleteCountry = intval($_POST['country']);
	$residenceOlympique = intval($_POST['residence_address']);

	 $personneQuery = "INSERT INTO personne (prenom,last_name,addresse_permanente)
	   		   VALUES('$athleteFirstName','$athleteLastName', '$athleteAddress');";
	 $stm = $dbh->prepare($personneQuery);
	 $stm->execute();
	 $personne_id = intval($dbh->lastInsertId());

	 $athleteQuery = "INSERT INTO athletes(athlete_id)
	   		   VALUES('$personne_id');";

	 $stm1 = $dbh->prepare($athleteQuery);
	 $stm1->execute();

	 $countryQuery = "INSERT INTO represent(athlete_id,country_id)
	   		   VALUES('$personne_id','$athleteCountry');";

	 $stm2 = $dbh->prepare($countryQuery);
	 $stm2->execute();

	 $residenceQuery = "INSERT INTO reside(personne_id,addresse_id)
	   		   VALUES('$personne_id','$residenceOlympique');";
	 $stm2 = $dbh->prepare($residenceQuery);
	 $stm2->execute();
    ?>


		<form action="AthletesConfirmationController.php" method="POST">
			<div id="epreuveContainer" class="input-group mb-3">
				<input type="hidden" name="personne_id" value="<?php echo $personne_id;?>" />
  			  <select style="width:540px;height:40px" id="Services" name="installation[]">
  			  	<option value="" disabled selected>Choisir epreuves ...</option>
		  	  	<?php
						include_once 'index.php';
						$service = intval($_POST['service']);
						$query = "SELECT * FROM 
								installation  AS  IO, appartient AS  A
									WHERE A.discipline_id ='$discipline' AND A.epreuves_id = IO.id ;";		
									
						$stm = $dbh->prepare($query);
						$stm->execute();
						$result = $stm->fetchAll();
						foreach($result as $val){		
						 	echo '<option value="'.$val['id'].'"> '.$val['installation_name'].'</option> ';
						}
				?>
			  </select>
			</div>
		  	<div class="alert alert-danger" role="alert" id="emailDiv" hidden>
  				<strong>Oh snap!</strong> Change a few things up and try submitting again.
			</div>
			<button class="add_form_field" style="width: 500px;">Ajouter une autre installation &nbsp; 
      		<span style="font-size:16px; font-weight:bold;">+ </span>
    			</button>
	<div class = "wrapper">
  		<button style="margin-top: 50px;margin-left: 170" type="submit" class="btn btn-primary" class ="center">Finir ajout d'installation</button>
	</div>
		</form>		
	</div>
</body>