<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            background-image: url("666.jpg");
            background-repeat: no-repeat;
            background-size: 100% 100%;
            /* padding: 20px; */
            height: 100%;

            /* Center and scale the image nicely */
           
        }
        .try{
            width: 40%;
            border-radius: 4px;
            border-radius: 4px;
            position: relative;
            left: 30%;
        }
        #heading{
            color : black;
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
            <h1 id="heading">Contact Us</h1>
        <form action="messagereg.php" method="post">

            <label class="label" for="name">Name</label>
            <input type="text" id="name" name="name" placeholder="Your name.." required>

            <label class="label" for="email">Email</label>
            <input type="text" id="email" name="email" placeholder="Your email id.." required>
            <br>
            <label class="label" for="country">Country</label>
            <select id="country" name="country" required>
                <option>Country</option>
                <option value="australia">Australia</option>
                <option value="india">India</option>
                <option value="canada">Canada</option>
                <option value="usa">USA</option>
            </select>
            <hr>
            <label class="label" for="message">Message</label>
            <textarea id="message" name="msg" placeholder="Write something.." style="height:200px" required></textarea>

            <button type="submit" class="submit-btn">Submit</button>

        </form>
        <div>
            
        </div>
    </div>
</div>
</body>

</html>