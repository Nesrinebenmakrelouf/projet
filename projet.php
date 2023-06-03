<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="Ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Projet</title>
    <link rel="stylesheet" href="styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Konkhmer+Sleokchher&display=swap" rel="stylesheet">
    
  </head>
  <body>
  <section id="header">
      <img src="logo.png" height="70px" width="140px" id="logo">
        <div>
            <ul id="navbar">
                <li><a class="active" href="acceuil.php">Accueil</a></li>
                <li><a  href="Apropos.php">À propos</a></li>
                <li><a href="membres.php">Membres</a></li>
                <li class="dropdown">
                  <a href="publication.php" class="dropdown-toggle" id="publications-dropdown">Publications</a>
                  
              </li>
              <li class="dropdown">
                  <a href="projet.php" class="dropdown-toggle" id="projets-dropdown">Projets</a>
                 
              </li>
              
                <li><a href="contact.php">Contact</a></li>
                
            </ul>
        </div>
    </section>
   <div class="Liste">
     <div class="listebar">
        <h2 Align="center">Liste </h2><br>
        <ul>
          <li> <a href="#1">Projets Nationales</a></li><br>
          <li><a href="#2">Projets internationales</a></li><br>
          <li><a href="#3">Projets Cnepru</a></li><br>
          
        </ul>
     </div>
    </div>

    
      
      <section class="recharche">
        <h1 >Recherche / Projets :</h1>
        <h3>Le LRDSI est impliqué dans de nombreux projets de recherche sur le plan national et international. </h3>
        <img src="icons8-double-down-50.png" alt="">
      </section>
      
   
    
 
    <?php
// Informations de connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lrdsi";

// Connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Échec de la connexion à la base de données: " . $conn->connect_error);
}

// Requête pour récupérer les projets
$sql = "SELECT * FROM projet ORDER BY CASE WHEN type = 'Nationale' THEN 1 WHEN type = 'CNEPRU' THEN 2 ELSE 3 END";
$result = $conn->query($sql);

// Affichage des projets
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
     if($row['type']=='nationale'){
        echo '<sectin id="1" class="internationa"> 
          <div class="cadre">
             <div class="titrepub">
              <p>• '. $row["titrep"] .' :</p><br> </div>
              <div class="infopub">
             <p> <img src="icons8-earth-50.png" alt="" height="30px"><span> Type : </span> ' . $row["type"] . '</p>
             <p><img src="icons8-people-50.png" alt="" height="30px"><span>  Résponsables :</span>' . $row["responsables"] . '</p>
             <p></p><img src="icons8-date-50.png" alt="" height="30px"><span> Anneé :</span>'. $row["date_debut"] . '/'. $row["date_fin"] . ' </p> <br>
            </div>
            </div>
      
     
       </section>'  ;
    }
  else {
    if($row['type']=='Internatoinale'){
      echo '<sectin id ="2" class="internationa"> 
        <div class="cadre">
           <div class="titrepub">
            <p>• '. $row["titrep"] .' :</p><br> </div>
            <div class="infopub">
           <p> <img src="icons8-earth-50.png" alt="" height="30px"><span> Type : </span> ' . $row["type"] . '</p>
           <p><img src="icons8-people-50.png" alt="" height="30px"><span>  Résponsables :</span>' . $row["responsables"] . '</p>
           <p></p><img src="icons8-date-50.png" alt="" height="30px"><span> Anneé :</span>'. $row["date_debut"] . '/'. $row["date_fin"] . ' </p> <br>
          </div>
          </div>
    
   
     </section>'  ;
  }
 
  else {
    echo '<sectin id="3" class="internationa"> 
    <div class="cadre">
       <div class="titrepub">
        <p>• '. $row["titrep"] .' :</p><br> </div>
        <div class="infopub">
       <p> <img src="icons8-earth-50.png" alt="" height="30px"><span> Type : </span> ' . $row["type"] . '</p>
       <p><img src="icons8-people-50.png" alt="" height="30px"><span>  Résponsables :</span>' . $row["responsables"] . '</p>
       <p></p><img src="icons8-date-50.png" alt="" height="30px"><span> Anneé :</span>'. $row["date_debut"] . '/'. $row["date_fin"] . ' </p> <br>
      </div>
      </div>


 </section>'  ;
}

  } }
  }

/*pub nationale*/ 
?>
 



    <section>
      <!--Start Footer -->
      <br><div class="footer" Align="center"> <br>
        <img src="logo.png" height="75px" width="160px" id="logo" Align="left">
        <img src="logo.png" height="75px" width="160px" id="logo" Align="right">
        <h3>LABORATOIRE DE RECHERCHE POUR LE DEVELOPPEMENT DES SYSTEMES INFORMATISES <br> Université Saad Dahlab - Blida 1  |  Faculté des Sciences  </h3> <br>
        <h2>Tel: + 213 (0)25 27 24 36  <br> Email: lrdsi@univ-blida.dz</h2>
        <br><p class="copyright"> &copy; 2023 All Rights Reserved to LRDSI</p>
      </div>

    </section>
  </body>
  </html> 
