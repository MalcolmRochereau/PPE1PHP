﻿<!DOCTYPE html>
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
                <div class="titreForm">Médicaments</div>
                <img src="images/fondTitre.png" alt="" class="imageTitre">
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                    <h2>Affichage des problèmes liés au médicament<br><br>
                        <form id="afficherMedic" action="afficherMedic.php" method="POST">
                            <table>
                            	<tr>
                            		<th>Date du probleme</th>
									<th>Nom du patient</th>
									<th>Prenom du patient</th>
									<th>Numéro de sécurité sociale</th>
									<th>Maladie</th>
									<th>Commentaire</th>
                            	</tr>
                            
							<?php
								$reponse = $bdd->query('SELECT date, commentaire, libelle, nom, prenom, numSecuSoc FROM probleme, maladie, patient WHERE patient.id = probleme.idPatient AND maladie.id = probleme.idMaladie');
								while($row = $reponse->fetch())
								{
									echo "<tr><td>".$row['date']."</td><td>".$row['commentaire']."</td><td>".$row['libelle']."</td><td>".$row['nom']."</td><td>".$row['prenom']."</td><td>".$row['numSecuSoc']."</td></tr>";
								}
								$reponse->closeCursor();
							?>
                            <input type="submit" name="validation" value="Afficher">
</table>
                        </form>
                    </h2>
                </div>
                </div> 
            </center>
        </div>
    </div>
    <div class="col-sm-1"></div>
</body>
</html>