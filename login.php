<?php
	session_start();
	 
	$bdd = new PDO('mysql:host=127.0.0.1;dbname=speakenglish', 'root', 'oumaima');
	 
	if(isset($_POST['cnxass'])) {
	   $mailconnect = $_POST['emailass'];
	   $mdpconnect = $_POST['mdpass'];
	   if(!empty($mailconnect) AND !empty($mdpconnect)) {
	      $requser = $bdd->prepare("SELECT * FROM user WHERE userEmail = ? AND password = ?");
	      $requser->execute(array($mailconnect, $mdpconnect));
	      $userexist = $requser->rowCount();
	      if($userexist == 1) {
	         $userinfo = $requser->fetch();
	         $_SESSION['idUser'] = $userinfo['idUser'];
	         $_SESSION['nom'] = $userinfo['nom'];
           $_SESSION['prenom'] = $userinfo['prenom'];
           $_SESSION['password'] = $userinfo['password'];
           $_SESSION['userEmail'] = $userinfo['userEmail'];
           $_SESSION['dateNaiss'] = $userinfo['dateNaiss'];
           $_SESSION['sexe'] = $userinfo['sexe'];


	         header("Location: user/userprofileMenu.php?id=".$_SESSION['idUser']);
	      } else {
	         $erreur = "Mauvais mail ou mot de passe !";
	      }
	   } else {
	      $erreur = "Tous les champs doivent être complétés !";
	   }
	}else if(isset($_POST['connexionAdmin'])) {  
     $mailconnect = $_POST['emailAd'];
     $mdpconnect = $_POST['passwordAd'];
     if(!empty($mailconnect) AND !empty($mdpconnect)) {
        $requser = $bdd->prepare("SELECT * FROM admin WHERE adminEmail = ? AND passwordAd = ?");
        $requser->execute(array($mailconnect, $mdpconnect));
        $userexist = $requser->rowCount();
        if($userexist == 1) {
           $userinfo = $requser->fetch();
           header("Location: /speakEnglish/admin/adminprofileMenu.php");
        } else {
           $erreur = "Mauvais mail ou mot de passe !";
        }
     } else {
        $erreur = "Tous les champs doivent être complétés !";
     }
  }
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>S'authentifier</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
</head>
<body>
  <div class="cont">
    <div class="form sign-in">
      <form action=" " method="POST">
      <h2>Utilisateur</h2>
     <center> <?php
	         if(isset($erreur)) {
	            echo '<font color="red">'.$erreur."</font>";
	         }
	         ?></center>
      <label>
        <span>Email</span>
        <input type="text" name="emailass">
      </label>
      <label>
        <span>Mot de passe</span>
        <input type="password" name="mdpass">
      </label>
      <input class="submit" style="margin: 100px;" type="submit" name="cnxass" value="Se connecter">
     <!--  <a href="forgotpass.php" class="forgot">Mot de passe oublié ?</a> -->

    </form>
   
    </div>

    <div class="sub-cont">
      <div class="img" style="background-image: url('http://localhost/speakEnglish/login.jpg');">
        <div class="img-text m-up">
          <h2>Vous etes un administrateur?</h2>
          <p>Cliquez içi pour consulter votre platforme!</p>
        </div>
        <div class="img-text m-in">
          <h2>Vous etes un utilisateur?</h2>
          <p>Cliquez içi pour consulter votre compte!</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Admin</span>
          <span class="m-in">User</span>
        </div>
      </div>
      <div class="form sign-up">
        <form action="#" method="POST">
        <h2>Administrateur</h2>
        <label>
          <span>Email</span>
        <input type="text" name="emailAd">
        </label>
        <label>
          <span>Mot de passe</span>
        <input type="password" name="passwordAd">
        </label>
        <input class="submit" style="margin: 100px;" name="connexionAdmin" type="submit" value="Se connecter">
       <!--  <a href="forgotpass.php" class="forgot">Mot de passe oublié ?</a>  -->     </form>
      </div>
    </div>
  </div>
<script type="text/javascript" src="js/script.js"></script>
</body>
</html>