<?php 
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=espace_membre', 'root', '');

if(isset($_POST['formconnexion']))
{
    $mailconnect = htmlspecialchars($_POST['mailconnect']);
    $mdpconnect = sha1($_POST['mdpconnect']);
    if(!empty($mailconnect) AND !empty($mdpconnect))
    {
        $requser = $bdd->prepare("SELECT * FROM membres WHERE mail = ? AND motdepasse = ?");
        $requser->execute(array($mailconnect, $mdpconnect));
        $userexist = $requser->rowCount();
        if($userexist == 1)
        {
           $userinfo = $requser->fetch();
           $_SESSION['id'] = $userinfo['id'];
           $_SESSION['pseudo'] = $userinfo['pseudo'];
           $_SESSION['mail'] = $userinfo['mail'];
           header("Location: profil.php?id=".$_SESSION['id']);
        }
        else
        {
            $erreur = "Mauvais mail ou mot de passe !";
        }
    }
    else
    {
        $erreur = "Tous les champs doivent être complétés !";
    }
}

?>
<!DOCTYPE html>
<html>
 <!-- head -->
  <head>
    <meta charset="utf-8"/>
    <title>Connexion</title>

    <!-- css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="../css/stylee.css">
    <link rel="stylesheet" href="../css/login.css">
    <!-- css -->

   <!-- font -->
   <link href="https://fonts.googleapis.com/css?family=Alatsi&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Montserrat:700i&display=swap" rel="stylesheet">
   <script src="https://kit.fontawesome.com/6282f3433c.js" crossorigin="anonymous"></script>
   <!-- font -->



  </head>
 <body>

<div class="sidenav">
         <div class="login-main-text">
            <h2>Sublime Life<br> Page de connexion</h2>
            <p>Connecter vous ou inscrivez vous pour avoir accès a la whitelist.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form method="POST" action="connexion.php">

                <!--PHP-->
                <?php
                  if(isset($erreur)){
                     echo "
                     <div class='alert alert-secondary' role='alert'>
                     $erreur
                   </div>";
                  }
               ?>
               <!--PHP-->

                  <div class="form-group">
                     <label>Mail</label>
                     <input type="email" class="form-control" placeholder="Entrez votre email" name="mailconnect">
                  </div>
                  <div class="form-group">
                     <label>Mot de passe</label>
                     <input type="password" class="form-control" placeholder="Mot de passe" name="mdpconnect">
                  </div>
                  <button type="submit" class="btn btn-black" name="formconnexion">Se connecter</button>
                  <a href="inscription.php" class="btn btn-secondary">Se crée un compte</a>
                  <a href="../sysadmin/connex_admin.php" class="btn btn-black">Connexion admin</a>
               </form>
            </div>
         </div>
      </div>
</div>
</div>


<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
 </body>
 <!-- body -->
</html>



