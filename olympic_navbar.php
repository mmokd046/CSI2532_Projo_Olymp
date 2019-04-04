<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.topleft {
  position: absolute;
  top: 8px;
  left: 16px;
  font-size: 18px;
}

.topright {
  position: absolute;
  top: 8px;
  right: 16px;
  font-size: 18px;
}

.bottomleft {
  position: absolute;
  bottom: 8px;
  left: 16px;
  font-size: 18px;
}

.bottomright {
  position: absolute;
  bottom: 8px;
  right: 16px;
  font-size: 18px;
}


</style>
</head>
<body>

<div class="navbar">
  <div class="dropdown">
    <button class="dropbtn">Discipline
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="DisciplineListExternal.php">Voir les disciplines</a>
      <a href="#">Chercher une discipline</a>
    </div>
  </div>


  <div class="dropdown">
    <button class="dropbtn">Epreuve
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="EpreuveListExternal.php">Voir les epreuves</a>
      <a href="SearchEpreuve.php">Cherchez epreuves</a>
    </div>
  </div>


<div class="dropdown">
    <button class="dropbtn">Athlètes
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="AthletesListExternal.php">Voir les Athletes</a>
      <a href="SearchAthlete.php">Chercher les athletes</a>
    </div>
  </div> 

<div class="dropdown">
    <button class="dropbtn">Village
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="ResidenceListExternal.php">Listes des residence</a>
      <a href="SearchVillage.php">Chercher une residence</a>
    </div>
  </div>
<div class="dropdown">
    <button class="dropbtn">Services de transport
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Liste des services de transport</a>
      <a href="SearchTransport.php">Chercher service de transport</a>
    </div>
</div>
<div class="dropdown">
    <button class="dropbtn">Services Medicaux
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Listes des services medicaux</a>
      <a href="SearchMedicaux.php">Chercher services medicaux</a>
    </div>
</div>
<div class="dropdown">
    <button class="dropbtn">Employer
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="EmployeeListExternal.php">Listes des employer</a>
      <a href="SearchEmployee.php">Chercher employer</a>
    </div>
</div>
<div class="dropdown">
    <button class="dropbtn">Installation Olympiques
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="SearchOlymp.php">Listes des installations olympiques</a>
      <a href="SearchOlymp.php">Chercher installation olympiques</a>
    </div>
</div>
<div class="dropdown">
    <button class="dropbtn">Pays
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="PaysListExternal.php">Listes des pays</a>
      <a href="SearchCountry.php">Chercher pays</a>
    </div>
</div>
<div class="dropdown">
    <button class="dropbtn">Officiel
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="OfficielListExternal.php">Listes des officiels</a>
      <a href="SearchOfficiel.php">Chercher officiel</a>
    </div>
</div>
<div class="dropdown">
    <button class="dropbtn">Connexion
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="HomePage.php">Se connecter en tant que adminstrateur</a>
    </div>
</div>
  </div>
  <div class="bottomleft">
        <img src="recompense.jpg" alt="Olympic logo"  style="margin-left: 30px;;margin-bottom: 200px;width: 400px;
    height: 300px;"> 
  </div>

  <div class="bottomright">
        <img src="determination.jpg" alt="Olympic logo"  style="margin-right: 30px;;margin-bottom: 200px;width: 400px;
    height: 300px;"> 
  </div>

  <div style="display: inline-block;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    width: 500px;
    height: 400px;
    margin: auto;">
    <img src="olympic_game.jpg" alt="Olympic logo" class="center" style="margin-top: 20px;width: 500px;
    height: 400px;"> 
  </div>

</body>
</html>
