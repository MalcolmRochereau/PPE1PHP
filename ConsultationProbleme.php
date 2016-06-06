<?php
session_start();
?>
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
    include("includes/fonctions.php");
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
            $requete = "SELECT date, commentaire, maladie.libelle AS libelleMaladie, nom, prenom, denomination, gravite_probleme.libelle AS libelleGravite
						FROM probleme
						JOIN patient ON probleme.idPatient = patient.id
						JOIN maladie ON maladie.id = probleme.idMaladie
						JOIN medicament ON medicament.CIP = probleme.idMedicament
						JOIN gravite_probleme ON gravite_probleme.id = probleme.idGravite";
            $result = $bdd->query($requete);
        ?>
		
            <table id="AfficherProbleme">
                <tr class="intitule">
                    <td>
                        Date du problème
                    </td>

                    <td>
                        Commentaire
                    </td>

                    <td>
                        Maladie suspectée
                    </td>

                    <td>
                        Nom du patient
                    </td>

                    <td>
                        Prénom du patient
                    </td>

                    <td>
                        Numéro du médicament
                    </td>
					
					<td>
                        Gravité du problème
                    </td>
					
				</tr>
		
        <?php
            while($ligne = $result->fetch())
            {
            
                echo "<tr>";
                    echo "<td>";
                        echo formatDate($ligne["date"]);
                    echo "</td>";

                    echo "<td>";
                        echo $ligne["commentaire"];
                    echo "</td>";

                    echo "<td>";
                        echo $ligne["libelleMaladie"];
                    echo "</td>";
                    
                    echo "<td>";
                        echo $ligne["nom"];
                    echo "</td>";

                    echo "<td>";
                        echo $ligne["prenom"];
                    echo "</td>";

                    echo "<td>";
                        echo $ligne["denomination"];
                    echo "</td>";
					
					echo "<td>";
                        echo $ligne["libelleGravite"];
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