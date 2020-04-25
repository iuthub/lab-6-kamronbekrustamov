<?php
	$password="";
	$message="No input yet!";
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$password=$_POST["password"];
		if(!preg_match("/[a-z]+/", $_POST["password"]))
			$message = "Password should contain at least 1 lowercase char!";
		elseif(!preg_match("/[A-Z]+/", $_POST["password"]))
			$message = "Password should contain at least 1 UPPERCASE char!";
		elseif(!preg_match("/\d+/", $_POST["password"]))
			$message = "Password should contain at least 1 digit!";
		else
			$message = "Your password is strong!";
	}


 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Password Validator</title>
	<style>
		body{
			font-family: arial;
		}
		h3{
			color: red;
		}
	</style>
</head>
<body>
	<form action="valid_pass.php" method="post">
		<label for="password">Password</label>
		<input type="text" name="password" id="password" minlength="6" maxlength="10" required autocomplete="off" value="<?= $password ?>">
		<input type="submit" value="Validate">
		<h3><?= $message ?></h3>
	</form>
</body>
</html>