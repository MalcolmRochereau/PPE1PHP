<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" >
        <link rel="stylesheet" href="css\bootstrap.css" >
        <link rel="stylesheet" href="css\style.css" >
        <title>Formulaire</title>
        <script src="js\jquery.js"></script>
        <script src="js\bootstrap.js"></script>
    </head>
    <body>
        <?php include("includes/navbar.php");
        include("includes/accesBDD.php"); ?>
        <center>
        	<div class="col-sm-1"></div>
        	<div class="col-sm-10">
                <div class="milieu">
                    <h2>Affichage des problèmes liés au médicament <br><br>
                        <form id="afficherMedic" action="afficherMedic.php" method="POST">
                            <select name="medic" id="medic">
								<?php 
									$reponse = $bdd->query('SELECT * FROM medicament');
									while($row = $reponse->fetch())
									{
										echo '<option value='.$row['CIP'].'>'.$row['denomination'].'</option>';
									}
									$reponse->closeCursor();
								?>

                            	
                            </select>
                            <input type="submit" name="validation" value="Afficher">
                        </form>
                    </h2>
                </div>
            </div>
        </center>
    </body>
</html>
