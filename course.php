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
  
</head>
<body>

<div class="wrapper">
        <nav>
<img src="logo.png" style="width: 100px;">  
        <ul class="links" >
                <li><a href="index.php">Accueil</a></li>
                <li><a href="course.php">Leçons</a>
                </li> <li> 
              <a href="login.php">Connexion</a></li>
                
            </ul>   
              
                
                
        </nav>
   
       
       
  
  
 
    <div style="padding:50px;">
      <?php 
require('conex.php');
 
       $req="SELECT * FROM files";
       $result = $con->query($req);

       if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        echo '<a href="/speakEnglish/admin/'.$row['file_url'].'"><div class="top-droppable folder tooltiper tooltiper-up" data-tooltip="0 file" id="folder1"><i class="fa fa-folder" aria-hidden="true"></i><i class="fa fa-check" aria-hidden="true"></i><p>'.$row['name'].'</p></div></a>'; 


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
.folder{float:left;width:150px;height:150px;background:rgba(0,0,0,0);transition:.2s background-color ease-out;text-align:center}
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

*{
    padding: 0px;
    margin: 0px;
    font-family: arial;
   

}
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
