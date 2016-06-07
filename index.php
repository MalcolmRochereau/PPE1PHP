<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" >
		<link rel="stylesheet" href="css\bootstrap.css" >
		<link rel="stylesheet" href="css\style.css" >
		<title>Galaxy Swiss Bourdin (GSB)</title>
		<script src="js\jquery.js"></script>
		<script src="js\bootstrap.js"></script>
	</head>

	<body>
		<?php
			include("includes/accesBDD.php");
			// Appel de la navbar
			include("includes/navbar.php");
		?>
		<?php
			// Appel du carousel
			include("includes/carousel.php");
		?>
			
		<div class="principal">
			<?php
				// Appel du milieu
				include("includes/milieu.php");
			?>
		</div>
	</body>
</html>