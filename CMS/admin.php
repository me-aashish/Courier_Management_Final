<?php
	session_start();
    if(!isset($_SESSION['admin_id'])){
        header('location:login.php');
    }
    $user = 'root';
    $password = '';
 

    $database = 'courier_db';
 
// Server is localhost with
// port number 3308
    $servername='localhost';
    $mysqli = new mysqli($servername, $user,
                $password, $database);
 
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}

    
    $sql = "SELECT * FROM tbl_courier_add_admin";
    $result = $mysqli->query($sql);
    $mysqli->close();
?> 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin_styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Admin Panel</title>
</head>

<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>FastCargo</h1>
        </div>
        <ul>
            <li><i class="fa fa-tachometer" aria-hidden="true"></i>&nbsp; <span>Dashboard</span> </li>
            <li><i class="fa fa-users" aria-hidden="true"></i>&nbsp;<span><a href="./team.html" class="btn">CMS STAFF</a></span> </li>
            <li><i class="fa fa-archive" aria-hidden="true"></i>&nbsp;<span><a href="./updateValidationForm.php" class="btn">Update Courier</a></span> </li>
            <li><i class="fa fa-truck" aria-hidden="true"></i>&nbsp;<span><a href="./add_courierAdmin.html" class="btn">Courier Management</a></span> </li>
            <!-- <li><i class="fa fa-cog" aria-hidden="true"></i>&nbsp;<span><a href="#" class="btn">Resource Management</a></span> </li> -->
            <li><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;<span><a href="./logout.php" class="btn">Sign Out</a></span> </li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                <div class="search">
                    <input type="text" placeholder="Search..">
                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </div>
                <div class="user">
                    <!-- <a href="#" class="btn">Add New</a> -->
                    <h4>Welcome, </h4>&nbsp;<?php echo $_SESSION['admin_id']; ?>
                    <!-- <i class="fa fa-bell" aria-hidden="true"></i> -->
                    <div class="img-case">
                        <i class="fa fa-user-circle" aria-hidden="true" fa-4x></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                        <h1>15 Courier</h1>
                        <h3 style="color:green;" >Delivered Today!</h3>
                    </div>
                    <div class="icon-case">
                        
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>25 Deliveries</h1>
                        <h3 style="color:#F6BE00;" >On-going...</h3>
                    </div>
                    <div class="icon-case">
                        
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>6 Courier</h1>
                        <h3 style="color:#8B0000;">Not Delivered</h3>
                    </div>
                    <div class="icon-case">
                        
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>8 Courier</h1>
                        <h3 style="color:#00008B;">Returned Successfully</h3>
                    </div>
                    <div class="icon-case">
                        
                    </div>
                </div>
            </div>
            <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>Courier Added Till Date</h2>
                        <!-- <a href="#" class="btn">View All</a> -->
                    </div>
                    <table>
                        <tr>
                            <th>Tracking ID</th>
                            <th>Source</th>
                            <th>Destination</th>
                            <!-- <th>Option</th> -->
                        </tr>
                        <?php   // LOOP TILL END OF DATA
                        $count = 4;
                        while($rows=$result->fetch_assoc())
                        {   
                    ?>
                    <tr>
                        <!--FETCHING DATA FROM EACH
                            ROW OF EVERY COLUMN-->
                        <td><?php echo $rows['OrderNumber'];?></td>
                        <td><?php echo $rows['SenderAddress'];?></td>
                        <td><?php echo $rows['ReceiverAddress'];?></td>
                        
                    </tr>
                            
                    <?php
                        
                        }
                    ?>
                        <!-- <tr>
                            <td>This number will be taken from backend</td>
                            <td></td>
                            <td>This number will be taken from backend</td>
                            <td>This number will be taken from backend</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>This number will be taken from backend</td>
                            <td>This number will be taken from backend</td>
                            <td>This number will be taken from backend</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr>
                        <tr>
                            <td>This number will be taken from backend</td>
                            <td>This number will be taken from backend</td>
                            <td>This number will be taken from backend</td>
                            <td><a href="#" class="btn">View</a></td>
                        </tr> -->
                    </table>
                </div>
                
            </div>
        </div>
    </div>
</body>

</html>