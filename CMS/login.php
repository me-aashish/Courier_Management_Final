<?php
	session_start();
?> 

<!DOCTYPE html>
<html>
<head>
	    <link rel="stylesheet" href="style_login.css">
		<meta charset = "utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="HandheldFriendly" content="true">
</head>
<body>
	<div class="frame">
		<div class="form-box">
			<div class="button-box">
				<div id="btn"></div>
				<button type="button" class="toggle-btn" onclick="login()">Log In</button>
				<button type="button" class="toggle-btn" onclick="register()">Register</button> 
			</div>
			<form  id="login" class ="input-group" action="validation.php" method="post">
				<input type="text" name = "email" email="user" class="input-field" placeholder="Email Id" required>
				<input type="password" name = "password" class="input-field" placeholder="Password" required>
				<input type="checkbox" class="check-box"><label>Remember Password</label><br><br>
				<button type="submit" class="submit-btn">Log In</button>
			</form>

			<form id="register" class ="input-group" action="registration.php" method="post">
				<input type="text" name = "user" class="input-field" placeholder="User Id" required>
				<input type="email" name = "email" class="input-field" placeholder="Email Id" required>
				<input type="password" name ="password" class="input-field" placeholder="Create Password" required minlength="8" id="pass">
				<input type="checkbox" onclick="eyepass()"><label>   Show Password  </label><br>
				<input type="checkbox" class="check-box" required><label>I agree to the terms and conditions.</label><br><br>
				<button type="submit" class="submit-btn">Create Account</button>
			</form>
		</div>
	</div>
<script>
	var x = document.getElementById("login");
	var y = document.getElementById("register");
	var z=document.getElementById("btn");

	function register(){
		x.style.left = "-400px";
		y.style.left = "50px";
		z.style.left = "110px";
	}
	function login(){
		x.style.left = "50px";
		y.style.left = "450px";
		z.style.left = "0px";
	}
	function eyepass() {
		var x = document.getElementById("pass");
		if (x.type === "password") {
			x.type = "text";
		} else {
			x.type = "password";
		}
		}
	window.history.forward();
        function noBack() {
            window.history.forward();
        }

</script>
</body>
</html>