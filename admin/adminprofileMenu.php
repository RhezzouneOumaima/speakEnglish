<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Espace utilisateur</title>
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
    <a href="http://localhost/speakEnglish/admin/admin.php"><img src="logo.png" style="widows: 100px;"></a>
        <h2>Votre espace</h2>
        <ul>
        <li><a href="adminprofileMenu.php"><i class="fas fa-user"></i>Compte</a></li>
            <li><a href="admin_lecon.php"><i class="fas fa-book-reader"></i>Leçons</a></li>
            <li><a href="admin_user.php"><i class="fas fa-book-reader"></i>Utilisateurs</a></li>
            <li><a href="quiz.php"><i class="fas fa-book-reader"></i>Quiz</a></li>
           <!--  saraha ma3rftch yakma nsit chi haja ola la hta tchofi -->
            <li><a href="http://localhost/speakEnglish/login.php"><i class="fas fa-sign-out-alt"></i>Déconnexion</a></li>

        </ul> 
 
    </div>
    <div class="main_content">
         <?php include"profileAdmin.php"; ?>
<!--           mhm f les autres pages bhal page dial ajout dial users o kda blast had ktaba li lfo9 ghat7ti tableau o dakchi
 -->    
    </div>
</div>

</body>
</html>