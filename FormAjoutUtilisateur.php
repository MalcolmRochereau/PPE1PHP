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
                <div class="titreForm">Ajout de visiteur</div>
                <img src="images/fondTitre.png" alt="" class="imageTitre">
                <div class="row">
                    <div class="col-sm-1"></div>
                    <div class="col-sm-10">
                        <br>
                        <br><br><br>
                        <?php 
                        if(count($_POST)>0)
                        {
                            try
                            {
                                if($_SESSION['role'] == "visiteur")
                                {
                                    $req = $bdd->prepare('INSERT INTO visiteur(matricule, nom, prenom, numeroTel, mail, identifiant, mdp, idRole) VALUES(:id, :nom, :prenom, :tel, :mail, :ident, :mdp, :idRole)');
                                    $req->execute(array(
                                        'id' => '',
                                        'nom' => $_POST['nom'],
                                        'prenom' => $_POST['prenom'],
                                        'tel' => $_POST['tel'],
                                        'mail' => $_POST['mail'],
                                        'ident' => $_POST['ident'],
                                        'mdp' => $_POST['mdp'],
                                        'idRole' => $_SESSION['idRole']
                                        ));
                                }
                                else
                                {
                                    $req = $bdd->prepare('INSERT INTO professionnel_sante(matricule, nom, prenom, numeroTel, mail, identifiant, mdp, idRole, rueCabinet, cpCabinet, villeCabinet, matriculeVisiteur, idCategorie) VALUES(:id, :nom, :prenom, :tel, :mail, :ident, :mdp, :idRole, :rue, :cp, :ville, :visiteur, :categ)');
                                    $req->execute(array(
                                        'id' => '',
                                        'nom' => $_POST['nom'],
                                        'prenom' => $_POST['prenom'],
                                        'tel' => $_POST['tel'],
                                        'mail' => $_POST['mail'],
                                        'ident' => $_POST['ident'],
                                        'mdp' => $_POST['mdp'],
                                        'idRole' => $_SESSION['idRole'],
                                        'rue' => $_SESSION['idRole'],
                                        'cp' => $_SESSION['idRole'],
                                        'ville' => $_SESSION['idRole'],
                                        'visiteur' => $_SESSION['idRole'],
                                        'categ' => $_SESSION['idRole']
                                        ));
                                }
                                echo 'L\'utilisateur a bien ete ajoute.';
                            }
                            catch (Exception $e)
                            {
                                die('Erreur : ' . $e->getMessage());
                            }
                        }
                        ?>
                        <form id="ajoutUtilisateur" action="" method="POST">

                            <div class="input-group input-group-lg" id="groupe-nom">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                <input type="text" class="form-control" name="nom" id="nom" onblur="verifTexte('nom')" placeholder="Nom..." aria-describedby="basic-addon1 onblur="" ">
                            </div><br><br>
                            <div class="input-group input-group-lg" id="groupe-prenom">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                <input type="text" class="form-control" name="prenom" id="prenom" onblur="verifTexte('prenom')" placeholder="Prenom..." aria-describedby="basic-addon1">
                            </div><br><br>
                            <div class="input-group input-group-lg" id="groupe-tel">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
                                <input type="text" class="form-control" name="tel" id="tel" onblur="estEntier('tel')" placeholder="Numéro de téléphone..." aria-describedby="basic-addon1">
                            </div><br><br>
                            <div class="input-group input-group-lg" id="groupe-mail">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                <input type="text" class="form-control" name="mail" id="mail" onblur="verifMail('mail')" placeholder="Adresse e-mail..." aria-describedby="basic-addon1 onblur="trim()" ">
                            </div><br><br>
                            <div class="input-group input-group-lg" id="groupe-ident">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                <input type="text" class="form-control" name="ident" id="ident" onblur="verifTexte('ident')" placeholder="Identifiant" aria-describedby="basic-addon1">
                            </div><br><br>
                            <div class="input-group input-group-lg" id="groupe-mdp">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                <input type="password" class="form-control" name="mdp" id="mdp" onblur="verifTexte('mdp')" placeholder="Mot de passe..." aria-describedby="basic-addon1">
                            </div><br>
                            <?php
                                    // session_start();
                            if ($_SESSION['role'] == "visiteur")
                            {
                                ?>
                                <div class="input-group input-group-lg" id="groupe-rue">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                    <input type="text" class="form-control" name="rue" id="rue" onblur="verifTexte('rue')" placeholder="Rue du cabinet..." aria-describedby="basic-addon1 onblur="" ">
                                </div><br><br>
                                <div class="input-group input-group-lg" id="groupe-cp">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                    <input type="text" class="form-control" name="cp" id="cp" onblur="verifTexte('cp')" placeholder="Code postal du cabinet..." aria-describedby="basic-addon1 onblur="" ">
                                </div><br><br>
                                <div class="input-group input-group-lg" id="groupe-nom">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                    <input type="text" class="form-control" name="nom" id="nom" onblur="verifTexte('nom')" placeholder="Nom..." aria-describedby="basic-addon1 onblur="" ">
                                </div><br><br>
                                <div class="input-group input-group-lg" id="groupe-nom">
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                    <input type="text" class="form-control" name="nom" id="nom" onblur="verifTexte('nom')" placeholder="Nom..." aria-describedby="basic-addon1 onblur="" ">
                                </div><br><br>
                                <?php
                            }
                            ?>
                            <input type="submit" onclick="verifInfos()" name="validation" value="Inscrire">
                        </form>
                    </div>
                </div> 
            </center>
        </div>
    </div>
    <div class="col-sm-1"></div>
</body>
</html>