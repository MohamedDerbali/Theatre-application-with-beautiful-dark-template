<?php
include_once "core/ReservationC.php";
include_once "core/eventsC.php";
include_once "entities/Reservation.php";

include_once "connection/config.php";
session_start();
$evt=new eventsC();
$c= new ReservationC();
$checked=$c->getEventChecked($_SESSION['id']+0)->fetchAll();


$y=array();
$tt=array();
foreach($evt->getAllevent()->fetchAll() as $x){
  array_push($y,$x['name_event']);

}
foreach($checked as $P) {

   array_push($tt,$P['name_event']);
}
$filteredArray = array_merge(array_diff($y, $tt));
//var_dump($filteredArray);




if(empty($_SESSION)) {
header('location:log.php');
} else{

?>
<html>
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
  #cnt{
      background-color: black;
      width: 200px;
      height: 100%;
      padding: 20px;
      border-radius: 10px;

  }
        #tt{  padding: 10px;
            background-color: black;
            width: 70px;
            height: 100%;
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

                    <h6 style="margin-top: 15px;"><?php echo $_SESSION['nom_prenom']; ?></h6>
                </div>
            </div>
            <div class="d-flex justify-content-center form_container">




            </div>

            <div class="col-md-5 offset-1  col-xs-12">

                  <?php  foreach ($checked as $dt){ ?>
                <div class="container row justify-content-between">
               <div class="col-4"> <div id="tt">
                   <a href="removeRes.php?idres=<?php echo $dt['id_res']; ?>"><img src="assets/img/tickk.png" style="width: 45px;height: 45px;"></a>
                   </div> </div>
                    <div class="col-4" >
                        <div id="cnt">
                         <span style="margin-left: 25px;">   <?php echo $dt['name_event']; ?>
                       </span> </div>
                   </div></div>
<br>
                <?php } ?>
                    <?php if(!empty($filteredArray)){
                    foreach ($filteredArray as $dttt){ ?>
                <div class="container row justify-content-between">
               <div class="col-4"> <div id="tt"> <img src="assets/img/croix.png" style="width: 45px;height: 45px;">
                   </div></div>

               <div class="col-4" >
                   <div id="cnt">
                       <span style="margin-left: 25px;"><?php echo $dttt; ?></span>
                   </div>
               </div>
                </div>
                 <br>   <?php } } ?>

            </div>
<br>
            <div class="col-md offset-1">
                <button type="button" class="btn btn-secondary" style="margin-left:10px;margin-top:-20px;width: 300px;">UNBOOK</button>
            </div>
            </div>

    </div>

</div>

<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
</body>
</html>
<?php }  ?>