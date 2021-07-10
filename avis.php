<?php
include_once "core/eventsC.php";
include_once "entities/events.php";
include_once "connection/config.php";
$c= new eventsC();
$data=$c->getnameEv();
//var_dump($data);

session_start();
if(empty($_SESSION)) {
    header('location:log.php');
} else{

?>
<html>

<head>
    <title>avis</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 ">
   <link rel="shortcut icon" href="assets/img/music.png">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet"/>
    <link href="assets/css/cadre.css" rel="stylesheet"/>
    <link href="assets/css/rating.css" rel="stylesheet"/>
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
<form method="post" action="givefeedback.php">

<div style="margin-top: -70px;" class="container h-100">
    <div class="d-flex justify-content-center h-100">
        <div class="d-flex justify-content-center form_container">
        <div class="user_card">

                <div  class="dropdown">
                    <select class="btn btn-secondary" style="margin-left: 150px; width:190px;" name="choose">
                        <option selected="Choose an Event">- Choose an Event -</option>
                        <?php foreach ($data as $dt){ ?>

                            <option value="<?php echo $dt['name_event']; ?>"><?php echo $dt['name_event']; ?></option>

                        <?php } ?>

                    </select>
                </div>


            <br>
            <br>
            <br>
            <input type="hidden" $id="nomo" />
            <textarea  style="margin-left:60px;width:350px;height:100px;background-color: #1d2124;color: white;padding: 6px;" name="comment" placeholder="write a comment ..."></textarea>

            <br>
            <h6 style="color:gray;margin-left: 200px;">Rate Us</h6>
            <div id="etoile" style="margin-left: 155px;">
            <fieldset class="rating">
                <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                <input type="radio" id="star4half" name="rating" value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                <input type="radio" id="star3half" name="rating" value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                <input type="radio" id="star2half" name="rating" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                <input type="radio" id="star1half" name="rating" value="1.5" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                <input type="radio" id="starhalf" name="rating" value="0.5" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
            </fieldset>
            </div>
            <input type="submit" value="Send" onclick="alert('feedback Sent !')" style="width: 80px;margin-left:200px;" class="btn btn-secondary"/>
        </div>

        </div>
    </div>

</div>

</form>
<script type="javascript">

</script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
</body>
</html>
<?php }
?>
