  


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
      <h2>Listes des athletes</h2>
      <?php
      include_once 'index.php';
      $query = "SELECT * FROM 
      personne P, athletes A 
      WHERE P.id = A.athlete_id ;";
      $stm = $dbh->prepare($query);
      $stm->execute();
      $result = $stm->fetchAll();
      foreach($result as $val){
        echo '<button class="accordion"> '.$val['prenom'].'</button>';
        echo '<div class="panel">';
        echo '<p> <strong> Nom de athletes : </strong>'.$val['prenom'].' '.$val['last_name'].'</p>';
        $personne_id = intval($val['id']);
        $paysQuery =  "SELECT * FROM 
                          pays P, represent R 
                          WHERE R.athlete_id = '$personne_id' AND P.id = R.country_id ;";
        $stm = $dbh->prepare($paysQuery);
        $stm->execute();
        $resultPays = $stm->fetchAll();
        echo'<p> <strong> Pays : </strong> '.$resultPays[0]['nom_pays'].' </p>';
        $epreuveQuery =  "SELECT * FROM 
                          participe P, epreuve E
                          WHERE P.athlete_id = '$personne_id' AND E.id = P.epreuves_id ;";
        $stm = $dbh->prepare($epreuveQuery);
        $stm->execute();
        $resultEpreuves = $stm->fetchAll();
        $residenceQuery =  "SELECT * FROM 
                          reside , residence R
                          WHERE reside.personne_id = '$personne_id' AND reside.addresse_id = R.id;";
        $stm = $dbh->prepare($residenceQuery);
        $stm->execute();
        $resultResidence = $stm->fetchAll();
        echo '<p> <strong> Residence : </strong>'.$resultResidence[0]['addresse'].'</p>';
        echo '<p> <strong>Listes des epreuves auxquels athletes participe </strong></p>';
        echo '<ul>';
        foreach($resultEpreuves as $epreuves){
           echo '<li>'.$epreuves['epreuve_name'].'</li>';
        }
        echo '</ul>';
         $resultEpreuves = $stm->fetchAll();
        $superviseQuery =  "SELECT * FROM 
                            supervise S , personne P
                            WHERE S.athlete_id = '$personne_id' AND S.superviseur_id = P.id;";
        $stm = $dbh->prepare($superviseQuery);
        $stm->execute();
        $resultSupervise = $stm->fetchAll();
        if (sizeof($resultSupervise) == 0) {
          echo '<p> L\'Athletes a aucun superviseur pour le moment </p>';
        } else {
                  echo '<p> <strong> Listes des superviseurs </strong></p>';
        echo '<ul>';
        foreach($resultSupervise as $superviseur){
           echo '<li>'.$superviseur['prenom'].' '.$superviseur['last_name'].'</li>';
        }
        echo '</ul>';
        }
        echo'</div>';
      }
     ?>
   </div>
</div>  
</body>
