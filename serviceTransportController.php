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

   

		<form action="AthletesConfirmationController.php" method="POST">
			<div id="epreuveContainer" class="input-group mb-3">
				<input type="hidden" name="personne_id" value="<?php echo $personne_id;?>" />
  			  <select style="width:540px;height:40px" id="Services" name="Services[]">
  			  	<option value="" disabled selected>Choisir un service ...</option>
		  	  	<?php
						include_once 'index.php';
						$service = intval($_POST['service']);
						$query = "SELECT * FROM 
									Residence AS  R, come from residence AS  ST
									WHERE   R.residence_id ='$residence' AND  R.serviceTrans_id= ST.id ;";
									
									
						$stm = $dbh->prepare($query);
						$stm->execute();
						$result = $stm->fetchAll();
						foreach($result as $val){		
						 	echo '<option value="'.$val['id'].'"> '.$val['service_name'].'</option> ';
						}
				?>
			  </select>
			</div>
		  	<div class="alert alert-danger" role="alert" id="emailDiv" hidden>
  				<strong>Oh snap!</strong> Change a few things up and try submitting again.
			</div>
			<button class="add_form_field" style="width: 500px;">Ajouter un autre service de transport &nbsp; 
      		<span style="font-size:16px; font-weight:bold;">+ </span>
    			</button>
	<div class = "wrapper">
  		<button style="margin-top: 50px;margin-left: 170" type="submit" class="btn btn-primary" class ="center">Finir ajout du transport</button>
	</div>
		</form>		
	</div>
</body>