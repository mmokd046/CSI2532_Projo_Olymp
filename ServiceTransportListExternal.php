  <head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script type='text/javascript' src="DisciplineExternal.js"></script>
<style>
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ccc; 
}

.panel {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
}
</style>
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

  <div class="container">
      <h2>Listes des disciplines</h2>
      <?php
      include_once 'index.php';
      $query = "SELECT * FROM 
      service_transport ;";
      $stm = $dbh->prepare($query);
      $stm->execute();
      $result = $stm->fetchAll();
      foreach($result as $val){
        echo '<button class="accordion"> '.$val['nom_service'].'</button>';
        echo '<div class="panel">';
        echo '<p> <strong> Nom de officiel: </strong>'.$val['nom_service'].'</p>';
        $transport_id = intval($val['id']);
        $residenceQuery =  "SELECT * FROM 
                          itneraire I , residence R
                          WHERE I.transport_id = '$transport_id' AND R.id = I.point_depart ;";
        $stm = $dbh->prepare($residenceQuery);
        $stm->execute();
        $resultResidence = $stm->fetchAll();
        $installationQuery =  "SELECT * FROM 
                          itneraire I , installation_olympiques R
                          WHERE I.transport_id = '$transport_id' AND R.id = I.point_arriver ;";
        $stm = $dbh->prepare($installationQuery);
        $stm->execute();
        $resultInstallation = $stm->fetchAll();
        echo '<p> <strong> Point de depart </strong>'.$resultResidence[0]['addresse'].'</p>';
        echo '<p> <strong> Point de arriver </strong>'.$resultInstallation [0]['nom'].'</p>';
        echo '</div> ';
      }
     ?>
  </div>
</div>  
</body>
