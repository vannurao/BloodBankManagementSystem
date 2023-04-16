<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta ="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="./css/style.css">
    <style type="text/css">
        td{
            width:200px;
            height:40px;
        }
    </style>
</head>
<body >
    <!-- style="background-image: url(./images/blood.jpg);height: 580px;background-repeat: no-repeat; " -->
    <div id="full5" style="background-image:url(./images/blood4.webp); ">
        <div id="inner_full">
            <div id="header">
                <h2> <a href="admin-home.php"><span id="blood">Blood Bank Management System</span></a></h2>
            </div>
            <div id="stock">
                <br> 
                <?php
                $un = $_SESSION['un'];
                if(!$un)
                {
                    header("Location:index.php");
                }
                ?>
                <h1 align="center">Stock Blood List</h1>  
                <center><div id="form">
                    <table>
                        <tr>
                            <td><center><b><font color="blue">Name</font></b></center></td>
                            <td><center><b><font color="blue">Qty</font></b></center></td>  
                        </tr>
                        <tr>
                            <td><center>O+</center></td>
                            <td><center>
                                <?php
                                $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='O+'");
                                echo $row=$q->rowcount();
                                ?>
                            </center></td>
                        </tr>

                        <tr>
                            <td><center>AB+</center></td>
                            <td><center>
                                <?php
                                $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='AB+'");
                                echo $row=$q->rowcount();
                                ?>
                            </center></td>
                        </tr>

                        <tr>
                            <td><center>AB-</center></td>
                            <td><center>
                                <?php
                                $q=$db->query("SELECT * FROM donor_registration WHERE bgroup='AB-'");
                                echo $row=$q->rowcount();
                                ?>
                            </center></td>
                        </tr>

                        
                        
                    </table>
                </div></center>
            </div>
            <div id="footer"><h4 align="center">Copyright@myprojecthd</h4>
            <p align="center"><a href="Logout.php"><font color="white">Logout</font></a>
            </p>
            </div>
    </div>
</body>
</html>