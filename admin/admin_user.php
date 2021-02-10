
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Espace utilisateur</title>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

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
        <style>
                .button {
              display: inline-block;
              border-radius: 4px;
              background-color: #ffa6a6;
              border: none;
              color: #FFFFFF;
              text-align: center;
              font-size: 18px;
              padding: 14px;
              width: 130px;
              transition: all 0.5s;
              cursor: pointer;
              margin-top: 30px;
              font-family:'Josefin Sans', sans-serif ;
              margin-left: 1032px;
              margin-bottom: 10px;
              
            }
             
            .button span {
              cursor: pointer;
              display: inline-block;
              position: relative;
              transition: 0.5s;
            }
            
            .button span:after {
              content: '\00bb';
              position: absolute;
              opacity: 0;
              top: 0;
              right: -20px;
              transition: 0.5s;
            }
            .titre{
                margin-left: 360px;
                top: 60px;
             }
            .button:hover span {
              padding-right: 25px;
            }
            
            .button:hover span:after {
              opacity: 1;
              right: 0;
            }
            #customers {
                font-family:'Josefin Sans', sans-serif;
                border-collapse: collapse;
                width: 60%;
                margin-top: 10px;
                margin-left: 360px;
              }
              
              #customers td, #customers th {
                border: 1px solid #ddd;
                padding: 8px;
              }
              
              #customers tr:nth-child(even){background-color: #f2f2f2;}
              
              #customers tr:hover {background-color: #ddd;}
              
              #customers th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #ffa6a6;
                color: white;
              }
            </style>
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
        <div class="header">Bienvenue!</div> <!-- hna n9dro nzido hda bianvenue smya dial admin mhm zdnaha hwa hadak mazdnahach
        hia hadik haha -->
        <div class="info">
          <div>Vous pouvez gérer les utilisateurs et les cours à partir de ce menu à gauche</div>
<!--           mhm f les autres pages bhal page dial ajout dial users o kda blast had ktaba li lfo9 ghat7ti tableau o dakchi
 -->      </div>
    </div>
</div>
<style>
   .title{
 
  color: #ffa6a6;
  text-transform: uppercase;
  text-align: center;
} 
  .inputfield{
  margin-bottom: 15px;
  display: flex;
  align-items: center;
}
.inputfield label{
   width: 200px;
   color: black;
   margin-right: 10px;
  font-size: 14px;
}
 .inputfield .input,
  .inputfield .textarea{
  width: 100%;
  outline: none;
  border: 1px solid #ffa6a6;
  font-size: 15px;
  padding: 8px 10px;
  border-radius: 3px;
  transition: all 0.3s ease;
}

 .inputfield .textarea{
  width: 100%;
  height: 125px;
  resize: none;
}

 .inputfield .custom_select{
  position: relative;
  width: 100%;
  height: 37px;
}

 .inputfield .custom_select:before{
  content: "";
  position: absolute;
  top: 12px;
  right: 10px;
  border: 8px solid;
  border-color: #ccc transparent transparent transparent;
  pointer-events: none;
}

  .inputfield .custom_select select{
  -webkit-appearance: none;
  -moz-appearance:   none;
  appearance:        none;
  outline: none;
  width: 100%;
  height: 100%;
  border: 0px;
  padding: 8px 10px;
  font-size: 15px;
  border: 1px solid #ccc;
  border-radius: 3px;
}


 

 .inputfield p{
   font-size: 14px;
   color: #757575;
}
 .inputfield .check{
  width: 15px;
  height: 15px;
  position: relative;
  display: block;
  cursor: pointer;
}
 .inputfield .check input[type="checkbox"]{
  position: absolute;
  top: 0;
  left: 0;
  opacity: 0;
}
 .inputfield .check .checkmark{
  width: 15px;
  height: 15px;
  border: 1px solid #fec107;
  display: block;
  position: relative;
}
 .inputfield .check .checkmark:before{
  content: "";
  position: absolute;
  top: 1px;
  left: 2px;
  width: 5px;
  height: 2px;
  border: 2px solid;
  border-color: transparent transparent #fff #fff;
  transform: rotate(-45deg);
  display: none;
}
 .inputfield .check input[type="checkbox"]:checked ~ .checkmark{
  background: #fec107;
}

 .inputfield .check input[type="checkbox"]:checked ~ .checkmark:before{
  display: block;
}
  


</style>
 
 
      

<!-- table 3     hhhhhhhhhhhhhhhhhhhhhh    -->
 <div class="w3-container">
        <button onclick="document.getElementById('id01').style.display='block'"  class="button" ><span>Ajouter </span></button> 
         
        <div id="id01" class="w3-modal">
                <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">
            
                   
                        <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                                <div class="title">
                                       <b> Ajouter un utilisateur</b>
                                        </div>
                           </div>
                  <form class="w3-container" action="action_page.php" method="POST">
                    
                    <div class="w3-section">
                            <div class="inputfield">
                      <label><b>Nom</b></label>
                      <input class="w3-input w3-border w3-margin-bottom" type="text"  name="nom" required></div>
                      <div class="inputfield"><label><b>Prénom</b></label>
                      <input class="w3-input w3-border" type="text"   name="prenom" required>
                     </div></div>
                     <div class="inputfield">
                            <label><b>Email</b></label>
                            <input class="w3-input w3-border w3-margin-bottom" type="email" name="email" required> 
                         </div>  
                        <div class="inputfield">
                            <label><b> Mot de passe</b></label>
                            <input class="w3-input w3-border w3-margin-bottom" type="password"  name="pass" required> 
                         </div>
                         <div class="inputfield">
                                <label><b>Date de naissance</b></label>
                                <input class="w3-input w3-border w3-margin-bottom" type="date"  name="date" required> 
                             </div>
                          <div class="inputfield">
                            <label><b>Sexe</b></label>
                            <input class="w3-input w3-border w3-margin-bottom" type="text"  name="sexe" required> 

                         </div> 
                  
            <br>
                  <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
                        <input type="submit" class="w3-button w3-red" name="ajout" value="Ajouter">
                    <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-red">Fermer</button>
                   </div></form>
            
                </div>
              </div>
            </div>
            
        <table id="customers">
               
        <tr>
        <th id=c> Nom</th>
        <th id=c>Prenom</th>
        <th id=c>date de naissance</th>
        <th id=c>sexe</th>
        <th id=c>email</th>
        <th id=c>password</th>
        <th id=c>control</th>
        </tr>
        <?php 
require('connexion.php');
 
       $req="SELECT * FROM user";
       $sth = $dbh->query($req);
       $res = $sth->fetchAll(PDO::FETCH_ASSOC); 
       
       foreach ($res as $row){ 
        $i=$row['idUser'];
        echo '<tr>
        <td>'.$row['nom'].'</td>
        <td>'.$row['prenom'].'</td>
        <td>'.$row['dateNaiss'].'</td>
        <td>'.$row['sexe'].'</td>
        <td>'.$row['userEmail'].'</td>
        <td>'.$row['password'].'</td>
        <td><a href=supp.php?id='.$row['idUser'].'><img src="delete.jpg" width="25px" height="25px"></a></td> 
        </tr>
        <tr>'; 


       }
  ?>
         
        </table>
        <br><br>
</body>
</html>

