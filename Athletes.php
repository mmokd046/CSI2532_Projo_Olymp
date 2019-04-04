<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>


<table>





	</div>
		<div class="input-group mb-3" >
  			  <select style="width:540px;height:40px" id="country" name="country">
  			  	<option value="" disabled selected>Choisir pays ...</option>
		  	  	<?php
						include_once 'index.php';
						$query = "SELECT * FROM pays;";
						$stm = $dbh->prepare($query);
						$stm->execute();
						$result = $stm->fetchAll();
						print "<pre>";
						print_r($result);
						print "</pre>";
						foreach($result as $val){		
						 	echo '<option value="'.$val['id'].'"> '.$val['nom_pays'].'</option> ';
						}
				?>
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

  <tr>
    <th>Nationalité</th>
    <th>Nom</th>
    <th>Sport</th>
    <th>Medaille</th>
    
  </tr>
  <tr>
    <td>COTE D'IVOIRE</td>
    <td>Blingus Bazarba</td>
    <td>Boxing</td>
     <td>gold</td>
    
  </tr>
  <tr>
    <td>SENEGAL</td>
    <td>JM le baoulé</td>
    <td>Soccer</td>
     <td>Argent</td>
    
  </tr>
  <tr>
    <td>ALLEMAGNE</td>
    <td>Ernst Handel</td>
    <td>Tenis</td>
    <td>Bronze</td>
  </tr>
  <tr>
    <td>ARGENTINE</td>
    <td>Island Michael</td>
    <td>Basketball</td>
    <td>argent</td>
  </tr>
  <tr>
     <td>ALBANIE</td>
    <td>Laughing Bacchus Winecellars</td>
    <td>Yoshi Tannamuri</td>
    <td>Canada</td>
  </tr>
  <tr>
      <td>GRANDE BRETAGNE</td>
      <td>Giovanni Rovelli</td>
      <td>SPRINT</td>
       <td>argent</td>
  </tr>
</table>

</body>
</html>

