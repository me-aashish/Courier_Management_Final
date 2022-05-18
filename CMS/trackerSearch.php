<?php
	session_start();
?> 

<!DOCTYPE html>
<html>
<head>
	    <link rel="stylesheet" href="style_login.css">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
		<meta charset = "utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="HandheldFriendly" content="true">
</head>
<style>
h1 {
    margin:auto;
    line-height:51px;
    vertical-align:middle;
    text-align: center;
}
</style>
<body>
	<div class="frame">
		<div class="form-box">
			<div class="button-box">
				<div id="btn"></div>
			</div>
            <h1> Cargo Tracker<i class="fa fa-telegram" aria-hidden="true"></i> </h1>
			<form  id="login" class ="input-group" action="trackerValidate.php" method="post">
				<input type="text" name = "email" class="input-field" placeholder="Email Id" required>
				<input type="text" name = "trackerid" class="input-field" placeholder="Tracking Number" required>
				<button type="submit" class="submit-btn">Track!</button>
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