<?php
$user = 'root';
$pass = 'oumaima';
$dsn = 'mysql:host=127.0.0.1;dbname=speakenglish';
try {
$dbh = new PDO($dsn, $user, $pass);

}
catch (PDOException $e) {
print "Erreur ! : " . $e->getMessage() ."<br/>";
die();
}
?>