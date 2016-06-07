<!-- Navbar principale -->
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<!-- bouton du collapse pour site réduit -->
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"></button>
			<!-- logo de la navbar -->
			<a class="navbar-brand" href="index.php">
				<img src="./images/gsbLogo.png">
			</a>
		</div>
		
		<!-- code pour ranger les menus en site réduit -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<!-- items de la navbar à partir de la gauche -->
			<ul class="nav navbar-nav navbar-left">
				<!-- code temporaire -->
				<!-- <li><a href="formAjoutUtilisateur.php">Formulaire d'ajout</a></li>
				<li><a href="SelectMedic.php">Affichage médicaments</a></li>
				<li><a href="ConsultationProbleme.php">Afficher les problèmes</a></li>
				<li><a href="formPbMedicaux.php">Ajouter un problème</a></li>
				<li><a href="ConsultationUtilisateur.php">Afficher les utilisateurs</a></li> -->
				<?php
				if (isset($_SESSION["idRole"])) {
					$req = $bdd->query('SELECT * FROM rolefonction JOIN fonctionnalites ON fonctionnalites.id = rolefonction.idFonctionnalite WHERE idRole = "'.$_SESSION['idRole'].'" ');
					while($ligne = $req->fetch()) {
						echo "<li><a href='".$ligne["nomFichier"].".php'>".$ligne["intitule"]."</a></li>";
					}
				}
				?>
				<!-- à compléter dynamiquement -->
			</ul>
			<!-- items de la navbar à partir de la droite -->
			<ul class="nav navbar-nav navbar-right">
				<!-- bouton pour se connecter -->
				<li>
					<?php
					if (isset($_SESSION['role'])) {
						echo $_SESSION["role"]."/".$_SESSION["idRole"]."<a title='Déconnexion' href='connexion.php'>Connecté en tant que : ".$_SESSION['prenom']." ".$_SESSION['nom']."</a>"; 
					}
					else
					{
						?>
						<a href="connexion.php">Se connecter</a>
						<?php
					}
					?>
				</li>
				<!-- bouton pour s'inscrire -->
				<!-- <li><a href="#">S'inscrire</a></li> -->
			</ul>
		</div>
	</div>
</nav>