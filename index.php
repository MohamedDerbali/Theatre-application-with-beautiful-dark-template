<?php
include_once "core/eventsC.php";
include_once "entities/events.php";
include_once "connection/config.php";
$c= new eventsC();
$data=$c->getAllevent();
//var_dump($data);
?>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>HomePage</title>
<link rel="shortcut icon" href="assets/icons/favicon.ico">
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
   <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/cadre.css" rel="stylesheet"/>
    <style>
        img{
            -webkit-transition: -webkit-transform .8s ease-in-out;
            transition:         transform .8s ease-in-out;
        }
        img:hover{
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg)
        }
        p{
            width: 70%;
            font-size: 25px;
            display: block;
            text-align: center;
        }

        .char{
            font-size: 40px;
            height: 40px;
            animation: an 1s ease-out 1 both;
            display: inline-block;
        }

        @keyframes an{
            from{
                opacity: 0;
                transform: perspective(500px) translate3d(-35px, -40px, -150px) rotate3d(1, -1, 0, 35deg);
            }
            to{
                opacity: 1;
                transform: perspective(500px) translate3d(0, 0, 0);
            }
        }
        .mylink{
            position: absolute;
            z-index: 150;
            bottom: 0;
            right: 0;
            width: 100%;
            text-align: right;
            padding: .6rem;
        }

        .mylink a{
            font-family: Calibri;
            color: #fff;
            border-bottom: 1px solid #fff;
            opacity: .5;
            transition: opacity .3s;
            text-decoration: none
        }
        .mylink a:hover{
            opacity: 1
        }</style>
</head>
<body class="container">

<img style="width: 120px;margin-left: -100px;margin-bottom: -150px;height: 150px;" src="assets/img/logo.png"/>
<div class="topnav" id="myTopnav">

    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
    <a id="navigation" href="#home" style="border-radius: 20px;" class="active">Home</a>
    <a id="navigation" href="#About" style="border-radius: 20px;">About</a>
    <a id="navigation"  href="#Program" style="border-radius: 20px;">Program</a>
    <a id="navigation"  href="#Contact" style="border-radius: 20px;">Contact</a>
    <?php
    session_start();
    if(!empty($_SESSION)) {
         ?>
    <button onclick="location.href='logout.php';" style="margin-top:25px;margin-left:480px;width: 60px;height: 25px;" class="btn btn-secondary btn-sm">Logout</button>
    <div  style="margin-left: 900px;margin-top: 100px;height: 50px;width: 50px;" class="brand_logo_container">
        <img src="uploads/<?php echo $_SESSION['photo']; ?>" style="margin-left: -10px;margin-top: -10px;height: 50px;width: 50px;" class="brand_logo" alt="Logo">


        <h6 style="width:25px;"><?php echo $_SESSION['nom_prenom']; ?></h6>

        <?php
    } else{

    ?>
            <button style="margin-left: 700px;"  type="button" class="btn btn-secondary btn-sm" onclick="location.href='log.php';">Login</button>
&nbsp;
&nbsp;
            <button type="button" style="margin-left: -15px;" class="btn btn-secondary btn-sm" onclick="location.href='Signup.php';">Sign Up</button>
 <?php } ?>
</div>

</div>
    <div id="page">

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>


        <div style="margin-left: -80px;" id="container"></div>

        <div class="clearfix"></div>
        <br>
        <H1 style="margin-left: -40px;">ALREADY GOING</H1>


