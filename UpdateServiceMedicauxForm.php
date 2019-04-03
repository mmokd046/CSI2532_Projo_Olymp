  <head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Home page</title>
		<link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
   		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
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
	$service_medicaux_id = intval($_POST['service_medicaux_id']);
	 $personneQuery = "SELECT * FROM  service_medicaux
	   		   WHERE id ='$service_medicaux_id';";
	 $stm = $dbh->prepare($personneQuery);
	 $stm->execute();
	 $result = $stm->fetchAll();
	 $nom_Service = $result[0]['nom'];
	 $description = $result[0]['description'];
	 $addresse = $result[0]['addresse'];
	 $phone_number = $result[0]['phone_number'];
	 print_r($result);
    ?>
		<form action="UpdateServiceMedicauxController.php" method="POST">
		<input type="hidden" name="service_medicaux_id" value="<?php echo $service_medicaux_id ;?>" />
			<div class="input-group mb-3">
			<div class="input-group mb-3">
			  <input type="text" class="form-control" placeholder="Entrer le nom de la discipline" name="nom_Service" aria-label="Username" aria-describedby="basic-addon1" id="country" value="<?php echo $nom_Service;?>">
			</div>
			  <div class="alert alert-danger" role="alert" id="emailDiv" hidden>
	  				<strong>Oh snap!</strong> Change a few things up and try submitting again.
			</div>
			<div class="input-group mb-3">
			  <input type="text" class="form-control" placeholder="Entrer le nom de la discipline" name="description" aria-label="Username" aria-describedby="basic-addon1" id="country" value="<?php echo $description;?>">
			</div>
			  <div class="alert alert-danger" role="alert" id="emailDiv" hidden>
	  				<strong>Oh snap!</strong> Change a few things up and try submitting again.
			</div>

			<div class="input-group mb-3">
			  <input type="text" class="form-control" placeholder="Entrer le nom de la discipline" name="addresse" aria-label="Username" aria-describedby="basic-addon1" id="country" value="<?php echo $addresse;?>">
			</div>

			<div class="input-group mb-3">
			  <input type="text" class="form-control" placeholder="Entrer le nom de la discipline" name="phone_number" aria-label="Username" aria-describedby="basic-addon1" id="country" value="<?php echo $phone_number;?>">
			</div>
			  <div class="alert alert-danger" role="alert" id="emailDiv" hidden>
	  				<strong>Oh snap!</strong> Change a few things up and try submitting again.
			</div>
		<div class = "wrapper">
	  		<button style="margin-top: 20px;margin-left: 170" type="submit" class="btn btn-primary" class ="center">Update service medical</button>
		</div>
		</form>		
	</div>
</body>