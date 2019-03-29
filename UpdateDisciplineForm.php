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
	$discipline_id = intval($_POST['discipline_id']);
	 $personneQuery = "SELECT * FROM  discipline 
	   		   WHERE id ='$discipline_id ';";
	 $stm = $dbh->prepare($personneQuery);
	 $stm->execute();
	 $result = $stm->fetchAll();
	 $discipline = $result[0]['discipline_name'];
    ?>
		<form action="UpdateDisciplineController.php" method="POST">
		<input type="hidden" name="discipline_id" value="<?php echo $discipline_id;?>" />
			<div class="input-group mb-3">
			<div class="input-group mb-3">
			  <input type="text" class="form-control" placeholder="Entrer le nom de la discipline" name="discipline" aria-label="Username" aria-describedby="basic-addon1" id="country" value="<?php echo $discipline;?>">
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