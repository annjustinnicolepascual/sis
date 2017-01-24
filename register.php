<?php
$studentNo = "";
$lastName = "";
$firstName = "";
$emailAddress = "";
$password = "";
$birthDate = null;
?>

<!DOCTYPE html>
<html>
<head>
<title>Student Registration</title>
<link href="css/bootstrap.min.css" rel="stylesheet" />


</head>
<body>
<div class="container">
<div class="col-lg-offset-3 col-lg-6">
<div class="well">
<form method="POST" action="welcome.php"
class="form-horizontal">

<h1 class="text-left"><b>Create a New Account</b></h1>
</br>
<div class="form-group">
<div class="col-lg-8">
<input type="text" name="sid"
class="form-control" placeholder="Student ID" required />
</div>
</div>

<div class="form-group">
<div class="col-lg-8">
<input type="text" name="fn"
class="form-control" placeholder="First Name"required />
</div>
</div>

<div class="form-group">
<div class="col-lg-8">
<input type="text" name="ln"
class="form-control" placeholder="Last Name" required />
</div>
</div>

<div class="form-group">
<div class="col-lg-8">
<input type="email" name="email"
class="form-control" placeholder="E-mail address"required />
</div>
</div>

<div class="form-group">
<div class="col-lg-8">
<input type="password" name="pwd"
class="form-control" placeholder="Password"required />
</div>
</div>

<div class="form-group">
<div class="col-lg-8">
<input type="date" name="bday"
class="form-control" placeholder="Birthday"required />
</div>
</div>

<div class="form-group">
<div class="col-lg-8">
<button name="register"
class="btn btn-success">
Create Account
</button>

</div>
</div>
</form>
</div>
</div>
</div>
</body>
</html>