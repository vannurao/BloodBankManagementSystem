<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
   <div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
    <div id="full2" style="background-image:url(./images/blood4.webp); ">
        <div id="inner_full">
            <div id="header">
                <h2> <a href="admin-home.php"><span id="blood">Blood Bank Management System </span></a></h2>
            </div>
            <div id="admin2">
                <br> 
                <?php
                $un = $_SESSION['un'];
                if(!$un)
                {
                    header("Location:index.php");
                }
                ?>
                <h1 align="center">Welcome Admin</h1> <br> <br> 
                <ul class="list">
                    <li class="underList"><a href="donor-red.php">Donor Registration</a></li>
                    <li class="underList"><a href="donor-list.php">Donor List</a></li>
                    <li class="underList"><a href="stock-blood-list.php">Stock Blood List</a></li>
                </ul>
            </div>
            <div id="footer"><h4 align="center">Copyright@myprojecthd</h4>
            <p align="center"><a href="Logout.php"><font color="white">Logout</font></a>
            </p>
            </div>
        </div>
    </div>
    </div>
</div>
</body>
</html>