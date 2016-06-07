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
</head>
<body>
    <?php 
    include("includes/accesBDD.php");
    include("includes/navbar.php");
    $sessiontempo = 0;
    ?>
    <div class="col-sm-1"></div>
    <div class="col-sm-10" style="min-height: 100%;">
        <div class="milieu">
            <center>
                <div class="titreForm">Médicaments</div>
                <img src="images/fondTitre.png" alt="" class="imageTitre">
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                        <h2>Affichage des problèmes liés au médicament <br><br>
                            <form id="afficherMedic" action="afficherMedic.php" method="POST">
                                <div class="input-group input-group-lg" id="groupe-medic">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-heart-empty"></span></span>
                                    <select name="medic" id="medic" class="form-control" onChange="document.getElementById('afficherMedic').submit()">
                                        <option value=""></option>
                                        <?php 
                                        $reponse = $bdd->query('SELECT * FROM medicament');
                                        while($row = $reponse->fetch())
                                        {
                                          echo '<option value='.$row['CIP'].'>'.$row['denomination'].'</option>';
                                      }
                                      $reponse->closeCursor();
                                      ?>
                                  </select>
                              </div>
                          </form>
                      </h2>
                  </div>
              </div> 
          </center>
      </div>
  </div>
  <div class="col-sm-1"></div>
</body>
</html>