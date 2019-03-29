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
	$epreuve_id = intval($_POST['epreuve_id']);
	 $personneQuery = "SELECT * FROM  epreuve 
	   		   WHERE id ='$epreuve_id';";
	 $stm = $dbh->prepare($personneQuery);
	 $stm->execute();
	 $result = $stm->fetchAll();
	 $epreuve = $result[0]['epreuve_name'];
    ?>
		<form action="UpdateEpreuveController.php" method="POST">
		<input type="hidden" name="epreuve_id" value="<?php echo $epreuve_id;?>" />
			<div class="input-group mb-3">
			<div class="input-group mb-3">
			  <input type="text" class="form-control" placeholder="Entrer le nom de l'epreuve" name="epreuve" aria-label="Username" aria-describedby="basic-addon1" id="country" value="<?php echo $epreuve;?>">
			</div>
			  <div class="alert alert-danger" role="alert" id="emailDiv" hidden>
	  				<strong>Oh snap!</strong> Change a few things up and try submitting again.
			</div>
		<div class = "wrapper">
	  		<button style="margin-top: 20px;margin-left: 170" type="submit" class="btn btn-primary" class ="center">Update discipline</button>
		</div>
		</form>		
	</div>
</body>