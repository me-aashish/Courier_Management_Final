<?php
	session_start();
?> 

<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>FastCargo</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./css">
</head>
<body>
    
    
        <div class="main" >
            <div class="navbar">
                <div class="icon">
                    <h2 class="logo">FastCargo</h2>
                </div>

                <div class="menu">
                    <ul>
                        <li><a href="#">HOME</a></li>
                        <li><a href="./about.html">ABOUT</a></li>
                        <li><a href="./login.php">ADMIN LOGIN</a></li>
                        <li><a href="./addCourier.html">PLACE ORDER</a></li>
                        <li><a href="./contactpage.php">CONTACT</a></li>
                    </ul>
                </div>

            </div> 
            <div class="content">
                <h1><br><span>Courier Management</span> <br></h1>
                <p class="par">FastCargo is simple and easy to use Courier management software.
                    <br> With the use of this software, tracking your courier will not be a cumbersome task.
                    <br>So that business of yours can focus on growing their business.</p>

                    <div class="form">
                        <form  id="login" action="trackerValidate.php" method="post">
                        <h2>Track Your Courier Here!</h2>
                        <input type="text" name = "email" email="user" class="input-field" placeholder="Email Id" required>
                        <input type="text" name = "trackerid" class="input-field" placeholder="Tracking Number" required>
                        <button type="submit" class="btnn">Track!</button>
                    </form>    

                        <div class="icons">
                            <h4>Follow Us</h4>
                            <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                            <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                            <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                        </div>

                    </div>
                        </div>
                    </div>
            </div>
        </div>
        
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>