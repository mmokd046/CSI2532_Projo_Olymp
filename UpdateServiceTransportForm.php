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
	$transport_id = intval($_POST['transport_id']);
	 $personneQuery = "SELECT * FROM  service_transport 
	   		   WHERE id ='$transport_id ';";
	 $stm = $dbh->prepare($personneQuery);
	 $stm->execute();
	 $result = $stm->fetchAll();
	 $nom_Service = $result[0]['nom_service'];
	 $frequence = intval($result[0]['frequence']);
    ?>
		<form action="UpdateServiceTransportController.php" method="POST">
		<input type="hidden" name="transport_id" value="<?php echo $transport_id;?>" />
			<div class="input-group mb-3">
			<div class="input-group mb-3">
			  <input type="text" class="form-control" placeholder="Entrer le nom de la discipline" name="nom_Service" aria-label="Username" aria-describedby="basic-addon1" id="country" value="<?php echo $nom_Service;?>">
			</div>
			  <div class="alert alert-danger" role="alert" id="emailDiv" hidden>
	  				<strong>Oh snap!</strong> Change a few things up and try submitting again.
			</div>
			<div class="input-group mb-3">
			  <input type="number" class="form-control" placeholder="Entrer la frequnce" name="frequence" aria-label="Username" aria-describedby="basic-addon1" id="country" value="<?php echo $frequence;?>">
			</div>
			  <div class="alert alert-danger" role="alert" id="emailDiv" hidden>
	  				<strong>Oh snap!</strong> Change a few things up and try submitting again.
			</div>
		<div class = "wrapper">
	  		<button style="margin-top: 20px;margin-left: 170" type="submit" class="btn btn-primary" class ="center">Update service de transport</button>
		</div>
		</form>		
	</div>
</body>