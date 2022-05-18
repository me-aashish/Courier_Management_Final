<?php
    session_start();
    if(!isset($_SESSION['id'])){
      header('location:updateValidationForm.php');
    echo $_SESSION['id'];
  }
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


        $radd = $_REQUEST['radd'];
        $id = $_SESSION['id'];
        
        $sql = "UPDATE tbl_courier_add SET  CurrentLocation = '$radd' WHERE OrderNumber = '$id'";
          
          
        //   echo $unique = $today . $rand;

        if(mysqli_query($conn, $sql)){
            echo "<h3 class = 'add'><center>Courier Updated Successfully!"; 
            echo "<h5 ><center>(Redirecting in 5 seconds)"; 
  
            
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
      <script> 
        setTimeout(function(){
            window.location.href = './admin.php';
         }, 5000);
      </script>
        </html>