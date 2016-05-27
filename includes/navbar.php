<!-- Navbar invisible pour éviter que le site passe sous la navbar principale -->
<nav class="navbar"></nav>

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
				<li><a href="formAjoutUtilisateur.php">Formulaire d'ajout</a></li>
				<li><a href="SelectMedic.php">Affichage médicaments</a></li>
				<li><a href="ConsultationProbleme.php">Afficher les problèmes</a></li>
				<li><a href="formPbMedicaux.php">Ajouter un problème</a></li>
				<li><a href="ConsultationMedicament.php">Afficher les médicaments</a></li>
				<li><a href="ConsultationUtilisateur.php">Afficher les utilisateurs</a></li>
				<!-- à compléter dynamiquement -->
			</ul>
			<!-- items de la navbar à partir de la droite -->
			<ul class="nav navbar-nav navbar-right">
				<li><?php $_SESSION['role']; ?></li>
				<!-- bouton pour se connecter -->
				<li><a href="connexion.php">Se connecter</a></li>
				<!-- bouton pour s'inscrire -->
				<!-- <li><a href="#">S'inscrire</a></li> -->
			</ul>
		</div>
	</div>
</nav>