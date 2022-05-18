<?php

session_start();


$con = mysqli_connect('localhost','root','') or die('Unable To connect');

mysqli_select_db($con,'courier_db');

$email=$_POST['email'];
$track=$_POST['trackerid'];


$s="select*from tbl_courier_add where SenderEmail ='$email' and OrderNumber ='$track'";
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
// $type = "select type from users where email ='$email' and OrderNumber ='$trackerid'";

if($num >= 1){
	// $_SESSION['type'] = $type;
    $_SESSION['id'] = $track;
	header('location:updaterForm.php');
    // echo "Tracking Number: " . $row["OrderNumber"]."<br>";
}
else{
	// header('location:error.php');
    echo "0 results";
}
$con->close();
?>