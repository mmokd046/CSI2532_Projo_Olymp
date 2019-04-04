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
		<form action="DisciplineFormController.php" method="POST">
			<div class="input-group mb-3">
			  <input type="text" class="form-control" placeholder="Entrer le nom de la discipline" name ="discipline" aria-describedby="basic-addon1" id="discipline">
			</div>
		  	<div class="alert alert-danger" role="alert" id="emailDiv" hidden>
  				<strong>Oh snap!</strong> Change a few things up and try submitting again.
			</div>
			<div id="epreuveContainer" class="input-group mb-3">
			  <input type="text" class="form-control" placeholder="Entrer le nom de l'epreuve" name ="epreuves[]" aria-describedby="basic-addon1" id="epreuve">
			</div>
		  	<div class="alert alert-danger" role="alert" id="emailDiv" hidden>
  				<strong>Oh snap!</strong> Change a few things up and try submitting again.
			</div>
			    <button class="add_form_field" style="width: 500px;">Ajouter une autre epreuve &nbsp; 
      		<span style="font-size:16px; font-weight:bold;">+ </span>
    			</button>
	<div class = "wrapper">
  		<button style="margin-top: 50px;margin-left: 170" type="submit" class="btn btn-primary" class ="center">Ajouter Discipline</button>
	</div>
		</form>		
	</div>
</body>