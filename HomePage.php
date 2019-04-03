  <head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Home page</title>
		<link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
   		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
   		<script type='text/javascript' src="Login.js"></script>
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
		$query = "SELECT * FROM user_table;";
		$stm = $dbh->prepare($query);
		$stm->execute();
		$result = $stm->fetchAll();
		$username= $result[0]['username'];
		$password = $result[0]['password'];

	?>
		<form action="AdminWelcomePage.php" id ="HomePageForm">
			<div class="input-group mb-3">
			  <input type="text" class="form-control" placeholder="Enter username" aria-label="Username" aria-describedby="basic-addon1" id="email" name="username">
			</div>
		  <div class="alert alert-danger" role="alert" id="emailDiv" hidden>
  				<strong>Oh snap!</strong> Change a few things up and try submitting again.
		</div>
			  <input type="hidden" id = "usernamefromDb" value="<?php echo $username;?>" />

			  <input type="hidden" name="user" id ="passwordfromDb" value="<?php echo $password;?>" />

		  <div class="form-group">
		    <input style="margin-top: 40px;" placeholder="Enter password" name="password" type="password" class="form-control" id="password" placeholder="Password">
		  </div>
		  <div class="alert alert-danger" role="alert" id="passwordDiv" hidden>
  			<strong>Oh snap!</strong> Change a few things up and try submitting again.
		</div>
	<div class = "wrapper">
  		<button style="margin-top: 20px;margin-left: 170" type="submit" class="btn btn-primary" class ="center">Connexion</button>
	</div>
		</form>		
	</div>
</body>