

<?php

session_start();


$con = mysqli_connect('localhost','root','') or die('Unable To connect');

mysqli_select_db($con,'courier_db');

$email=$_POST['email'];
$track=$_POST['trackerid'];


$s="select * from tbl_courier_add_admin where SenderEmail ='$email' or ReceiverEmail ='$email' and OrderNumber ='$track'";
$currL = "select CurrentLocation from tbl_courier_add_admin where SenderEmail ='$email' or ReceiverEmail ='$email' and OrderNumber ='$track'";
$del = "select DeliveryCharges from tbl_courier_add_admin where SenderEmail ='$email' or ReceiverEmail ='$email' and OrderNumber ='$track'";
$delivery= mysqli_query($con,$del);
$res = mysqli_query($con,$currL);
$row = mysqli_fetch_array($res);
$result = mysqli_query($con,$s);
$num = mysqli_num_rows($result);
// $type = "select type from users where email ='$email' and OrderNumber ='$track'";
$arr=array("In Transit","Delivered","Returned Back","Delayed/Not Delivered Yet");
$status = (array_rand($arr,1));
if($num >= 1){
	// $_SESSION['type'] = $type;
	// header('location:.php');
	
		// echo "<h3 > Courier Sent by : $rows['SenderAddress'];</h3>";
		// echo "<h3 > Your Tracking Number is: $track</h3>";
		// // echo "$arr[$status]";
		// if($arr[$status] == "In Transit"){

		// 	echo "<h3>Current Status of your courier is : </h3> ";
		// 	echo "<h3 style= 'color:#F6BE00'> In Transit </h3>";
		// }
		// else if($arr[$status] == "Delivered"){

		// 	echo "<h3>Current Status of your courier is : </h3> ";
		// 	echo "<h3 style= 'color:green'> Delivered </h3>";
		// }
		// else if($arr[$status] == "Returned Back"){

		// 	echo "<h3>Current Status of your courier is : </h3> ";
		// 	echo "<h3 style= 'color:#00008B'> Returned Back </h3>";
		// }
		// else if($arr[$status] == "Delayed/Not Delivered Yet"){

		// 	echo "<h3>Current Status of your courier is : </h3> ";
		// 	echo "<h3 style= 'color:#8B0000B'> Delayed/Not Delivered Yet </h3>";


	    // }

		$date = "May 16, 2022";
		$date = strtotime($date);
		$date = strtotime("+7 day", $date);
		$currDate = date('d-m-Y', $date);

		$delay = strtotime("+10 day", $date);
		$delayDate = date('d-m-Y', $delay);
		$today = date("d-m-Y");
		


		
		print "<center><table class='styled-table' id = 'headerTable'>
        <tr>
        <td>Order Number</td>
        <td>Status</td>
        <td>Current Location</td>
        <td>Delivery Charges(in Rupees)</td>
        
        </tr>";

			print "<tr class='active-row' style='width:100%'>";
		 
				
				print "<td>$track</td>";
				// print "<td>$arr[$status]</td>";
				if($arr[$status] == "In Transit"){
					print "<td style= 'color:#F6BE00'>$arr[$status] and Courier will reach <br>you on or before $currDate</td>";
				}
				else if($arr[$status] == "Delivered"){
					print "<td style= 'color:green'>$arr[$status]</td>";
				}
				else if($arr[$status] == "Returned Back"){
					print "<td style= 'color:#00008B'>Courier returned back to its sender on $today</td>";
				}
				else if($arr[$status] == "Delayed/Not Delivered Yet"){
					print "<td style= 'color:red'>Sorry for the inconvenience caused! <br>Your courier is delayed and will reach you by $delayDate</td>";
				}
				// print "<td>$row</td>";
				while ($row = $result->fetch_assoc()) {
					$ans =  $row['CurrentLocation'] ;
				}
				while ($row = $delivery->fetch_assoc()) {
					$a =  $row['DeliveryCharges'] ;
				}
				print "<td>$ans</td>";
				print "<td>$a</td>";
			print"</tr>";
		

		
	
	
}
else{
	// header('location:error.php');
    print "<center><table class='styled-table' id = 'headerTable'>
        <tr>
        <td>Order Number</td>
        <td>Status</td>
        
        </tr>";

			print "<tr class='active-row' style='width:100%'>";
		 
				
				print "<td style= 'color:red'>Invalid Tracking ID or E-mail</td>";
				print "<td style= 'color:red'>N.A.</td>";
				// print "<td>$arr[$status]</td>";
				
			print"</tr>";
}
$con->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Track Courier</title>
	<link rel="stylesheet" href="./buttonStyle.css">
	<style>
		body{
			width: 100%;
			background: linear-gradient(to top, rgba(0,0,0,0.5) 50%,rgba(0,0,0,0.5) 50%), url("delivery5.jpg");
			background-position: center;
			background-size: cover;
			height: 100vh;
		}
		.styled-table {
			border-collapse: collapse;
			
			margin: 200px 0;
			font-size: 0.9em;
			font-family: sans-serif;
			min-width: 400px;
			box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
		}	

		.styled-table thead tr {
			background-color: #009879;
			color: #ffffff;
			text-align: left;
		}

		.styled-table th,
		.styled-table td {
			padding: 12px 15px;
		}

		.styled-table tbody tr {
			
			border-bottom: 1px solid #dddddd;
		}

		.styled-table tbody tr:nth-of-type(even) {
			background-color: #f3f3f3;
		}

		.styled-table tbody tr:last-of-type {
			border-bottom: 2px solid #009879;
		}

		.styled-table tbody tr.active-row {
			font-weight: bold;
			color: #009879;
		}
	</style>
