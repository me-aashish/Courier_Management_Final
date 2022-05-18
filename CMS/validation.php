<?php

session_start();


$con = mysqli_connect('localhost','root','') or die('Unable To connect');

mysqli_select_db($con,'courier_db');

$email=$_POST['email'];
$pass=$_POST['password'];

$pass = md5($pass);


$s="select*from usertable where email ='$email' and password ='$pass'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
$type = "select type from usertable where email ='$email' and password ='$pass'";

if($num==1){
	$_SESSION['type'] = $type;
	$_SESSION['admin_id'] = $email;
	header('location:admin.php');
}
else{
	header('location:Login_error.php');
}

?>