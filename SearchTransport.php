  <head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Home page</title>
		<link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
   		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script type='text/javascript' src="js/HomePage.js"></script>
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
		<form action="AddCountryController.php" id ="HomePageForm" method="POST">
			<div class="input-group mb-3">
			  <input type="text" class="form-control" placeholder="Entrer le nom du service de transport" name="country" aria-label="Username" aria-describedby="basic-addon1" id="country">
			</div>
		  <div class="alert alert-danger" role="alert" id="emailDiv" hidden>
  				<strong>Oh snap!</strong> Change a few things up and try submitting again.
		</div>
	<div class = "wrapper">
  		<button style="margin-top: 20px;margin-left: 170" type="submit" class="btn btn-primary" class ="center">Cherchez service de transport</button>
	</div>
		</form>		
	</div>
</body>