<?php
include_once "core/eventsC.php";
include_once "entities/events.php";
include_once "connection/config.php";
session_start();
$c= new eventsC();
$data=$c->getAllevent()->fetchAll();/*
foreach ($dm as $p)
{
    $data=$p;
}*/
//var_dump($data);


if(empty($_SESSION)) {
    header('location:log.php');
} else{

?>
<html>

<head>
    <title>Réservation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 ">
   <link rel="shortcut icon" href="assets/img/music.png">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet"/>
    <link href="assets/css/cadre.css" rel="stylesheet"/>
    <link href=
          'https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css'
          rel='stylesheet'>
    <style>
        .ui-datepicker {
            width: 16em;
        }
        h1{
            color:green;
        }
        .input_dt{
            border-color:whitesmoke;
            border-left:none;
            padding: 15px;
            background-color: black;
            box-shadow: none !important;
            outline: 0px !important;
            width: 50px;
            height: 45px;
        }
        .input_dt:focus{
            border: 2px solid black;
            padding: 26px;
            background-color: white;
        }
    </style>
    <link href="assets/css/datepicker/daterangepicker.css" rel="stylesheet"></link>
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
<form method="post" action="ResP.php">

<div style="margin-top: -70px;" class="container h-100">
    <div class="d-flex justify-content-center h-100">
        <div class="d-flex justify-content-center form_container">
        <div class="user_card">

                <div  class="dropdown">
                    <select class="btn btn-dark" style="margin-left: 150px; width:190px;" name="choose">
                        <option selected="Choose an Event">- Choose an Event -</option>
                        <?php foreach ($data as $dt){ ?>


                            <option value="<?php echo $dt['name_event']; ?>"><?php echo $dt['name_event']; ?></option>

                        <?php } ?>

                    </select>
                </div>
<br>
<br>
<br>
<br>
<br>



            <div class="input-group date" style="width:300px;margin-left: 110px;margin-right: 20px;"  data-provide="datepicker">
                <div class="input-group-append">

                    <i class="fa fa-calendar icon"></i>
                </div>


                <input style="width:50px;" type="text" name="dateY" class="form-control input_dt js-datepicker"  value="" placeholder="Date">
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
&nbsp;
                <div class="input-group-append">

                    <i class="fa fa-calendar icon"></i>
                </div>


                <input style="width:50px;" type="text" name="dateX" class="form-control input_dt js-datepicker"  value="" placeholder="Date">

            </div>
<br>

            <textarea style="background-color:black;color:white;width:330px;height:200px;margin-left: 85px;padding-left: 80px;padding-right: 80px;padding-top:30px; " type="text" value="" name="comment" placeholder="Expectation"></textarea>
<br>

            <input type="submit" value="BOOK" onclick="alert('Reserved Successfully !')" style="color:black;width: 330px;margin-left:85px;" class="btn btn-secondary"/>
        <br>
        </div>

        </div>
    </div>

</div>

</form>
<script type="javascript">

</script>
<script src="assets/js/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/css/datepicker/daterangepicker.js"></script>
<script src="assets/css/datepicker/moment.min.js"></script>
<script>
    $(document).ready(function() {

        $(function() {
            $("#datep").datepicker({ format: 'mm/dd/yyyy',
                startDate: '-3d'});
        });
    })
</script>

</body>
</html>
<?php }
?>
