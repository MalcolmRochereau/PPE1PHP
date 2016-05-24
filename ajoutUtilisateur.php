<?php
include("includes/accesBDD.php");

try
{
	$req = $bdd->prepare('INSERT INTO utilisateur(nom, prenom, tel, mail, identifiant, mdp) VALUES(:nom, :prenom, :tel, :mail, :id, :mdp)');
	$req->execute(array(
		'nom' => $_POST['nom'],
		'prenom' => $_POST['prenom'],
		'tel' => $_POST['tel'],
		'mail' => $_POST['mail'],
		'id' => $_POST['id'],
		'mdp' => $_POST['mdp'],
		// 'rue' => $_POST['rue'],
		// 'ville' => $_POST['ville'],
		// 'cp' => $_POST['cp'],
		// 'categ' => $_POST['categ']
	));

	echo 'L\'utilisateur a bien ete ajoute.';
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>