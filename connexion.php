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
</head>
<body>
    <?php 
    include("includes/navbar.php");
    include("includes/accesBDD.php");
    ?>
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
        <div class="milieu">
            <center>
                <div class="titreForm">Connexion</div>
                <img src="images/fondTitre.png" alt="" class="imageTitre">
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10"><h2>
                        <?php
                        if (!isset($_POST['pseudo'])) //On est dans la page de formulaire
                        {
                            ?>
                            <form method="post" action="connexion.php">
                                <fieldset>
                                    Connexion
                                    <p>
                                       <label for="pseudo">Pseudo :</label><input name="pseudo" type="text" id="pseudo" /><br />
                                       <label for="password">Mot de Passe :</label><input type="password" name="password" id="password" />
                                   </p>
                               </fieldset>
                               <p><input type="submit" value="Connexion" /></p>
                           </form>
                           <a onclick="alert('Dommage !')">Pas encore inscrit ?</a>
                           <?php
                       }
                       else
                       {
                            $req = $bdd->query('SELECT * FROM v_utilisateurs WHERE identifiant = "'.$_POST['pseudo'].'"');
                            $ligne = $req->fetch();
                            if(sha1($_POST['password'] == $ligne['mdp']))
                            {
                                $_SESSION['idRole'] = $ligne['idRole'];
                                $_SESSION['role'] = $ligne['role'];
                                $_SESSION['id'] = $ligne['id'];
                                header('Location: index.php');
                                exit();
                            }
                       }
                       ?>
                   </h2></div>
               </div> 
           </center>
       </div>
   </div>
   <div class="col-sm-1"></div>
</body>
</html>