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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body >
    <div class="div">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Blood Bank</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                 
              </div>
            </div>
          </nav>
    </div>
<div class="container-fluid">
    <section class="image">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="./images/blood.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./images/blood2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="./images/blood3.png" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
</div>
  </section>
<div class="container">
    <div id="full" style="background-image:url(./images/blood4.webp);">
        <div id="inner_full">
            <div id="header">
                <h2> <span id="blood">Blood Bank Management System</span></h2>
            </div>
            
            <div id="index">
                <br> <br> <br> <br> <br>
                <form action="" method="post">
                <table align="center">
                    <tr>
                        <td width="200px" height="70px" id="td"> <b> Enter Username </b></td>
                        <td width="200px" height="70px"><input type="text" name="un" placeholder="Enter Username" style="width:180px; height:30px; border-radius:10px;"></td>
                    </tr>
                    <tr>
                        <td width="200px" height="70px" id="td"> <b> Enter Password </b></td>
                        <td width="200px" height="70px"><input type="text" name="ps" placeholder="Enter Password" style="width:180px; height:30px; border-radius:10px;"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="sub" value="Login" style="width:70px;height:40px;
                            border-radius: 5px;"></td>
                    </tr>
                </table>
            </form>

            <?php
            if(isset($_POST['sub'])){
                echo $un=$_POST['un'];
                echo $ps=$_POST['ps'];
                $q = $db->prepare("SELECT * FROM admin WHERE uname='$un' && pass='$ps' ");
                $q->execute();
                $res = $q->fetchAll(PDO::FETCH_OBJ);
                if($res){
                    $_SESSION['un']=$un;
                    header("Location:admin-home.php");
                }else{
                    echo "<script>alert('Wrong User')</script>";
                }
            }
            ?>
            </div>
            <div id="footer"><h4 align="center">Copyright@myprojecthd</h4>
            <p align="center"><a href="Logout.php"><font color="black">Logout</font></a>
            </p>
            </div>
        </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>