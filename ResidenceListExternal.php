  


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
      <h2>Listes des residences</h2>
      <?php
      include_once 'index.php';
      $query = "SELECT * FROM 
      residence;";
      $stm = $dbh->prepare($query);
      $stm->execute();
      $result = $stm->fetchAll();
      foreach($result as $val){
        echo '<button class="accordion"> '.$val['addresse'].'</button>';
        echo '<div class="panel">';
        echo '<p> <strong> Nom de la residence : </strong>'.$val['addresse'].'</p>';
        $residence_id = intval($val['id']);
        $HabitantQuery =  "SELECT * FROM 
                            reside  R , personne P
                            WHERE R.personne_id = P.id AND R.addresse_id= '$residence_id';";
        $stm = $dbh->prepare($HabitantQuery);
        $stm->execute();
        $resulHabitant = $stm->fetchAll();
        echo '<p> <strong>Listes des habitants</strong></p>';
        echo '<ul>';

        foreach($resulHabitant  as $habitant){
           echo '<li>'.$habitant['prenom'].' '.$habitant['last_name'].'</li>';
        }
        echo '</ul>';
        $transportQuery =  "SELECT * FROM 
                            service_transport S , itneraire I
                            WHERE I.transport_id = S.id AND I.point_depart = '$residence_id';";
        $stm = $dbh->prepare($transportQuery);
        $stm->execute();
        $resultTransport = $stm->fetchAll();
        echo '<p> <strong> Listes des services de Transport Passant par la residence </strong></p>';
        echo '<ul>';
        foreach($resultTransport as $transport){
           echo '<li>'.$transport['nom_service'].'</li>';
        }
        echo '</ul>';
        echo'</div>';
      }
      ?>
</div>
</div>  
</body>
