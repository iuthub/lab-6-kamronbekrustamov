<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Validating Forms</title>
		<link type="text/css" rel="stylesheet" href="style.css" />
		<style>
			input[type="submit"] {
    			color: red;
			}
		</style>
	</head>
	
	<body>
		<h1>Registration Form</h1>

		<p style="text-align: center;">
			This form validates user input and then displays "Thank You" page.
		</p>
		
		<hr />
		
		<h2>Please, fill below fields correctly</h2>
		<form action="result.php" method="post">
			<dl>
				<dt>Name</dt>
				<dd>
					<input type="text" name="name" minlength="2" required>
				</dd>
				
				<dt>Email</dt>
				<dd>
					<input type="email" name="email" required="">
				</dd>

				<dt>Username</dt>
				<dd>
					<input type="text" name="username" minlength="5" required>
				</dd>

				<dt>Password</dt>
				<dd>
					<input type="password" name="password" minlength="8">
				</dd>

				<dt>Confirm Password</dt>
				<dd>
					<input type="password" name="password" minlength="8">
				</dd>

				<dt>Date of Birth</dt>
				<dd>
					<input type="date" name="birthDay">
				</dd>

				<dt>Gender</dt>
				<dd>
					<input type="radio" name="gender" value="Male">Male
					<input type="radio" name="gender" value="Female">Female
				</dd>

				<dt>Marital Status</dt>
				<dd>
					<input type="radio" name="maritalStatus" value="Single">Single
					<input type="radio" name="maritalStatus" value="Married">Married
					<input type="radio" name="maritalStatus" value="Divorced">Divorced
					<input type="radio" name="maritalStatus" value="Widowed">Widowed
				</dd>

				<dt>Address</dt>
				<dd>
					<input type="text" name="address" required>
				</dd>

				<dt>City</dt>
				<dd>
					<input type="text" name="city" required>
				</dd>

				<dt>Postal Code</dt>
				<dd>
					<input type="number" name="postalCode" minlength="6" maxlength="6" required>
				</dd>

				<dt>Home Phone</dt>
				<dd>
					<input type="number" name="homeNum" minlength="9" maxlength="9" required>
				</dd>

				<dt>Mobile Phone</dt>
				<dd>
					<input type="number" name="mobNum" minlength="9" maxlength="9" required>
				</dd>

				<dt>Credit Card Number</dt>
				<dd>
					<input type="number" name="cardNum" minlength="16" maxlength="16" required>
				</dd>

				<dt>Credit Card Expiry Date</dt>
				<dd>
					<input type="date" name="expiryDate" required="">
				</dd>

				<dt>Monthly Salary</dt>
				<dd>
					<input type="text" name="salary" required>
				</dd>

				<dt>Web Site URL</dt>
				<dd>
					<input type="url" name="url" required>
				</dd>

				<dt>Overall GPA</dt>
				<dd>
					<input type="number" name="gpa" step="0.01" min="0" max="4.5" required>
				</dd>
			</dl>
			<input type="submit" value ="Register">
		</form>
	</body>
</html>