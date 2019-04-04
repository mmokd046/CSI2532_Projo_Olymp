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
	$addresse = $_POST['addresse'];
	 $countryQuery = "SELECT * FROM residence
						WHERE addresse LIKE '%$addresse%';";
	 $stm = $dbh->prepare($countryQuery);
	 $stm->execute();
	 $result = $stm->fetchAll();
	 echo '<h2>Listes des addresse</h2>';
	 if (sizeof($result) == 0) {
	 	echo '<p> Aucun addresse trouver </p>';
	 } else {
	     echo '<ul class="list-group">';
		 foreach($result as $val){
	      echo '<li class="list-group-item">'.$val['addresse'].'</li>';
		}
		echo '</ul> ';
	}
    ?>
</div>
</body>
