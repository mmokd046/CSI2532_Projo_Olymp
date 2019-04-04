  <head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<meta name="author" content="">
		<title>Baby Information</title>
		<link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="HomePage.css">
   		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    	<script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
    	<link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    	<script type='text/javascript' src="js/FormPage.js"></script>
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
		<form action="ImmunisationPage.html" method="GET">
			<div class="input-group mb-3">
			  <div class="input-group-prepend">
		    	<span class="input-group-text" id="basic-addon1">
		    		 <i class='far fa-address-card' aria-hidden='true'></i>
		    	</span>
			  </div>
			  <input type="text" class="form-control" placeholder="First name" aria-label="LastName" aria-describedby="basic-addon1" id="firstName">
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
			  <input type="text" class="form-control" placeholder="Last name" aria-label="LastName" aria-describedby="basic-addon1" id="lastName">
			</div>
			  <div class="alert alert-danger" role="alert" id="LastNameDiv" hidden>
  				<strong>Oh snap!</strong> Change a few things up and try submitting again.
			</div>
		<div class="input-group mb-3" >
  			  <select style="width:540px;height:40px" id="sex">
  			  	<option value="" disabled selected>Select the sex of the new born ...</option>
			    <option value="male">Male</option>
			    <option value="female">Female</option>
			  </select>
		</div>
		<div class="alert alert-danger" role="alert" id="sexDiv" hidden>
			<strong>Oh snap!</strong> Change a few things up and try submitting again.
		</div>
		<div class="input-group mb-3" >
  			  <select style="width:540px;height:40px" id="sex">
  			  	<option value="" disabled selected>Select the type of officiel ...</option>
			    <option value="male">Male</option>
			    <option value="female">Female</option>
			  </select>
		</div>
		<div class="alert alert-danger" role="alert" id="sexDiv" hidden>
			<strong>Oh snap!</strong> Change a few things up and try submitting again.
		</div>
		<div class="input-group mb-3" >
  			  <select style="width:540px;height:40px" id="sex">
  			  	<option value="" disabled selected>Select the sex of the new born ...</option>
			    <option value="male">Male</option>
			    <option value="female">Female</option>
			  </select>
		</div>
		<div class="alert alert-danger" role="alert" id="sexDiv" hidden>
			<strong>Oh snap!</strong> Change a few things up and try submitting again.
		</div>
		<div class="input-group mb-3" >
  			  <select style="width:540px;height:40px" id="sex">
  			  	<option value="" disabled selected>Select the sex of the new born ...</option>
			    <option value="male">Male</option>
			    <option value="female">Female</option>
			  </select>
		</div>
		<div class="alert alert-danger" role="alert" id="sexDiv" hidden>
			<strong>Oh snap!</strong> Change a few things up and try submitting again.
		</div>
	<div class = "wrapper">
  		<button style="margin-top: 20px;margin-left: 150" type="submit" class="btn btn-primary" class ="center">Create athlete</button>
	</div>
	</div>
	</form>	
</body>