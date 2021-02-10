

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<?php
	session_start();
	 
	$bdd = new PDO('mysql:host=127.0.0.1;dbname=speakenglish', 'root', 'oumaima');
	 
	if(isset($_GET['id']) AND $_GET['id'] > 0) {
	   $getid = intval($_GET['id']);
	   $requser = $bdd->prepare('SELECT * FROM user WHERE idUser = ?');
	   $requser->execute(array($getid));
	   $userinfo = $requser->fetch();
	?>
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
    <div class="main_content">
      <?php 
require('conex.php');
 
       $req="SELECT * FROM videoup";
       $result = $con->query($req);

       if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        echo '<a href="/speakEnglish/admin/upload/'.$row['name'].'"><div class="top-droppable folder tooltiper tooltiper-up" data-tooltip="0 file" id="folder1"><img src="vvv.jpg" style="width:200px;"></i><i class="fa fa-check" aria-hidden="true"></i><p>'.$row['name'].'</p></div></a>'; 


       }}
  ?>
    </div>
  </div>
 



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
<style>



.is-dropped{transform:scale(0);transition:.2s all ease-out}
.folder{float:left;width:200px;height:150px;background:rgba(0,0,0,0);transition:.2s background-color ease-out;text-align:center}
.folder i.fa-folder{height:90px!important;width:100%!important;line-height:100px!important;margin:10px auto!important;font-size:90px!important;transition:.2s all ease-out}
.folder i.fa-check{color:#fff;background:rgba(0,0,0,.1);border-radius:50%;width:60px;height:60px;text-align:center;line-height:60px;position:absolute;left:0;right:0;top:34px;margin:auto;pointer-events:none;transform:scale(0);opacity:0;font-size:24px}
.folder.item-dropped i.fa-check{animation:animateValidation 1s linear}
@keyframes animateValidation{
0%{transform:scale(1.5);opacity:0}
40%,80%{transform:scale(1);opacity:1}
100%{transform:scale(0);opacity:0}
}
.folder p{cursor:default;opacity:.5;transition:.2s all ease-out}
.folder:hover .fa-folder{transform:scale(1.1)!important}
.folder:hover p{transform:translateY(6px);opacity:1}
.tooltiper .tooltip,.tooltiper-up .tooltip{font-size:.7rem;background:rgba(0,0,0,.7);padding:5px 10px;border-radius:5px;line-height:1.4em;opacity:0}
#folder1 i.fa-folder,#folder1-content h2 .fa-folder{color:#eb4141!important}


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