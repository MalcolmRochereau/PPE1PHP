<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8" >
    <link rel="stylesheet" href="css\bootstrap.css" >
    <link rel="stylesheet" href="css\style.css" >
    <title>Formulaire</title>
    <script src="js\jquery.js"></script>
    <script src="js\bootstrap.js"></script>
    <script src="js\fonctions.js"></script>
</head>
<body>
    <?php 
    include("includes/navbar.php");
    include("includes/accesBDD.php");
    $sessiontempo = 0;
    ?>
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
        <div class="milieu">
            <center>
                <div class="titreForm">Problèmes</div>
                <img src="images/fondTitre.png" alt="" class="imageTitre">
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                        <h2>Liste de problèmes <br><br>
    
        <?php 
            $requete = "SELECT nom, prenom, numSecuSoc, probleme.date, commentaire FROM probleme, patient WHERE probleme.idPatient = patient.id";
            $result = $bdd->query($requete);
        ?>
            <table border="1" id="AfficherProbleme">
                <tr>
                    <th>
                        date du problème
                    </th>

                    <th>
                        Commentaire
                    </th>

                    <th>
                        Maladie suspectée
                    </th>

                    <th>
                        Nom du patient
                    </th>

                    <th>
                        Prénom du patient
                    </th>

                    <th>
                        Numéro de sécurité sociale
                    </th>

                    
                </tr>

        <?php
            while($ligne = $result->fetch())
            {
            
                echo "<tr>";
                    echo "<td>";
                        echo $ligne["date"];
                    echo "</td>";

                    echo "<td>";
                        echo $ligne["commentaire"];
                    echo "</td>";

                    echo "<td>";
                        echo $ligne["idMaladie"];
                    echo "</td>";
                    
                    echo "<td>";
                        echo $ligne["nom"];
                    echo "</td>";

                    echo "<td>";
                        echo $ligne["prenom"];
                    echo "</td>";

                    echo "<td>";
                        echo $ligne["numSecuSoc"];
                    echo "</td>";

                    
                echo "</tr>";

            }
            echo "</table>";
        ?>
                    </h2></div>
                </div> 
            </center>
        </div>
    </div>
    <div class="col-sm-1"></div>
</body>
</html>