<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Order Management System-register</title>
	<link rel="stylesheet" type="text/css" href="https://projectstaticfiles.s3.amazonaws.com/css/Register-css.css"/>
</head>
<body>
	<div id = "main-holder">
		<h1 id="register-header">Register</h1>
		<div id="register-error-msg-holder">
			<p id="register-error-msg">Join us now!</p>
		</div>
		
		<form id="register-form" onsubmit="return false">
			<input type='text' name="name" id="name" class="register-field" placeholder="Name">
			<input type="text" name="id" id="id" class="register-field" placeholder="custstomer id">
			<input type="password" name="password" id="password" class="register-field" placeholder="Password">
			<input type="password" name="repassword" id="repassword" class="register-field" placeholder="Re-Enter Password">
			<input type='text' name="phoneno" id="phoneno" class="register-field" placeholder="Phone">
			<input type='text' name="email" id="email" class="register-field" placeholder="Email-Id">
			<input type='text' name="address" id="address" class="register-field" placeholder="address">
			<input type="submit" value="Register" id="register-submit">
			<p id = "Register">Already have an account?<a href='Login.php'> Login</a></p>
			<div class="col-md-8" id="signup_msg"></div>
		</form>
	</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://projectstaticfiles.s3.amazonaws.com/js/register.js"></script>

</body>
</html>
