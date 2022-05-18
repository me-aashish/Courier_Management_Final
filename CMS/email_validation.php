<?php
session_start();
?> 
<!DOCTYPE html>
<html>
<head>
	    <link rel="stylesheet" href="style_login.css">
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
				<input type="text" name="user" class="input-field" placeholder="User Id" required>
				<input type="password" name = "password" class="input-field" placeholder="Password" required>
				<input type="checkbox" class="check-box"><label>Remember Password</label><br><br>
				<button type="submit" class="submit-btn">Log In</button>
			</form>

			<form id="register" class ="input-group" action="registration.php" method="post">
				<input type="text" name = "user" class="input-field" placeholder="User Id" required>
				<input type="email" class="input-field" placeholder="Email Id" required>
				<input type="text" name ="password" class="input-field" placeholder="Create Password" required>
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
	alert("Email Already In Use");
	window.location = 'login.php';
</script>
</body>
</html>