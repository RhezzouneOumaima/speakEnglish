<?php
$user = 'root';
$pass = 'oumaima';
$dsn = 'speakenglish';
try {
$con=mysqli_connect("localhost",$user,$pass);
mysqli_select_db($con,$dsn);
}
catch (exception $e) {
print "Erreur ! : " . $e->getMessage() ."<br/>";
die();
}
?>