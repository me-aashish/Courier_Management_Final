<?php

session_start();


$con = mysqli_connect("localhost","root","") or die('Unable To connect');;

mysqli_select_db($con,"courier_db");

$name=$_POST["user"];
$pass=$_POST["password"];
$email=$_POST["email"];

// Password Encryption Code
// $hash = password_hash($pass,PASSWORD_DEFAULT);
$pass = md5($pass);

$s="select*from usertable where name ='$name'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);

$s2="select*from usertable where email ='$email'";
$result2 = mysqli_query($con,$s2);
$num2 = mysqli_num_rows($result2);

if($num==1 || $num2==1){
	if($num==1){
		header('location:username.php');
	}
	else{
		header('location:email_validation.php');
	}
}
else{
	$reg = "insert into usertable(name,password,email) values('$name','$pass','$email')";
	mysqli_query($con,$reg);
	header('location:reg_chk.php');
}

?>
