  
<!DOCTYPE html>
<html>
	<head>
		<title> User Profile </title>
		<link rel="stylesheet" href="style.css">
		<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
		<script src='https://kit.fontawesome.com/a076d05399.js'></script>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,600;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
	</head>
	<style>
	
		body{
			background-image: url(back.jpg);
			background-size: cover;
			background-position: center center;
			background-repeat: no-repeat;
			background-attachment: fixed;
			height: 100vh;
		}
		.profile-card{
			width: 516px;
			margin: auto;
			margin-top: 12px;
			margin-bottom: 12px;
			background: #ffffffd9;
			border-radius: 10px;
			opacity: 0.98;
			font-weight: 800;
			box-shadow: 2px 4px 10px 2px rgba(0, 0, 0, 0.5);
			position: relative;
		}
		.image-container{
			position: relative;
		}
		.image-container img{
			width: 29%;
			border-radius: 50%;
			margin-top: 15px;
			margin-left: 190px;
			height: 152px;
		}
		.title{
			position: absolute;
			left: 100px;
			top: 170px;
			font-size: 17px;
			font-weight: 700;
			color: #d42626;
			text-shadow: #ffa6a6 1px 0  10px;
		}
		.main-container{
			padding: 32px 20px 20px 20px;
		}
		.info{
			color: black;
			margin-right: 16px;
			padding: 14px;
		}
		.skills{
			background-color: #ffa6a6;
			border-radius: 16px;
			opacity: 0.45;
			margin-top: 10px;
			margin-bottom: 10px;
		}
		.bar{
			padding: 0.05rem 12px;
			border-radius: 16px;
			text-align: center;
			color: white;
			background-color: #d42626;
			opacity: 1;
		}
		.btn{
			padding: 10px;
			margin-top: 9px;
			margin-bottom: 8px;
			background-color: #d42626;
			color: white;
			width: 105px;
			outline: none;
			border-radius: 7px;
			cursor: pointer;
			margin-left: 12px;
		}
		.about{
			border: 2px solid #ffa6a6;
			border-radius: 7px;
			margin-left: 12px;
			display: none;

		}
		
		.about p{
			padding: 12px;
			margin-top: 0px;
			margin-left: 13px;
			font-family: 'Nunito', sans-serif;
			font-size: 15px;
		}
		.about h3{
			margin-left: 14px;
		}
		.btn:hover{
			background-color: #ffa6a6;
		}
		.follow p{
			color: black;
			font-size: 18px;

		}
	





	</style>
	
<body>
<div class="profile-card">
	<div class="image-container">
		<img src="user.png">
		<div class="title">
			<h2>RHEZZOUNE OUMAIMA</h2>
		</div>
	</div>
	<div class="main-container">
	
		<hr>
		<p>Verbes</p>
		<div class="skills">
			<div class="bar" style="width: 50%">50%</div>
		</div>
		<p>Adjectives</p>
		<div class="skills">
			<div class="bar" style="width: 60%">60%</div>
		</div>
		<button class="btn">Mes informations</button>
		<button class="btn"><a style="color:white;" href="http://localhost/speakEnglish/user/updatePass.php">Modifier mot de passe</a></button>
		<button class="btn"><a style="color:white;" href="http://localhost/speakEnglish/user/updateAccount.php">Modifier mes informations</a></button>
		<div class="about">
        <br><br><br>
		<h3>RHEZZOUNE OUMAIMA</h3>
			<p><i class="fa fa-envelope info"></i>mn@gmail.com</p>
		<p><i class="fas fa-calendar-alt info"></i>12/01/2000</p>		</div>

</div>
<script>
	let btn=document.querySelector('.btn');
	let about=document.querySelector('.about');
	btn.addEventListener('click',function(){
		if(this.innerText=="Mes informations"){
			about.style.display="block";
			this. innerText="Retour";
		}
		else{
			about.style.display="none";
			this. innerText="Mes informations";
		}
	})






</script>

</body>
</html>