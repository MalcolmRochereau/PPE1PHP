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
                <div class="titreForm">Les Utilisateurs</div>
                <img src="images/fondTitre.png" alt="" class="imageTitre">
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                        <h2> Utilisateurs <br><br>
    
        <?php 
            $requete = "SELECT * FROM v_utilisateurs";
            $result = $bdd->query($requete);
        ?>
            <table border="1" id="AfficherProbleme">
                <tr>
                    <th>
                        Nom
                    </th>

                    <th>
                        Prenom
                    </th>

                    <th>
                        Téléphone
                    </th>

                    <th>
                        E-mail
                    </th>

                    <th>
                        Identifiant
                    </th>

                    <th>
                        Mot de passe
                    </th>

                    <th>
                        Rue
                    </th>

                    <th>
                        Code postal
                    </th>

                    <th>
                        Profil
                    </th>

                    <th>
                        Catégorie
                    </th>

                    <th>
                        Matricule
                    </th>

                    <th>
                        Région
                    </th>

                    
                </tr>

        <?php
            while($ligne = $result->fetch())
            {
            
                echo "<tr>";
                    echo "<td>";
                        echo $ligne["nom"];
                    echo "</td>";

                    echo "<td>";
                        echo $ligne["prenom"];
                    echo "</td>";

                    echo "<td>";
                        echo $ligne["tel"];
                    echo "</td>";
                    
                    echo "<td>";
                        echo $ligne["mail"];
                    echo "</td>";

                    echo "<td>";
                        echo $ligne["identifiant"];
                    echo "</td>";

                    echo "<td>";
                        echo $ligne["mdp"];
                    echo "</td>";

                    echo "<td>";
                        echo $ligne["rue"];
                    echo "</td>";

                    echo "<td>";
                        echo $ligne["cp"];
                    echo "</td>";

                    echo "<td>";
                        echo $ligne["role"];
                    echo "</td>";

                    echo "<td>";
                        echo $ligne["categorie"];
                    echo "</td>";

                    echo "<td>";
                        echo $ligne["matriculeVisiteur"];
                    echo "</td>";

                    echo "<td>";
                        echo $ligne["region"];
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