 <head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Home page</title>
		<link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
   		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script type='text/javascript' src="AddDiscipline.js"></script>
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
		<form action="AddInstallationFormController.php" method="POST">
			<div class="input-group mb-3">
			  <div class="input-group-prepend">
			    	<span class="input-group-text" id="basic-addon1">
			    		 <i class='far fa-address-card' aria-hidden='true'></i>
			    	</span>
			  </div>
			  <input type="text" class="form-control" placeholder="Entrer le nom de l'installation olympique" name ="nom" aria-describedby="basic-addon1" id="nom">
			</div>
		  	<div class="alert alert-danger" role="alert" id="emailDiv" hidden>
  				<strong>Oh snap!</strong> Change a few things up and try submitting again.
			</div>
			
			<div class="input-group mb-3">
			  <div class="input-group-prepend">
			    	<span class="input-group-text" id="basic-addon1">
			    		 <i class='far fa-address-card' aria-hidden='true'></i>
			    	</span>
			  </div>
			  <input type="text" class="form-control" placeholder="Entrer une description" name="description" aria-describedby="basic-addon1" id="description">
			</div>
		    <div class="alert alert-danger" role="alert" id="emailDiv" hidden>
  				<strong>Oh snap!</strong> Change a few things up and try submitting again.
			</div>
			
			<div class="input-group mb-3">
			  <div class="input-group-prepend">
			    	<span class="input-group-text" id="basic-addon1">
			    		 <i class='far fa-address-card' aria-hidden='true'></i>
			    	</span>
			  </div>
			  <input type="number" class="form-control" name="capacity"placeholder="Entrer la capacite de l'installation olympique " aria-describedby="basic-addon1" id="servicemedicalCapacity" min="30" max="500">
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
			  <input type="text" class="form-control" placeholder="Entrer l'addresse" name="address" aria-describedby="basic-addon1" id="address">
			</div>
		    <div class="alert alert-danger" role="alert" id="emailDiv" hidden>
  				<strong>Oh snap!</strong> Change a few things up and try submitting again.
			</div>
		<div class="input-group mb-3" >
  			  <select style="width:540px;height:40px" id="discipline" name="usage">
  			  	<option value="" disabled selected>Choisir l'utilisation de l'installation ...</option>
  			  	<option value="1">Entrainement</option>
  			  	<option value="2">Competition</option>
			  </select>
		</div>
		<div class="input-group mb-3" >
  			  <select style="width:540px;height:40px" id="discipline" name="discipline">
  			  	<option value="" disabled selected>Choisir discipline ...</option>
		  	  	<?php
						include_once 'index.php';
						$query = "SELECT * FROM discipline;";
						$stm = $dbh->prepare($query);
						$stm->execute();
						$result = $stm->fetchAll();
						print "<pre>";
						print_r($result);
						print "</pre>";
						foreach($result as $val){		
						 	echo '<option value="'.$val['id'].'"> '.$val['discipline_name'].'</option> ';
						}
				?>
			  </select>
		</div>
		<div class = "wrapper">
  		<button style="margin-top: 20px;margin-left: 170" type="submit" class="btn btn-primary" class ="center">Creer l'installation</button>
	</div>
	</div>
	</form>	
</body>