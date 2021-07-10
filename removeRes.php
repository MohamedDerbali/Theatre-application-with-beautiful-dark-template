<?php
include_once "core/ReservationC.php";
include_once "entities/Reservation.php";
include_once "connection/config.php";
session_start();
$res=$_GET['idres'];

if(empty($_SESSION)) {
header('location:log.php');
} else{

?>
<html>

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 ">
   <link rel="shortcut icon" href="assets/img/music.png">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/res.css" rel="stylesheet"/>
    <link href="assets/css/style.css" rel="stylesheet"/>
    <style>
        #tt{  padding: 10px;
            background-color: black;
            width: 250px;
            height: 100%;
        }

        .btn-secondary{
            margin-left: -25px;
            width: 300px;
        }
    </style>
   </head>

<body>
<div class="topnav" id="myTopnav">

    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
    <a id="navigation" href="#home" style="border-radius: 20px;" class="active">Home</a>
    <a id="navigation" href="#About" style="border-radius: 20px;">About</a>
    <a id="navigation"  href="#Program" style="border-radius: 20px;">Program</a>
    <a id="navigation"  href="#Contact" style="border-radius: 20px;">Contact</a>
    <button onclick="location.href='logout.php';" style="margin-top:25px;margin-left:480px;width: 60px;height: 25px;" class="btn btn-secondary btn-sm">Logout</button>
    <div  style="margin-left: 900px;margin-top: 80px;height: 50px;width: 50px;" class="brand_logo_container">
        <img src="uploads/<?php echo $_SESSION['photo']; ?>" style="margin-left: -10px;margin-top: -10px;height: 50px;width: 50px;" class="brand_logo" alt="Logo">


        <h6 style="width:25px;"><?php echo $_SESSION['nom_prenom']; ?></h6>

    </div>

</div>
<div class="container h-100">
    <div class="d-flex justify-content-center h-100">
        <div class="user_card">
            <div class="d-flex justify-content-center">
                <div class="brand_logo_container">
                    <img src="uploads/<?php echo $_SESSION['photo']; ?>" class="brand_logo" alt="Logo">
                </div>
            </div>
            <div class="d-flex justify-content-center form_container">




            </div>
            <div class="col-5 offset-2">
              <div id="tt">  <span style="background-color: black;color:gray;margin-left: 50px;">ARE YOU SURE ?</span><br>
              </div><br>
                <br>

                <button onclick="location.href='affRes.php';" class="btn btn-secondary" style="margin-bottom: 15px;">NO , KEEP IT</button>
                <br>
                <button onclick="location.href='RemoveRU.php?idres=<?php echo $res; ?>';" class="btn btn-secondary">UNBOOK</button>

            </div>
            <br>
        </div>
    </div>

</div>

<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
</body>
</html>
<?php } ?>