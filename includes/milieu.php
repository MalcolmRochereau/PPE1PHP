<div class="milieu">
<!-- 	<br> -->
  <!-- découpage en lignes -->
	<div class="row">
    <!-- colonne vide : sm-1 (1 => tablette) -->
		<div class="col-sm-1"></div>
      <!-- colonne : sm-3 (3 => tablette) -->
  	<div class="col-sm-3">
  		<?php 
        // appel de la partie gauche
  			include("gauche.php");
  		?>
  	</div>

    <!-- colonne vide : sm-1 (1 => tablette) -->
  	<div class="col-sm-1"></div>
    <!-- colonne : sm-3 (3 => tablette) -->
  	<div class="col-sm-3">
  		<?php 
        // appel de la partie droite
  			include("droite.php");
  		?>
  	</div>
	</div>
</div>