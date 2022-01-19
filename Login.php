<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Order Management System-Login</title>
	<link rel="stylesheet" type="text/css" href="./css/Login-css.css"/>
	
</head>
<body>
	<div id = "main-holder">
		<h1 id="login-header">Login</h1>
		<div id="login-error-msg-holder">
			<p id="login-error-msg">Invalid Credentials</p>
		</div>

		<form id="login-form" onsubmit="return false">
			<input type="text" name="email" id="email" class="login-field" placeholder="email">
			<input type="password" name="password" id="password-field" class="login-field" placeholder="Password">
			<input type="submit" value="Login" id="login-submit">
			<br>
			<p id = "Register"><a href='Register.php'> Register Now!</a></p>
			<div class="panel-footer"><div class="alert alert-danger"><h4 id="e_msg"></h4></div></div>
		</form>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="./js/login.js"></script>

</body>
</html>
