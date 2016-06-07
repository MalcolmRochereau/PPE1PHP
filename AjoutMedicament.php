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
	<script type="text/javascript" src="js/jquery-2.1.3.js"></script> 
	<script type="text/javascript" src="js/jquery-ui.js"></script>
	<script>
		$(function() {
			$( "#dateRetrait" ).datepicker();
		});
	</script>
	<script>
		$(function() {
			$( "#dateAutorisation" ).datepicker();
		});
	</script>
</head>
<body>
    <?php 
    include("includes/accesBDD.php");
    include("includes/navbar.php");
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
                    <h2>Ajout d'un medicament<br><br></h2>
                        <form id="afficherMedic" action="aaaaaaaaaaaaaaaaaaaaaaaaaa.php" method="POST">
                            
							<table>
							<tr>
									<td>
										Numéro de médicament: 
									</td>
									<td>
										<input type="text" name="num" id="num"/>
									</td>
								</tr>
								<tr>
									<td>
										Médicament : 
									</td>
									<td>
										<input type="text" name="libelle" id="libelle"/>
									</td>
									<td>
										Date de retrait : 
									</td>
									<td>
										<input type="text" name="dateRetrait" id="dateRetrait">
									</td>
								</tr>
								<tr>
									<td>
										Numéro d'autorisation :
									</td>
									<td>
										<input type="text" name="numAutorisation" id="numAutorisation"/>
									</td>
								
									<td>
										Date d'autorisation : 
									</td>
									<td>
										<input type="text" name="dateAutorisation" id="dateAutorisation">
									</td>
								</tr>
								<tr>
									<td>
										Indication de prescription :
									</td>
									<td>
										<input type="text" name="indicationPrescription" id="indicationPrescription"/>
									</td>
									<td>
										Service de rédaction :
									</td>
									<td>
										<select name="serviceRedac" id="serviceRedac">
										<option selected="selected"></option>
										<?php
											$result=$bdd->query('SELECT id, nom FROM utilisateur WHERE idProfil = 6');
											while($ligne = $result->fetch())
											{	
												echo "<option value=".$ligne['id']." selected='selected' >".$ligne['nom']."</option>";
											}
										?>
										</select>
									</td>
								</tr>
								<tr>
									<td>
										Forme pharmaceutique :
									</td>
									<td>
										<select name="serviceRedac" id="serviceRedac">
										<option selected="selected"></option>
										<?php
											$result=$bdd->query('SELECT id,libelle FROM formepharmaceutique');
											while($ligne = $result->fetch())
											{	
												echo "<option value=".$ligne['id']." selected='selected' >".$ligne['libelle']."</option>";
											}
										?>
										</select>
									</td>
									<td>
										Raison de retrait :
									</td>
									<td>
										<select name="serviceRedac" id="serviceRedac">
										<option selected="selected"></option>
										<?php
											$result=$bdd->query('SELECT id,libelle FROM raisonretrait');
											while($ligne = $result->fetch())
											{	
												echo "<option value=".$ligne['id']." selected='selected' >".$ligne['libelle']."</option>";
											}
										?>
										</select>
									</td>
								</tr>
								

								<tr>
									<td >
										<input type ="submit" name="valider" id="valider" value= "Ajouter"/>
									</td>
									<td></td>
								</tr> 
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