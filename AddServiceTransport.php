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
		<form action="AddserviceTransportFormController.php" method="POST">
			<div class="input-group mb-3">
			  <input type="text" class="form-control" placeholder="Entrer le nom du service de transport" name ="name" aria-describedby="basic-addon1" id="nom">
			</div>
		  	<div class="alert alert-danger" role="alert" id="emailDiv" hidden>
  				<strong>Oh snap!</strong> Change a few things up and try submitting again.
			</div>
			
		<div class="input-group mb-3" >
  			  <select style="width:540px;height:40px" id="discipline" name="residence">
  			  	<option value="" disabled selected>Choisir la residence comme point de depart...</option>
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

		<div class="input-group mb-3" >
  			  <select style="width:540px;height:40px" id="discipline" name="installation_olympique">
  			  	<option value="" disabled selected>Choisir l'installation olympique point d'arriver...</option>
		  	  	<?php
						include_once 'index.php';
						$query = "SELECT * FROM installation_olympiques;";
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
			
			<div class="input-group mb-3">
			  <div class="input-group-prepend">
			    	<span class="input-group-text" id="basic-addon1">
			    		 <i class='far fa-address-card' aria-hidden='true'></i>
			    	</span>
			  </div>
			  <input type="number" class="form-control" name="frequence" placeholder="Entrer une fréquence en minute " aria-describedby="basic-addon1" id="frequence" min="5" max="60">
			</div>
			  <div class="alert alert-danger" role="alert" id="LastNameDiv" hidden>
  				<strong>Oh snap!</strong> Change a few things up and try submitting again.
			</div>
		<div class = "wrapper">
  		<button style="margin-top: 20px;margin-left: 170" type="submit" class="btn btn-primary" class ="center">Creer le service de transport</button>
	</div>
	</div>
	</form>	
</body>