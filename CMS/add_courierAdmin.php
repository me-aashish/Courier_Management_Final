<?php
  
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "courier_db");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 5 values from the form data(input)
        $sname =  $_REQUEST['sname'];
        $semail = $_REQUEST['semail'];
        $sphone =  $_REQUEST['sphone'];
        $weight = $_REQUEST['weight'];
        $scountry = $_REQUEST['scountry'];
        $sadd = $_REQUEST['sadd'];
        $rname = $_REQUEST['rname'];
        $remail = $_REQUEST['remail'];
        $rphone = $_REQUEST['rphone'];
        $rcountry = $_REQUEST['rcountry'];
        $radd = $_REQUEST['radd'];
        $amount = $_REQUEST['amount'];
        
        $today = date("Ymd");
        $rand = strtoupper(substr(uniqid(sha1(time())),0,4));
        $unique = $today . $rand;  
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO tbl_courier_add_admin(OrderNumber, SenderName,SenderEmail,SenderPhone,Weigth,SenderCountry,SenderAddress,ReceiverName,ReceiverEmail,ReceiverPhone,ReceiverCountry,ReceiverAddress,DeliveryCharges)  VALUES ('$unique', '$sname', 
            '$semail','$sphone','$weight','$scountry', '$sadd', '$rname', '$remail', $rphone, '$rcountry', '$radd', '$amount')";
          
          
        //   echo $unique = $today . $rand;

        if(mysqli_query($conn, $sql)){
            echo "<h3 class = 'add'><center>Courier Added Successfully! <br>Unique order no. is $unique</h3>"; 
  
            
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
            <style>
                body{
                    width: 100%;
                    background: linear-gradient(to top, rgba(0,0,0,0) 100%,rgba(0,0,0,0) 100%), url("delivery5.jpg");
                    background-position: center;
                    background-size: cover;
                    height: 100vh;
                }
                .add{
                    margin: 200px 0;
                    font-weight: bold;
                    font-size : 50px;
			        color: #1434A4;
                }
            </style>
        </head>
        <body>
            
        </body>
        </html>