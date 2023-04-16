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
    <div id="full4" style="background-image:url(./images/blood4.webp); ">
        <div id="inner_full">
            <div id="header">
                <h2> <a href="admin-home.php"><span id="blood">Blood Bank Management System</span></a></h2>
            </div>
            <div id="donarlist">
                <br> 
                <?php
                $un = $_SESSION['un'];
                if(!$un)
                {
                    header("Location:index.php");
                }
                ?>
                <h1 align="center">Donor List</h1>  
                <center><div id="form">
                    <table>
                        <tr>
                            <td><center><b> <font color="blue">Name</font></b></center></td>
                            <td><center><b><font color="blue">City</font></b></center></td>
                            <td><center><b><font color="blue">Age</font></b></center></td>
                            <td><center><b><font color="blue">Blood Group</font></b></center></td>
                            <td><center><b><font color="blue">Mobile No.</font></b></center></td>
                            <td><center><b><font color="blue">Email</font></b></center></td>
                        </tr>
                        <?php
                        $q = $db->query("SELECT*FROM donor_registration");
                        while($rl=$q->fetch(PDO::FETCH_OBJ))
                        {
                            ?>
                            <tr>
                            <td><center><?= $rl->name; ?></center></td>
                            <td><center><?= $rl->city; ?></center></td>
                            <td><center><?= $rl->age; ?></center></td>
                            <td><center><?= $rl->bgroup; ?></center></td>
                            <td><center><?= $rl->mno; ?></center></td>
                            <td><center><?= $rl->email; ?></center></td>
                            
                        </tr>
                        <?php
                        }
                    ?>
                        
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