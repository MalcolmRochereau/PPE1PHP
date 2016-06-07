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
	<script>
		$(function() {
			$( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
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
                <div class="titreForm">Ajout d'un problème médical</div>
                <img src="images/fondTitre.png" alt="" class="imageTitre">
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
	<form id="ajoutProblemes" action="" method="POST">
	<?php
		if(count($_POST)>0)
		{
			try
			{
				$req = $bdd->prepare('INSERT INTO probleme(dateProbleme,idGravite,commentaire,matriculePro,idMaladie,idPatient,idMedicament) VALUES(:dateProbleme,:idGravite, :commentaire, :matriculePro,  :idMaladie, :idPatient, :idMedicament) ');
				$req->execute(array(
					'dateProbleme' => $_POST['datepicker'],
					'commentaire' => $_POST['commentaire'],
					'idMaladie' => $_POST['maladie'],
					'idMedicament' => $_POST['medicament'],
					'idGravite' =>  $_POST['idGravite'],
					'idPatient' => $_POST['patient'],
					'matriculePro' => 'P001',
					
					
				));
				
				echo 'Le problème a bien éte ajouté.';
			}
			catch (Exception $e)
			{
				die('Erreur : ' . $e->getMessage());
			}
		}
    ?>
	
			<p>Veuillez nous préciser la date de la survenue du probleme(yy-mm-dd) :<input type="date" name="datepicker" id="datepicker"></p>
			<br>Entrer un commentaire <br>
			<textarea id="commentaire" name="commentaire" cols="40" rows="5"/></textarea>
			<br>
			Veuillez nous préciser la maladie :
			<select name="maladie" id="maladie">
				<option selected="selected"></option>
				<?php
					$result=$bdd->query('select * from maladie');
					while($ligne = $result->fetch())
					{	
						echo "<option value=".$ligne['id']."  >".$ligne['libelle']."</option>";
					}
				?>
	
			</select>
			
			<br></br>Veuillez nous préciser la gravité du problème :
			<select name="idGravite" id="idGravite">
				<option selected="selected"></option>
				
				<?php
					$result=$bdd->query('select * from gravite_probleme');
					while($ligne = $result->fetch())
					{	
						echo "<option value=".$ligne['id']."  >".$ligne['libelle']."</option>";
					}
				?>
	
			</select>
			
			<br></br>Veuillez nous préciser le médicament :
			<select name="medicament" id="medicament">
				<option selected="selected"></option>
				
				<?php
					$result=$bdd->query('select * from medicament');
					while($ligne = $result->fetch())
					{	
						echo "<option value=".$ligne['CIP']."  >".$ligne['denomination']."</option>";
						
					}
				?>
	
			</select>
			
			<br></br>Veuillez nous préciser le patient :
			<select name="patient" id="patient">
				<option selected="selected"></option>
				
				<?php
					$result=$bdd->query('select * from patient');
					while($ligne = $result->fetch())
					{	
						echo "<option value=".$ligne['id']."  >".$ligne['nom']." ".$ligne['prenom']."</option>";
					}
				?>
	
			</select>
			<br><br>Merci de vos renseignements.
		</fieldset>
		<br><br><br><input type="submit" name="nom" value="Valider" >
	</form>
 </div>
                </div> 
            </center>
        </div>
    </div>
    <div class="col-sm-1"></div>
</body>
</html>