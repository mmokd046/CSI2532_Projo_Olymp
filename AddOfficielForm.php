  <head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<meta name="author" content="">
		<title>Add Athlete</title>
		<link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="HomePage.css">
   		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    	<script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
    	<link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    	<script type='text/javascript' src="AddOfficiel.js"></script>
</head>
 
<body>
	<div style="display: inline-block;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    width: 500px;
    height: 400px;
    margin: auto;">
		<form action="AddOfficielFormController.php" method="POST">
			<div class="input-group mb-3">
			  <div class="input-group-prepend">
		    	<span class="input-group-text" id="basic-addon1">
		    		 <i class='far fa-address-card' aria-hidden='true'></i>
		    	</span>
			  </div>
			  <input type="text" class="form-control"  name="firstName" placeholder="First name" aria-describedby="basic-addon1" id="firstName">
			</div>
			<div class="alert alert-danger" role="alert" id="FirstNameDiv" hidden>
  				<strong>Oh snap!</strong> Change a few things up and try submitting again.
			</div>
			<div class="input-group mb-3">
			  <div class="input-group-prepend">
			    	<span class="input-group-text" id="basic-addon1">
			    		 <i class='far fa-address-card' aria-hidden='true'></i>
			    	</span>
			  </div>
			  <input type="text" class="form-control" name="LastName"placeholder="Last name" aria-label="LastName" aria-describedby="basic-addon1" id="lastName">
			</div>
			  <div class="alert alert-danger" role="alert" id="LastNameDiv" hidden>
  				<strong>Oh snap!</strong> Change a few things up and try submitting again.
			</div>
			<div class="input-group mb-3">
			  <div class="input-group-prepend">
			    	<span class="input-group-text" id="basic-addon1">
			    		 <i class='far fa-address-card' aria-hidden='true'></i>
			    	</span>
			  </div>
			  <input type="text" class="form-control" placeholder="Adresse permanente" name="permanent_address" aria-describedby="basic-addon1" id="addresse_permanente">
			</div>
		    <div class="alert alert-danger" role="alert" id="LastNameDiv" hidden>
  				<strong>Oh snap!</strong> Change a few things up and try submitting again.
			</div>

			<div class="input-group mb-3" >
  			  <select style="width:540px;height:40px" id="officiel_type" name="type_officiel">
  			  	<option value="" disabled selected>Choisir le type d'officiel ...</option>
			    <option value="1">Entraineur</option>
			    <option value="2">Directeur technique</option>
			    <option value="3">Chef de delegation</option>
			  </select>
			</div>
		<div class="input-group mb-3" >
  			  <select style="width:540px;height:40px" id="sex" name="residence_address">
  			  	<option value="" disabled selected>Choisir l'addresse du village ...</option>
		  	  	<?php
						include_once 'index.php';
						$query = "SELECT * FROM residence;";
						$stm = $dbh->prepare($query);
						$stm->execute();
						$result = $stm->fetchAll();
						print "<pre>";
						print_r($result);
						print "</pre>";
						foreach($result as $val){		
						 	echo '<option value="'.$val['id'].'"> '.$val['addresse'].'</option> ';
						}
				?>
			  </select>
		</div>
		<div class="alert alert-danger" role="alert" id="sexDiv" hidden>
			<strong>Oh snap!</strong> Change a few things up and try submitting again.
		</div>
		<div  id="epreuveContainer" class="input-group mb-3" >
  			  <select style="width:540px;height:40px" id="athlete" name="athletes[]">
  			  	<option value="" disabled selected>Choisir athletes a superviser</option>
		  	  	<?php
						include_once 'index.php';
						$query = "SELECT * FROM 
						personne P, athletes A 
						WHERE P.id = A.athlete_id ;";
						$stm = $dbh->prepare($query);
						$stm->execute();
						$result = $stm->fetchAll();
						foreach($result as $val){		
						 	echo '<option value="'.$val['id'].'"> '.$val['prenom'].'</option> ';
						}
				?>
			  </select>
		</div>
		<div class="alert alert-danger" role="alert" id="sexDiv" hidden>
			<strong>Oh snap!</strong> Change a few things up and try submitting again.
		</div>
		<button class="add_form_field" style="width: 500px;">Ajouter un athlete &nbsp; 
      		<span style="font-size:16px; font-weight:bold;">+ </span>
		</button>
	<div class = "wrapper">
  		<button style="margin-top: 20px;margin-left: 170" type="submit" class="btn btn-primary" class ="center">Creer officiel</button>
	</div>
	</div>
	</form>	
</body>