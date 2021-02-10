<!DOCTYPE html>
<html>
<head>
    <title>Accueil</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleContact.css" />
    
    <title>Accueil</title>
    <style>
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
    transform: translateY(-40px); /*hna dakchi li f class contentt hide t7t imag mli kandiro hover  */
    transition: 0.5s;/*kadarlih transistion l image bach yban*/
}

    </style>
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
        <br><br>
       
       
    </div>
   
   
    <style>
 

/**/
        .slideshow-container {
          max-width: 650px;
          position: relative;
          margin: auto;
          margin-top: -550px;
        }  
       
        /* Caption text */
        .text {
          color: #f2f2f2;
          font-size: 15px;
          padding: 8px 12px;
          position: absolute;
          bottom: 8px;
          width: 100%;
          text-align: center;
        }
       
        /* Number text (1/3 etc) */
        .numbertext {
          color: #f2f2f2;
          font-size: 12px;
          padding: 8px 12px;
          position: absolute;
          top: 0;
        }
       
        /* The dots/bullets/indicators */
        .dot {
          height: 15px;
          width: 15px;
          margin: 0 2px;
          background-color: #bbb;
          border-radius: 50%;
          display: inline-block;
          transition: background-color 0.6s ease;
        }
       
        .active {
          background-color: #717171;
        }
       
        /* Fading animation */
        .fade {
          -webkit-animation-name: fade;
          -webkit-animation-duration: 1.5s;
          animation-name: fade;
          animation-duration: 1.5s;
        }
       
        @-webkit-keyframes fade {
          from {opacity: .4}
          to {opacity: 1}
        }
       
        @keyframes fade {
          from {opacity: .4}
          to {opacity: 1}
        }
       
        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
          .text {font-size: 11px}
        }
        /*qui somme nous*/
  



        </style>
        </head>
        <body>
       
       
        <div class="slideshow-container">
       
        <div class="mySlides fade">
          <div class="numbertext">1 / 4</div>
          <img src="./1.jpg" style="width:100%">
           
        </div>
       
        <div class="mySlides fade">
          <div class="numbertext">2 / 4</div>
          <img src="./2.jpg" style="width:100%">
           
        </div>
       
        <div class="mySlides fade">
          <div class="numbertext">3 / 4</div>
          <img src="./3.jpg" style="width:100%">
           
        </div>
        <div class="mySlides fade">
            <div class="numbertext">4 / 4</div>
            <img src="./4.jpg" style="width:100%">
             
          </div>
        </div>
        <br>
       
        <div style="text-align:center">
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
        </div>
        <br><br>
    

        <div class="container">

        <div class="card">
          <div class="img">
              <img src="card1.jpg" alt="">
          </div>
          <div class="content">
              <h2>Les testes</h2>
              <p>Notre platforme vous proposer des testes de syntaxe pour tester voc capacité en anglais</p>
          </div>
      </div>
      <div class="card">
          <div class="img">
              <img src="card2.jpg" alt="">
          </div>
          <div class="content">
              <h2>Les mots clés</h2>
              <p>Chaque leçon contient plusieurs mot clés appartient a des phrases</p>
          </div>
      </div>
      <div class="card">
          <div class="img">
              <img src="card3.jpg" alt="">
          </div>
          <div class="content">
              <h2>Les audios</h2>
              <p>Pour bien maistriser la langue cette platforme vous donner des audios appartient a chaque phrase</p>
          </div>
      </div></div></div><br><br>    <!-- qui somme nous  -->
        
         <H2><center>Que somme nous ?
        </center></H2> <br>
        <p style="color:pink;"> <h3><center><i>English Speaking est un site éducatif et amusant pour les etudiants qui apprennent l'anglais. Vous trouverez des exercices de vocabulaire en ligne, des audios, des vidéos  pour aider à développer les compétences d'alphabétisation. English Speaking  est propose aussi des centaines de ressources gratuites. Vous pouvez devenir membre et contribuer au site, interagir avec d'autres utilisateur.</i></center></h3></p> <br><br><br><br><br>
        
   
        
        
        
        
        
        
        
        
        
        
        
        
        
        <script>
        var slideIndex = 0;
        showSlides();
       
        function showSlides() {
          var i;
          var slides = document.getElementsByClassName("mySlides");
          var dots = document.getElementsByClassName("dot");
          for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
          }
          slideIndex++;
          if (slideIndex > slides.length) {slideIndex = 1}    
          for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
          }
          slides[slideIndex-1].style.display = "block";  
          dots[slideIndex-1].className += " active";
          setTimeout(showSlides, 2000); // Change image every 2 seconds
        }
        </script>
</body>
</html>
