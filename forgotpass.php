<?php
include ("conex.php");
if(isset($_POST['em'])){
	
//Récuperer email depuis variable $_POST
$mail = $_POST["mail"];if(!empty($mail)){
//Verification existance de l'email sur la base de données
$sql =("SELECT userEmail from user WHERE userEmail ='".$mail."' limit 1");
 $query=mysqli_query($con,$sql);
 $sqlmdp="SELECT password from user WHERE userEmail ='".$mail."' limit 1";
 $query2=mysqli_query($con,$sqlmdp);

//Si le mail existe
if(mysqli_num_rows($query)==1){
while($data=mysqli_fetch_array($query2)){
$header="MIME-Version: 1.0\r\n";
$header.='From:"PrimFX.com"<support@primfx.com>'."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';

$message='
<html>
	<body>
		<div align="center">
			<br /> votre mot de passe est '.$data['password'].'
			<a href="">connexion ici</a>
			
			<br />
		</div>
	</body>
</html>
';

mail($mail, "Salut tout le monde !", $message, $header);
// ini_set();
echo "<div style='color:green;background:rgb(217, 255, 179);' class='alert alert-danger'>
  un email a ete envoye
</div>";
}}else{ //Sinon
 echo "<div class='alert alert-danger'>
  ce utilisateur n'existe pas
</div>";

}}
else{
	echo "<div class='alert alert-danger'>
  entrez svp votre email
</div>";
	
}


 }
 
?>

<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style>
*{
  margin: 0;
  padding: 0;
  outline: none;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  height: 100vh;
  width: 100%;
  background: linear-gradient(115deg, #ffa6a6 10%, #d42626 90%);
}

.show-btn, .container{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}


.container .text{
  font-size: 35px;
  font-weight: 600;
  text-align: center;
}
.container form{
  margin-top: -20px;
}
.container form .data{
  height: 45px;
  width: 100%;
  margin: 40px 0;
}
form .data label{
  font-size: 18px;
}
form .data input{
  height: 100%;
  width: 100%;
  padding-left: 10px;
  font-size: 17px;
  border: 1px solid silver;
}


form .btn{
  margin: 30px 0;
  height: 45px;
  width: 100%;
  position: relative;
  overflow: hidden;
}
form .btn .inner{
  height: 100%;
  width: 300%;
  position: absolute;
  left: -100%;
  z-index: -1;
  background: -webkit-linear-gradient(right, #ffa6a6, #d42626, #ffa6a6, #d42626);
  transition: all 0.4s;
}
form .btn:hover .inner{
  left: 0;
}
form .btn button{
  height: 100%;
  width: 100%;
  background: none;
  border: none;
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 1px;
  cursor: pointer;
}


    </style>
  </head>
  <body>
    <div class="center">
      <div class="container">
        <div class="text">
Mot de Passe oublié</div>
<form action="#" method="POST">
          <div class="data">
            <label>Email</label>
            <input type="email" name="mail" required>
          </div>

<div class="btn">
            <div class="inner">
</div>
<button type="submit" name="em">Envoyer</button>
          </div>
<div class="signup-link">
Votre mot de passe sera envoyé sur votre boite email</div>
</form>
</div>
</div>
</body>
</html>
