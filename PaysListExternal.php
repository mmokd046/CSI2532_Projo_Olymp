  


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
      $query = "SELECT * FROM pays;";
      $stm = $dbh->prepare($query);
      $stm->execute();
      $result = $stm->fetchAll();
      foreach($result as $val){
        echo '<button class="accordion"> '.$val['nom_pays'].'</button>';
        echo '<div class="panel">';
        
        echo '<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div> ';
      }
     ?>
   </div>
</div>  
</body>
