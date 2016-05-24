<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>jQuery UI Datepicker - Default functionality</title>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<!--<link rel="stylesheet" href="css/calendrier.css" type="text/css" />-->
<script type="text/javascript" src="js/jquery-2.1.3.js"></script> 
<script type="text/javascript" src="js/jquery-ui.js"></script>
	<script>
		$(function() {
			$( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
		});
	</script>
	<?php include("includes/AccesBDD.php"); ?>
</head>
<body>
	<?php
		if(count($_POST)>0)
		{
			try
			{
				$req = $bdd->prepare('INSERT INTO probleme(date, commentaire,idMaladie,idMedicament,idPatient,idProfessionnelDeSante) VALUES(:date, :commentaire,  :idMaladie, :idMedicament, :idPatient, :idProfessionnelDeSante) ');
				$req->execute(array(
					'date' => $_POST['datepicker'],
					'commentaire' => $_POST['commentaire'],
					'idMaladie' => $_POST['maladie'],
					'idMedicament' => $_POST['medicament'],
					'idPatient' => '1',
					'idProfessionnelDeSante' =>  '1'
				));
				
				echo 'Le problème a bien éte ajouté.';
			}
			catch (Exception $e)
			{
				die('Erreur : ' . $e->getMessage());
			}
		}
    ?>
	<h3>Saisie des problemes</h3>
	<br><br>
	<form action="" method="POST">
		<fieldset>
			<legend><span class="saisieprob"><b>Saisie des probleme</b></span></legend>
			<p>Veuillez nous préciser la date de la survenue du problemes :<input type="text" name="datepicker" id="datepicker"></p>
			<br>Entrer un commentaire <br>
			<textarea id="commentaire" name="commentaire" cols="40" rows="5" /></textarea>
			<br>
			Veuillez nous préciser votre maladie :
			<select name="maladie" id="maladie">
				<option selected="selected"></option>
				<?php
					$result=$bdd->query('select * from maladie');
					while($ligne = $result->fetch())
					{	
						echo "<option value=".$ligne['id']." selected='selected' >".$ligne['libelle']."</option>";
					}
				?>
	
			</select>
			<br></br>Veuillez nous préciser vos médicaments :
			<select name="medicament" id="medicament">
				<option selected="selected"></option>
				
				<?php
					$result=$bdd->query('select * from medicament');
					while($ligne = $result->fetch())
					{	
						echo "<option value=".$ligne['id']." selected='selected' >".$ligne['libelle']."</option>";
					}
				?>
	
			</select>
			<br><br>Merci de vos renseignements.
		</fieldset>
		<br><br><br><input type="submit" name="nom" value="Valider" >
	</form>
	
</body>
</html>