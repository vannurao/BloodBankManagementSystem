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
<body >
    <div class="container">
    <div id="full3" style="background-image:url(./images/blood4.webp); ">
        <div id="inner_full">
            <div id="header">
                <h2> <a href="admin-home.php"><span id="blood">Blood Bank Management System</span></a></h2>
            </div>
            <div id="donarreg">
                <br> 
                <?php
                $un = $_SESSION['un'];
                if(!$un)
                {
                    header("Location:index.php");
                }
                ?>
                <h1 align="center">Donor Registration</h1>  
                <center><div id="form">
                    <form action="" method="post">
                    <table>
                        <tr>
                            <td width="200px" height="50px">Enter Name</td>
                            <td width="200px" height="50px"><input type="text" name="name" placeholder="Enter Name"></td>
                            <td width="200px" height="50px">Enter Father's Name</td>
                            <td width="200px" height="50px"><input type="text" name="fname" placeholder="Enter Father's Name"></td>
                        </tr>
                        <tr>
                            <td width="200px" height="50px">Enter Address</td>
                            <td width="200px" height="50px"><textarea name="address"></textarea></td>
                            <td width="200px" height="50px">Enter City</td>
                            <td width="200px" height="50px"><input type="text" name="city" placeholder="Enter City"></td>
                        </tr>

                        <tr>
                            <td width="200px" height="50px">Enter Age</td>
                            <td width="200px" height="50px"><input type="text" name="age" placeholder="Enter Age"></td>
                            <td width="200px" height="50px">Select Blood Group</td>
                            <td width="200px" height="50px">
                            <select name="bgroup">
                                <option>O+</option>
                                <option>AB+</option>
                                <option>AB-</option>
                            </select>
                            </td>
                        </tr>

                        <tr>
                            <td width="200px" height="50px">Enter E-mail</td>
                            <td width="200px" height="50px"><input type="text" name="email" placeholder="Enter E-mail"></td>
                            <td width="200px" height="50px">Enter Mobile No.</td>
                            <td width="200px" height="50px"><input type="text" name="mno" placeholder="Enter Mobile No."></td>
                        </tr>
                        <tr>
                        <td><input type="submit" name="sub" value="save"></td>
                    </tr>
                    </table>
                </form>
                <?php
                if(isset($_POST['sub']))
                {
                    $name=$_POST['name'];
                    $fname=$_POST['fname'];
                    echo $address=$_POST['address'];
                    $city=$_POST['city'];
                    $age=$_POST['age'];
                    echo$bgroup=$_POST['bgroup'];
                    $mno=$_POST['mno'];
                    $email=$_POST['email'];
                    $q = $db->prepare("INSERT INTO donor_registration (name,fname,address,city,age,bgroup,mno,email) VALUES(:name,:fname,:address,:city,:age,:broup,:mno,:email)");
                    $q->bindValue('name', $name);
                    $q->bindValue('fname', $fname);
                    $q->bindValue('address', $address);
                    $q->bindValue('city', $city);
                    $q->bindValue('age', $age);
                    $q->bindValue('broup', $bgroup);
                    $q->bindValue('mno', $mno);
                    $q->bindValue('email', $email);
                    if($q->execute())
                    {
                        echo "<script>alert('Donor Registration Successfull')</script>";
                    }
                    else
                    {
                        echo "<script>alert('Donor Registration fail')</script>";
                    }
                }
                
                ?>
                </div></center>
            </div>
            <div id="footer"><h4 align="center">Copyright@myprojecthd</h4>
            <p align="center"><a href="Logout.php"><font color="white">Logout</font></a>
            </p>
            </div>
    </div>
</div>
</body>
</html>