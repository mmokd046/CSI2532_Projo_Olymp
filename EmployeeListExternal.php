  


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
      <h2>Listes des employer</h2>
      <?php
      include_once 'index.php';
      $query = "SELECT * FROM 
      personne P, employee E 
      WHERE P.id = E.employer_id ;";
      $stm = $dbh->prepare($query);
      $stm->execute();
      $result = $stm->fetchAll();
      foreach($result as $val){
        echo '<button class="accordion"> '.$val['prenom'].'</button>';
        echo '<div class="panel">';
        echo '<p> <strong> Nom de employer : </strong>'.$val['prenom'].' '.$val['last_name'].'</p>';
        echo '<p> <strong> Numero de telephone : </strong>'.$val['phone_number'].'</p>';
        $employer_id = intval($val['id']);
        $residenceQuery =  "SELECT * FROM 
                          reside , residence R
                          WHERE reside.personne_id = '$employer_id' AND reside.addresse_id = R.id;";
        $stm = $dbh->prepare($residenceQuery);
        $stm->execute();
        $resultResidence = $stm->fetchAll();
        echo '<p> <strong> Residence : </strong>'.$resultResidence[0]['addresse'].'</p>';
                $discipline_id = intval($val['id']);
        echo'</div>';
      }
     ?>
   </div>
</div>  
</body>
