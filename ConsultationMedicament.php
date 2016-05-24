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
                <div class="titreForm">Médicaments</div>
                <img src="images/fondTitre.png" alt="" class="imageTitre">
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                    <h2>Affichage des médicaments<br><br></h2>
                        <form id="afficherMedic" action="afficherMedic.php" method="POST">
                            <table>
							<h2>
                            	<tr>
                            		<th>libelle</th>
									<th>date de retrait</th>
									<th>numero d'autorisation</th>
									<th>date d'autorisation</th>
									<th>indication de prescription</th>
									<th>raison de retrait</th>
									<th>forme pharmaceutique</th>
                            	</tr>
								</h2>
							<?php
								$reponse = $bdd->query('SELECT medicament.libelle AS libelleMedicament, medicament.dateRetrait, medicament.numAutorisation, medicament.dateAutorisation, medicament.indicationPrescription, raisonRetrait.libelle AS raisonRetrait, formePharmaceutique.libelle AS libelleFormePharmaceutique FROM medicament, raisonRetrait, formePharmaceutique WHERE medicament.idFormePharmaceutique=formePharmaceutique.id and medicament.idRaisonRetrait=raisonRetrait.id');
								while($ligne = $reponse->fetch())
								{
								echo "<tr>";
									echo "<td>";
										echo $ligne["libelleMedicament"];
									echo "</td>";

									echo "<td>";
										echo $ligne["dateRetrait"];
									echo "</td>";

									echo "<td>";
										echo $ligne["numAutorisation"];
									echo "</td>";
									
									echo "<td>";
										echo $ligne["dateAutorisation"];
									echo "</td>";

									echo "<td>";
										echo $ligne["indicationPrescription"];
									echo "</td>";

									echo "<td>";
										echo $ligne["raisonRetrait"];
									echo "</td>";

									echo "<td>";
										echo $ligne["libelleFormePharmaceutique"];
									echo "</td>";
								echo "</tr>";
								
								}
								$reponse->closeCursor();
							?>
								
							</table>
                        </form>
                    
                </div>
                </div> 
            </center>
        </div>
    </div>
    <div class="col-sm-1"></div>
</body>
</html>