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
      <a href="AddDiscipline.php">Ajouter</a>
      <a href="DisciplineList.php">Modifier discipline</a>
      <a href="EpreuveList.php">Modifier epreuve</a>
      <a href="DeleteDiscipline.php">Supprimer Discipline</a>
      <a href="DeleteEpreuves.php">Supprimer Epreuves</a>
    </div>
</div>
<div class="dropdown">
    <button class="dropbtn">Athlètes
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="AthleteForm.php">Ajouter</a>
      <a href="UpdateAthlete.php">Modifier</a>
      <a href="DeleteAthlete.php">Supprimer</a>
    </div>
  </div> 

<div class="dropdown">
    <button class="dropbtn">Village
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="AddResidence.php">Ajouter Residence</a>
      <a href="ResidenceList.php">Modifier Information de residence</a>
      <a href="DeleteResidence.php">Supprimer residence</a>
    </div>
  </div>
<div class="dropdown">
    <button class="dropbtn">Services de transport
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="AddServiceTransport.php">Ajouter</a>
      <a href="ServiceTransportList.php">Modifier</a>
      <a href="DeleteServiceTransport.php">Supprimer</a>
    </div>
</div>
<div class="dropdown">
    <button class="dropbtn">Services Medicaux
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="AddServiceMedicaux.php">Ajouter</a>
      <a href="ServiceMedicauxList.php">Modifier</a>
      <a href="DeleteServiceMedicauxForm.php">Supprimer</a>
    </div>
</div>
<div class="dropdown">
    <button class="dropbtn">Employer
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="AddEmployee.php">Ajouter</a>
      <a href="EmployeeList.php">Modifier</a>
      <a href="DeleteEmployee.php">Supprimer</a>
    </div>
</div>
<div class="dropdown">
    <button class="dropbtn">Installation Olympiques
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="AddInstallationOlymp.php">Ajouter</a>
      <a href="#">Modifier</a>
      <a href="#">Supprimer</a>
    </div>
</div>
<div class="dropdown">
    <button class="dropbtn">Pays
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="AddCountry.php">Ajouter</a>
      <a href="CountryList.php">Modifier</a>
      <a href="DeletePays.php">Supprimer</a>
    </div>
    <div class="dropdown-content">
    </div>
</div>
<div class="dropdown">
    <button class="dropbtn">Officiel
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="AddOfficielForm.php">Ajouter</a>
      <a href="OfficielList.php">Modifier</a>
      <a href="DeleteOfficiel.php">Supprimer</a>
    </div>
</div>
<div class="dropdown">
    <button class="dropbtn">Deconnexion
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="olympic_navbar.php">Deconnexion</a>
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
