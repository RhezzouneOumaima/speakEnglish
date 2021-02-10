 
<?php
 session_start();
 $bdd = new PDO('mysql:host=127.0.0.1;dbname=speakenglish', 'root', 'oumaima');
	 
	if(isset($_GET['id']) AND $_GET['id'] > 0) {
	   $getid = intval($_GET['id']);
	   $requser = $bdd->prepare('SELECT * FROM user WHERE idUser = ?');
	   $requser->execute(array($getid));
	   $userinfo = $requser->fetch();
$link = mysqli_connect("localhost", "root", "oumaima", "speakenglish");

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if(isset($_POST['modifier'])) {
$pass = $_POST['pass'];
$id = $userinfo['idUser'];

$sql = "UPDATE user SET password = '$pass' WHERE idUser='$id' ";
if(mysqli_query($link, $sql)){
	$erreur =  "Mot de passe a bien change!";
} else {
    $erreur = "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}}
 
// Close connection
mysqli_close($link);
?>
  
 
	 
 

<!DOCTYPE html>
<html>
<head>
	<title>Modifier votre mot de passe</title>
    <style>

          
*{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
	font-family: 'Quicksand', sans-serif;
}

body{
	height: 100vh;
	width: 100%;
}

.container{
	position: relative;
	width: 100%;
	height: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
	padding: 20px 100px;
}

.container:after{
	content: '';
	position: absolute;
	width: 100%;
	height: 100%;
	left: 0;
	top: 0;
	background: url("modifPass.jpg") no-repeat center;
	background-size: cover;
	filter: blur(50px);
	z-index: -1;
}
.contact-box{
	max-width: 850px;
	display: grid;
	grid-template-columns: repeat(2, 1fr);
	justify-content: center;
	align-items: center;
	text-align: center;
	background-color: #fff;
	box-shadow: 0px 0px 19px 5px rgba(0,0,0,0.19);
}

.left{
	background: url("img/bg.jpg") no-repeat center;
	background-size: cover;
	height: 100%;
}

.right{
	padding: 25px 40px;
}

h2{
	position: relative;
	padding: 0 0 10px;
	margin-bottom: 10px;
}

h2:after{
	content: '';
    position: absolute;
    left: 50%;
    bottom: 0;
    transform: translateX(-50%);
    height: 4px;
    width: 50px;
    border-radius: 2px;
    background-color: #d42626;
}

.field{
	width: 100%;
	border: 2px solid rgba(0, 0, 0, 0);
	outline: none;
	background-color: rgba(230, 230, 230, 0.6);
	padding: 0.5rem 1rem;
	font-size: 1.1rem;
	margin-bottom: 22px;
	transition: .3s;
}

.field:hover{
	background-color: rgba(0, 0, 0, 0.1);
}



.btn{
	width: 100%;
	padding: 0.5rem 1rem;
	background-color: #d42626;
	color: #fff;
	font-size: 1.1rem;
	border: none;
	outline: none;
	cursor: pointer;
	transition: .3s;
}

.btn:hover{
    background-color: #ffa6a6;
}

.field:focus{
    border: 2px solid rgba(30,85,250,0.47);
    background-color: #fff;
}

@media screen and (max-width: 880px){
	.contact-box{
		grid-template-columns: 1fr;
	}
	.left{
		height: 200px;
	}
}

    </style>
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
</head>
<body>
 
	<div class="container">  
		<div class="contact-box">
			<div class="left">
                <img src="modifPass.jpg" style="width:400px;">
            </div>
			<div class="right">
			<form action=" " method="POST">

				<h2>Modifier mot de passe</h2>
				<center> <?php
	         if(isset($erreur)) {
	            echo '<font color="green">'.$erreur."</font>";
	         }
	         ?></center><br>
			
                <input type="password" class="field" name="pass" placeholder="Mot de passe">
                <input type="password" class="field"  placeholder="Comfirmer mot de passe">            
				<input type="submit" class="btn"  name="modifier" style="text-align:center" value="Modifier">
 

			</div>
		</div></form>
	</div>
</body>
</html>
<?php   
	}
	?>