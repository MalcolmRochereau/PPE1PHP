<?php
	// essayer
	try
	{
		// création et stockage de la connexion à la base de données : host=|HÔTE| - dbname=|NOM DE LA BDD| - charset=|CARACTERES| - |IDENTIFIANT| - |MDP|
		$bdd = new PDO('mysql:host=10.1.3.4;dbname=problemesmedicaux;charset=utf8', 'root', '');
		// Activation des erreurs PDO
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	// Si il y a une exception
	catch (Exception $e)
	{
	    // retourner le messsage d'erreur
	    die('Erreur : ' . $e->getMessage());
	}
	setlocale (LC_TIME, 'fr_FR.utf8','fra');
?>