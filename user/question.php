<?php 
	include 'db.php';
	session_start(); 
	//Set Question Number
	$number = $_GET['n'];//get le nombre de la question c est 1

	//Query for the Question
	$query = "SELECT * FROM questions WHERE question_number = $number";

	// Get the question
	$result = mysqli_query($connection,$query);
	$question = mysqli_fetch_assoc($result); 

	//Get Choices
	$query = "SELECT * FROM options WHERE question_number = $number";
	$choices = mysqli_query($connection,$query);
	// Get Total questions
	$query = "SELECT * FROM questions";
	$total_questions = mysqli_num_rows(mysqli_query($connection,$query));
 	
	
?>
<html>
<head>
	<title>English Quiz</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<header>
		<div class="container">
		<center><br><br><br>
				<h1 style="text-decoration:underline ;color:#d42626;">English quiz</h1><br>
</center>
		</div>
	</header>

	<main><center>
			<div class="container" style="width:500px;padding-top:15px;padding-bottom:15px;border:3px solid #d42626;">
				<div class="current"><h2>Question <?php echo $number; ?> of <?php echo $total_questions; ?> </div>
				<h2 class="question"><?php echo $question['question_text']; ?> </h2>
				<form method="POST" action="process.php">
					<ul class="choicess">
						<?php while($row=mysqli_fetch_assoc($choices)){ ?>
						<li><input type="radio" name="choice" value="<?php echo $row['id']; ?>"><?php echo $row['coption']; ?></li>
						<?php } ?>
						
						</h2>
					</ul>
					<input type="hidden" name="number" value="<?php echo $number; ?>">
					<input type="submit" name="submit" value="Submit">


				</form>
				

				</div>	</div>
			
</center>
	</main>










</body>
</html>