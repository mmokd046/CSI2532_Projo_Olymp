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
	$pays_name = $_POST['country'];
	 $countryQuery = "SELECT * FROM pays
						WHERE nom_pays LIKE '%$pays_name%';";
	 $stm = $dbh->prepare($countryQuery);
	 $stm->execute();
	 $result = $stm->fetchAll();
	 echo '<h2>Listes des pays</h2>';
	 if (sizeof($result) == 0) {
	 	echo '<li class="list-group-item">Aucun pays trouver</li>';
	 } else {
	     echo '<ul class="list-group">';
		 foreach($result as $val){
	      echo '<li class="list-group-item">'.$val['nom_pays'].'</li>';
		}
		echo '</ul> ';
	}
    ?>
</div>
</body>
