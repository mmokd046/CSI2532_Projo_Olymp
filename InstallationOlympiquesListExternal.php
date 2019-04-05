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
      installation_olympiques ;";
      $stm = $dbh->prepare($query);
      $stm->execute();
      $result = $stm->fetchAll();
      foreach($result as $val){
        echo '<button class="accordion"> '.$val['nom'].'</button>';
        echo '<div class="panel">';
        echo '<p> <strong> Description de installation : </strong>'.$val['description'].'</p>';
        echo '<p> <strong> capaciter de installation : </strong>'.$val['capacity'].'</p>';
        echo '<p> <strong> Usage de installation : </strong>'.$val['installation_usage'].'</p>';
        echo '<p> <strong> addresse : </strong>'.$val['addresse'].'</p>';
        $service_id = intval($val['id']);
        $disciplineQuery =  "SELECT * FROM 
                          take_place T , discipline D
                          WHERE installation_id = '$service_id' AND D.id = T.discipline_id ;";
        $stm = $dbh->prepare($disciplineQuery);
        $stm->execute();
        $resultDiscipline = $stm->fetchAll();
        $transportQuery =  "SELECT * FROM 
                            itneraire I , service_transport T
                            WHERE I.point_arriver = '$service_id' AND I.transport_id = T.id ;";
        $stm = $dbh->prepare($transportQuery );
        $stm->execute();
        $resultTransport = $stm->fetchAll();
        echo '<p> <strong> Discipline qui se deroule a installation : </strong>'.$resultDiscipline [0]['discipline_name'].'</p>';
        echo '<p> <strong> Transport passant par installation olympiques : </strong>'.$resultTransport  [0]['nom_service'].'</p>';
        echo '</div> ';
      }
     ?>
  </div>
</div>  
</body>