</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
    <?php foreach ($data as $d ) {
        if($d['name_event']=='WORKSHOP'){
        ?>

    <div class="row d-flex justify-content-center">

        <!--Grid column-->

            <h1><?php echo  $d['name_event']; ?></h1>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

    </div>
       <div>
           <img style="margin-top:-150px; width: 500px;resize: both;float: right;height: 600px;" src="assets/img/<?php echo $d['picture']; ?>" >
       <div style="margin-left:-20px;">
        <span style="align:center;" id="text"><p><?php echo $d['descr']; ?></p></span><br>
       </div><div style="text-align:center;">
               <button style="" class="btn btn-dark" onclick="location.href='Reservation.php';">Book</button>

           </div>
       </div>

           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>
           <br>

<?php }
    elseif ($d['name_event']=='CAMPING')
    {

        ?>

    <div class="row d-flex justify-content-center">

        <!--Grid column-->

        <h1><?php echo  $d['name_event']; ?></h1><br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

    </div>
    <div> <div >
        <img style="float: left;width: 800px;height: 600px;" src="assets/img/<?php echo $d['picture']; ?>" >

            <div>
                <span style="align:center;font-size: 18px;"><?php echo $d['descr']; ?></span><br>

            </div>





    </div><div style="text-align:center;">
            <button style="" class="btn btn-dark" onclick="location.href='Reservation.php';">Book</button>
    </div>
<br>
<br>
<br>      <br>
        <br>
        <br>
        <br>
<br>
  <?php
    }elseif($d['name_event']=='MUSIC'){
  ?>



            <!--Grid column-->


            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        <div style="text-align:center;">
            <h1><?php echo  $d['name_event']; ?></h1>

        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div>
            <img style="margin-top:-100px;float: right;width: 450px;height: 600px;" src="assets/img/<?php echo $d['picture']; ?>" >
            <div style="margin-left:90px;">
                <span style="align:center;font-size: 25px;" id="hs"><?php echo $d['descr']; ?></span><br>
            </div><div style="text-align:center;">
                <button style="" class="btn btn-dark" onclick="location.href='Reservation.php';">Book</button>
            </div>
        </div>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
<?php }elseif ($d['name_event']=='LUMA')
  {

        ?>

        <div class="row d-flex justify-content-center">

            <!--Grid column-->

            <h1><?php echo  $d['name_event']; ?></h1>

        </div>
        <div>
            <div style="text-align:center;">
                <img style="width: 900px;height: 400px;" src="assets/img/<?php echo $d['picture']; ?>" >

            </div>




<br>

            <div style="margin-left:150px;text-align:center;width: 800px;">
                <span style="align:center; font-size: 20px;" id="ts"><?php echo $d['descr']; ?></span><br>

            </div>


            </div><div style="text-align:center;">
      <button style="" class="btn btn-dark" onclick="location.href='Reservation.php';">Book</button>
            </div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
            <?php  } }?>




<!-- Footer -->
<footer class="page-footer font-small cyan darken-3">

    <!-- Footer Elements -->
    <div class="container">

        <!-- Grid row-->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-12 py-5">
                <div class="mb-5 flex-center">

                    <!-- Facebook -->
                    <a class="fb-ic">
                        <i class="fa fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <!-- Twitter -->
                    <a class="tw-ic">
                        <i class="fa fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <!-- Google +-->
                    <a class="gplus-ic">
                        <i class="fa fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <!--Linkedin -->
                    <a class="li-ic">
                        <i class="fa fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <!--Instagram-->
                    <a class="ins-ic">
                        <i class="fa fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
                    </a>
                    <!--Pinterest-->
                    <a class="pin-ic">
                        <i class="fa fa-pinterest fa-lg white-text fa-2x"> </i>
                    </a>
                </div>
            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row-->

    </div>
    <!-- Footer Elements -->
<h3 style="margin-left: 150px;">OUR OFFICE</h3>
    <!-- Copyright -->
    <img src="assets/img/maps.png" id="imgg" style="width: 200px;height: 100px;margin-left: 150px;" onClick="document.getElementById('imgg').style.width='500px';" />
    <div class="footer-copyright text-left py-3" style="margin-left: 150px;">65 Jay Street Bar, Jay Street,<br>
        Brooklyn, NY
    </div>
    <!-- Copyright -->


</footer>

<!-- Footer -->
<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script>

<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/Myjs.js"></script>

</body>


</html>