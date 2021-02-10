<?php
include "connexion.php";

if(isset($_GET["id"]))
{$req="DELETE FROM quiz WHERE idQuiz='".$_GET['id']."'";
    $sth = $dbh->query($req);
include_once ("quiz.php");
}



?>