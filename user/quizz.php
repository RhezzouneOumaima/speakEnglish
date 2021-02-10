<?php

	session_start();
	 
	$bdd = new PDO('mysql:host=127.0.0.1;dbname=speakenglish', 'root', 'oumaima');
	 
	if(isset($_GET['id']) AND $_GET['id'] > 0) {
	   $getid = intval($_GET['id']);
	   $requser = $bdd->prepare('SELECT * FROM user WHERE idUser = ?');
	   $requser->execute(array($getid));
	   $userinfo = $requser->fetch();
	?>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Folder Library concept</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  text-decoration: none;
  font-family: 'Josefin Sans', sans-serif;
}

body{
   background-color: #f3f5f9;
}

.wrapper{
  display: flex;
  position: relative;
}

.wrapper .sidebar{
  width: 200px;
  height: 100%;
  background: #ffa6a6;
  padding: 30px 0px;
  position: fixed;
}

.wrapper .sidebar h2{
  color: #fff;
  text-transform: uppercase;
  text-align: center;
  margin-bottom: 30px;
}

.wrapper .sidebar ul li{
  padding: 15px;
  border-bottom: 1px solid #bdb8d7;
  border-bottom: 1px solid rgba(0,0,0,0.05);
  border-top: 1px solid rgba(255,255,255,0.05);
}    

.wrapper .sidebar ul li a{
  color: #d42626;
  display: block;
}

.wrapper .sidebar ul li a .fas{
  width: 25px;
}

.wrapper .sidebar ul li:hover{
  background-color: #ffa6a6;
}
    
.wrapper .sidebar ul li:hover a{
  color: #fff;
}
 
.wrapper .sidebar .social_media{
  position: absolute;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
}

.wrapper .sidebar .social_media a{
  display: block;
  width: 40px;
  background: #d42626;
  height: 40px;
  line-height: 45px;
  text-align: center;
  margin: 0 5px;
  color: #bdb8d7;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
}

.wrapper .main_content{
  width: 100%;
  margin-left: 200px;
}

.wrapper .main_content .header{
  padding: 20px;
  background: #fff;
  color: #717171;
  border-bottom: 1px solid #e0e4e8;
}

.wrapper .main_content .info{
  margin: 20px;
  color: #717171;
  line-height: 25px;
}

.wrapper .main_content .info div{
  margin-bottom: 20px;
}

    </style>
</head>
<body>

<div class="wrapper">
    <div class="sidebar">
    <a href="http://localhost/speakEnglish/user/user.php"><img src="logo.png" style="widows: 100px;"></a>
        <h2>Votre espace</h2>
        <ul>
        <li><a href="userprofileMenu.php?id=<?php echo $userinfo['idUser'];?>"><i class="fas fa-user"></i>Compte</a></li>
            <li><a href="course.php?id=<?php echo $userinfo['idUser'];?>"><i class="fas fa-book-reader"></i>Leçons</a></li>
            <li><a href="video.php?id=<?php echo $userinfo['idUser'];?>"><i class="fas fa-book-reader"></i>Capsules</a></li>
            <li><a href="quizz.php?id=<?php echo $userinfo['idUser'];?>"><i class="fas fa-book-reader"></i>Quiz</a></li>
      
            <li><a href="http://localhost/speakEnglish/login.php"><i class="fas fa-sign-out-alt"></i>Déconnexion</a></li>

        </ul> 
 
    </div>
    <?php 
include 'db.php';
$query = "SELECT * FROM questions";
$total_questions = mysqli_num_rows(mysqli_query($connection,$query));


?>
    <div class="main_content">
   
		<center><br><br><br><br><br><br><br>
				<h2 style="text-decoration:underline ;color:#d42626;">Test Your English Knowledge</h2><br>
				<p>
					This is a multiple choise quiz to test your English Knowledge.
				</p><br>
				<ul>
					<li><strong>Number of Questions:</strong><?php echo $total_questions; ?> </li><br>
					<li><strong>Type:</strong> Multiple Choise</li><br>
					

				</ul><br><br>
<div style="width:200px;padding-top:15px;padding-bottom:15px;border:3px solid #d42626;">
			 <a href="question.php?n=1" class="start" style= "color:#ffa6a6;"><h2>Start Quize</h2></a>	<!--ici drna n=1 bach ybda mn question lwla o hwa ghadi -->
</div>
			
</center>
	
    </div>
  </div>
 



</body>
</html>
<style>

body {
   
    background: #fff;
}
.wrapper {
    background: url(../img/bg.jpg);
    width: 100%;
    height: 100vh;
}
nav {
    background: #F2BEBE;
    opacity: .7;
}
nav:after{
    content: '';
    display: block;
    clear: both;
}
nav h2 {
    color: #fff;
    float: left;
    padding: 15px;
    margin-left: 150px;
}
.links {
    margin-right: 80px;
    float: right;
}
.links li {
    display: inline-block;
    list-style: none;
    position: relative;

}
.links li a{
    display: inline-block;
    color: #d42626;
    padding: 20px;
    text-decoration: none;
}
.links li:hover{
    background: #ffa6a6;
}
.links li:hover .dropdown{
    display: block;
 
}
.links ul li:hover ul{
    visibility:visible;
z-index: 100;
}
.dropdown {
    background: #fff;
    position: absolute;
    display: none;
    top: 57px;
    left: 0px;
    width: 150px;

}
.dropdown li{
    border: 2px solid #fff;
    display: block;
    background-color: #fff;

    
    /* color: #fff; */
}





.container{
    width: 100%;
    margin-top: 100px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
}

.card{
    width: 300px;
    height: 250px;
    background-color: white;
    transition: 0.5s;
    margin: 50px;
}

.card .img{
    width: 300px;
    height: 260px;
    position: relative;
    z-index: 1;
    top:-50px;
    left: 20px;
}

.card .img img{
    width: 100%;
    height: 100%;
}

.card .content{
    width: 100%;
    text-align: center;
    padding: 2px;
    transform: translateY(-150px);
    opacity: 0;
}

.card:hover{
    height: 350px;
}

.card:hover .content{
    opacity: 1;
    transform: translateY(-40px);
    transition: 0.5s;
}



</style>
<?php   
	}
	?>