</head>
<body>
	<script>
		function fnExcelReport()
		{
			var tab_text="<table border='2px'><tr bgcolor='#87AFC6'>";
			var textRange; var j=0;
			tab = document.getElementById('headerTable'); // id of table

			for(j = 0 ; j < tab.rows.length ; j++) 
			{     
				tab_text=tab_text+tab.rows[j].innerHTML+"</tr>";
				//tab_text=tab_text+"</tr>";
			}

			tab_text=tab_text+"</table>";
			tab_text= tab_text.replace(/<A[^>]*>|<\/A>/g, "");//remove if u want links in your table
			tab_text= tab_text.replace(/<img[^>]*>/gi,""); // remove if u want images in your table
			tab_text= tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); // reomves input params

			var ua = window.navigator.userAgent;
			var msie = ua.indexOf("MSIE "); 

			if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer
			{
				txtArea1.document.open("txt/html","replace");
				txtArea1.document.write(tab_text);
				txtArea1.document.close();
				txtArea1.focus(); 
				sa=txtArea1.document.execCommand("SaveAs",true,"Say Thanks to Sumit.xls");
			}  
			else                 //other browser not tested on IE 11
				sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text));  

			return (sa);
		}
	</script>
	<!-- <iframe id="txtArea1" style="display:none"></iframe> -->
	<button id="btnExport" style="--content: 'Download Invoice';" onclick="fnExcelReport();" > 
		<div class="left"></div>
		<!-- Hover me! --> Download Invoice
		<div class="right"></div>
	</button>
	<svg style="width:2em;height:2em;position:fixed;top:1em;left:1em;opacity:.8;" viewBox="0 0 24 24"><path fill="#fff" d="M17.71,9.33C18.19,8.93 18.75,8.45 19,7.92C18.59,8.13 18.1,8.26 17.56,8.33C18.06,7.97 18.47,7.5 18.68,6.86C18.16,7.14 17.63,7.38 16.97,7.5C15.42,5.63 11.71,7.15 12.37,9.95C9.76,9.79 8.17,8.61 6.85,7.16C6.1,8.38 6.75,10.23 7.64,10.74C7.18,10.71 6.83,10.57 6.5,10.41C6.54,11.95 7.39,12.69 8.58,13.09C8.22,13.16 7.82,13.18 7.44,13.12C7.81,14.19 8.58,14.86 9.9,15C9,15.76 7.34,16.29 6,16.08C7.15,16.81 8.46,17.39 10.28,17.31C14.69,17.11 17.64,13.95 17.71,9.33M12,2A10,10 0 0,1 22,12A10,10 0 0,1 12,22A10,10 0 0,1 2,12A10,10 0 0,1 12,2Z" /></svg>
</body>
</html>