<?php
include "connexion.php";
if(isset($_POST['ajout'])){
$n = isset($_POST['nom']) ? $_POST['nom'] : NULL;
$p = isset($_POST['prenom']) ? $_POST['prenom'] : NULL;
$e = isset($_POST['email']) ? $_POST['email'] : NULL;
$ps = isset($_POST['pass']) ? $_POST['pass'] : NULL;
$d = isset($_POST['date']) ? $_POST['date'] : NULL;
$s = isset($_POST['sexe']) ? $_POST['sexe'] : NULL;
$req="INSERT INTO `user`(`nom`, `prenom`, `dateNaiss`, `sexe`,`userEmail`, `password`) VALUES ('".$n."','".$p."','".$d."','".$s."','".$e."','".$ps."')";
$sth = $dbh->query($req);
include "admin_user.php";}

?>