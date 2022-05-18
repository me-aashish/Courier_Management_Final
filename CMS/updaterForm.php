<?php
session_start();
  if(!isset($_SESSION['id'])){
    header('location:UpdateValidation.php');
    echo $_SESSION['id'];
}
else{
    echo $_SESSION['id'];
    $currID = $_SESSION['id'];
    $_SESSION['id'] = $currID;
}    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Courier</title>
    <style>
        input[type=text],
        select,
        textarea {
            width: 100%;
            /* Full width */
            padding: 12px;
            /* Some padding */
            border: 1px solid rgb(255, 255, 255);
            /* Gray border */
            border-radius: 4px;
            /* Rounded borders */
            box-sizing: border-box;
            /* Make sure that padding and width stays in place */
            margin-top: 6px;
            /* Add a top margin */
            margin-bottom: 16px;
            /* Bottom margin */
            resize: vertical
                /* Allow the user to vertically resize the textarea (not horizontally) */
        }

        .submit-btn {
            position: relative;
            left: 42%;
            background-color: #aa049c;
            color: rgb(255, 255, 255);
            background-color:#410338;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .submit-btn:hover {
            background-color: #7d0081;
        }

        .container {
            /* border-radius: 5px; */
            /* background-color: #f2f2f2; */ 
            /* background-image: url("666.jpg");
            width: 100%;
            background-position: center;
            background-size:cover;
            height: 100vh;
            padding: 20px; */
            background-image: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url("delivery5.jpg");
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
            background-attachment: fixed;
        }

        /* .sender{
            background-image: url("666.jpg");
            background-size:cover;
        } */
        .try{
            width: 40%;
            border-radius: 4px;
            border-radius: 4px;
            position: relative;
            left: 30%;
        }
        #heading{
            color:#2b88df;
            color:#410338;
            color:#c8b1b1;
            text-align: center;
            background-image: url("b22.jpg");
            border-radius: 5px;
            font-size: 40px;
            font-variant: small-caps;
            font-weight: 500;
            /* background-color: #004381; */
            /* border: 2px solid blue; */
            /* border-radius: 8px; */
        }
        .label{
            color: rgb(255, 255, 255);
            font-size: 20px;
            font-variant: small-caps;
            font-weight: 500;
            /* color:#ff00d9; */
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="try">
            <h1 id="heading">Updater</h1>
        <form action="updateCourier.php" method="post">
            <br>
            
            <br>
            <h1 style="color:rgb(147, 147, 179);">Update the current location for -  </h1>
            <h1 style = "color : #ff7200">Order Number <?php echo $_SESSION['id']; ?></h1>
            <hr>
            <label class="label" for="address">Current Address</label>
            <textarea id="ReceiverAdd" name="radd" placeholder="Address.." style="height:200px" required></textarea>


            <button type="submit" class="submit-btn">Update</button>

        </form>
        <div>
            
        </div>
    </div>
</div>
</body>

</html>