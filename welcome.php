<?php
	if(isset($_POST['register'])) 
	{
		$studentNo = $_POST['sid'];
		$lastName =$_POST['ln'];
		$firstName =$_POST['fn'];
		$emailAddress =$_POST['email'];
		$password =$_POST['pwd'];
		$birthDate =$_POST['bday'];
		// echo "Welcome, " . $firstName . " " . $lastName . "!<br/>" . 
		// 		'Your ID Number is ' . $studentNo . '. <br/>
		// 		Your E-mail Address is ' . $emailAddress . '. <br/>
		// 		Your password is ' . $password . '. <br/>
		// 		Your birthday is ' . $birthDate . '. <br/>
				
		// 		The time is ' . date('c');	
	}
	else 
	{
		header('location: register.php');
	}
?>

<html>
<head>
<title>Review Account Details</title>
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/trial-1.css" rel="stylesheet" />
</head>
<body>
<div class="col-lg-offset-3 col-lg-6">
<div class="well">
<sub>Today is <?php echo date("l") . ", " . date("F d, Y") . ". " . " The time is now " . date("h:i:sa")?> </sub>
<h1><b>Welcome, <?php echo $firstName . "!"?></b></h1>
<p>Please review your account details.</p>
</br>
<p>ID Number: <b><u><?php echo $studentNo ?></u></b></br></p>
<p>First Name: <b><u><?php echo $firstName ?></u></b></br></p>
<p>Last Name: <b><u><?php echo $lastName ?></u></b></br></p>
<p>E-mail Address: <b><u><?php echo $emailAddress ?></u></b></br></p>
<p>Password: <b><u><?php echo $password ?></u></b></br></p>
<p>Birthday: <b><u><?php echo $birthDate ?></u></b></br></p>
</br>
<form>
    <button name="back" class="btn btn-success" formaction="register.php">Go Back!</button>
</form>

</div>
</div>
</body>
</html>