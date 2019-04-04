  <head>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<meta name="author" content="">
		<title>Add Athlete</title>
		<link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
   		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

	<div style="display: inline-block;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    width: 500px;
    height: 400px;
    margin: auto;">

<div class="container">
  <h2>Listes des services medicaux</h2>
  <ul class="list-group">
	  	<?php
			include_once 'index.php';
			$query = "SELECT * FROM 
			installation_olympiques;";
			$stm = $dbh->prepare($query);
			$stm->execute();
			$result = $stm->fetchAll();
			foreach($result as $val){
				echo '<form action="DeleteInstallationOlympiques.php" id="form-id" method="POST">';	
				echo '<input type="hidden" name="installation_id" value="'.$val['id'].'"/>';
				echo '<div style="float:left">';
			 	echo '<li class="list-group-item" style = "width:300" class="athlete" value="'.$val['id'].'"> '.$val['nom'].'</li></div> <div style="float: left"><button type="submit" style="height:50">Supprimer service medical</button></div> ';
			 	echo '</form>';

			}
		?>
  </ul>
</div>