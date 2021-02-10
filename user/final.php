<?php 

session_start();

?>

<html>
<head>
	<title>English Quizer</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<header>
		<div class="container">
		<center><br><br><br>
				<h1 style="text-decoration:underline ;color:#d42626;">English Quizer </h1><br></center>
		</div>
	</header>

	<main><center>
			<div class="container">
				<h2>Your Result</h2>
				<h3>Congratulation You have completed this test succesfully.</h3>
				<h3>Your <strong>Score</strong> is <?php echo $_SESSION['score']; ?>  </h3>
				<?php unset($_SESSION['score']); ?>
				
			</div>

	</main>
</center>









</body>
</html>