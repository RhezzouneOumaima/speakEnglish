<?php
include "connexion.php";

if(isset($_GET["id"]))
{$req="DELETE FROM videoup WHERE id='".$_GET['id']."'";
    $sth = $dbh->query($req);
include_once ("admin_lecon.php");
}



?>