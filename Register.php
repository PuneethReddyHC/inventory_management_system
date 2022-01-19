<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Order Management System-register</title>
	
	<style>
	* {
	margin: 0px;
	height: 100%;
	position: relative;
	box-sizing: border-box;
}
body {
	font-family: Arial, Times-New-Roman;
	background-image: url("./img/background.jpg");
	height: 100%;
	margin: 0;
	background-attachment: fixed;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	display: grid;
	justify-items: center;
	align-items: center;
}
#main-holder {
	width: 50%;
	height: 50%;
	display: grid;
	padding: 5px 10px;
	justify-items: center;
	background-color: white;
	opacity: 0.5;
	border-radius: 15px;
	box-shadow: 0px 0px 5px 2px black;
}
#main-holder:hover {
	opacity: 0.7;
}
#register-error-msg-holder {
	width: 100%;
	height: 100%;
	display: grid;
	justify-items: center;
	align-items: center;
	margin: -40px;
}
#register-header {
	margin-bottom: -50px;
	margin-top: 10px;
}
#register-error-msg {
	width: 32%;
	height: 40%;
	margin-top: 30px;
	text-align: center;
	padding: 5px;
	font-size: 12px;
	font-weight: bold;
	color: #8a0000;
	opacity: 1.0;
}
#register-form {
	align-self: flex-start;
	display: grid;
	justify-items: center;
	align-items: center;
}
.register-field::placeholder {
	color: #3a3a3a;
}
.register-field {
	border: none;
	border-bottom: 1px solid #3a3a3a;
  	margin-bottom: 10px;
  	border-radius: 3px;
  	outline: none;
  	padding: 0px 0px 0px 5px;
}
#register-submit {
	width: 60%;
	padding: 7px;
	border: none;
	border-radius: 3px;
	color: white;
	font-weight: bold;
	background-color: #3a3a3a;
	cursor: pointer;
	outliner: none;
}
#register-submit:hover {
	opacity: 1;
	width : 70%;
	height: 100%;
	border: none;
	border-radius: 3px;
	font-size: 16px;
}
#Register {
	margin-top: 13px;
	margin-bottom: -3px;
}
a:hover {
	opacity: 1;
	color: red;
}
a:link {
	color: red;
	text-decoration: none;
}
@media(max-width: 482px) {
	#main-holder {
		width: 85%;
		height: 50%;
}
	#register-error-msg-holder {
		width: 100%;
		height: 100%;
		margin: -25px;
}
}
.register-field-error::placeholder {
	color: red;
	opacity: 1;
}
.register-field-error {
	border: none;
	border-bottom: 1px solid #3a3a3a;
  	margin-bottom: 10px;
  	border-radius: 3px;
  	outline: none;
  	padding: 0px 0px 0px 5px;
}
	</style>
	
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
<script src="./js/register.js"></script>

</body>
</html>
