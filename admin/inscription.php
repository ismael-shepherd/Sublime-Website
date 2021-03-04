<?php 

$bdd = new PDO('mysql:host=localhost;dbname=espace_membre', 'root', '');

if(isset($_POST['forminscription']))
{
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $mail = htmlspecialchars($_POST['mail']);
    $mail2 = htmlspecialchars($_POST['mail2']);
    $mdp = sha1($_POST['mdp']);
    $mdp2 = sha1($_POST['mdp2']);
  if (!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2']))
  {
    $pseudolength = strlen($pseudo);
    if($pseudolength <= 255)
    {
     if(filter_var($mail, FILTER_VALIDATE_EMAIL))
     {
      if($mail == $mail2)
      {
        $reqmail = $bdd->prepare("SELECT * FROM membres WHERE mail = ?");
        $reqmail->execute(array($mail));
        $mailexist = $reqmail->rowCount();
        if($mailexist == 0)
        {
         if($mdp == $mdp2)
         {
            $insertmbr = $bdd->prepare("INSERT INTO membres(pseudo, mail, motdepasse) VALUES(?, ?, ?)");
            $insertmbr->execute(array($pseudo, $mail, $mdp));
            $erreur = "Votre compte a bien été crée <a href=\"connexion.php\">Me connecter</a>";
         }
         else
         {
           $erreur = "Vos mots de passe ne correspondent pas !";
         }
        }
        else 
        {
          $erreur = "Adresse mail deja uilisée !";
        }
       }
       else
        {
          $erreur = "Vos adresses mail ne correspondent pas !";
        }
      }
      else
      {
        $erreur = "Votre adresse mail n'est pas valide !";
      }
    }
    else
     {
       $erreur = "Votre pseudo ne doit pas dépasser 255 caractères !";
     }
  }
  else
  {
    $erreur = "Tout les champs doivent etre complétés !";
  }
}

$text = "hello";

?><!DOCTYPE html>
<html>
 <!-- head -->
  <head>
    <meta charset="utf-8"/>
    <title>Inscription</title>

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
            <h2>Sublime Life<br> Page d'inscription</h2>
            <p>Connecter vous ou inscrivez vous pour avoir accès a la whitelist.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form method="POST" action="inscription.php">

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
                     <label>Pseudo</label>
                     <input type="text" class="form-control" placeholder="Votre pseudo" id="pseudo" name="pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>">
                     <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="form-group">
                     <label>Votre mail</label>
                     <input type="email" class="form-control" placeholder="Votre mail" id="mail" name="mail" value="<?php if(isset($mail)) { echo $mail; } ?>">
                  </div>
                  
                  <div class="form-group">
                     <label>Confirmation de l'adresse mail</label>
                     <input type="email" class="form-control" placeholder="Confirmez votre mail" id="mail2" name="mail2" value="<?php if(isset($mail2)) { echo $mail2; } ?>">
                  </div>

                  <div class="form-group">
                     <label>Votre mot de passe</label>
                     <input type="password" class="form-control" placeholder="Mot de passe" id="mdp" name="mdp" value="<?php if(isset($mdp)) { echo $mdp; } ?>">
                  </div>

                  <div class="form-group">
                     <label>Confirmer le mot de passe</label>
                     <input type="password" class="form-control" placeholder="Mot de passe" id="mdp2" name="mdp2" value="<?php if(isset($mdp2)) { echo $mdp2; } ?>">
                  </div>
                  <input type="submit" class="btn btn-black" name="forminscription" value="S'inscrire"/>
                  <a href="connexion.php" class="btn btn-secondary">Se connecter</a>
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