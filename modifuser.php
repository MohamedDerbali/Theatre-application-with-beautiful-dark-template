<?php
session_start();
if(empty($_SESSION)){
    header('location:log.php');

}else
{ ?>
<html>

<head>
    <title>signup</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 ">
   <link rel="shortcut icon" href="assets/img/music.png">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/signup.css" rel="stylesheet"/>
    <link href="assets/css/style.css" rel="stylesheet"/>
    <link href=
          'https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css'
          rel='stylesheet'>
    <style>
        #oo{

            right:0;position:absolute;
        }
        .ui-datepicker {
            width: 16em;
        }
        h1{
            color:green;
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
<div class="container h-100">
    <div class="d-flex justify-content-center h-100">
        <div class="user_card">
            <div class="d-flex justify-content-center" style=" margin-bottom: -50px;">
                <div class="brand_logo_container">
                    <img src="uploads/<?php echo $_SESSION['photo']; ?>" class="brand_logo" alt="Logo">
                </div>
            </div>
            <div class="d-flex justify-content-center form_container">
                <form method="POST" action="modification.php" enctype="multipart/form-data">
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <i class="fa fa-user icon"></i>
                        </div>
                        <input type="text" name="fullname" class="form-control input_user" value="<?php echo $_SESSION['nom_prenom']; ?>" placeholder="Fullname">
                    </div>


                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <i class="fa fa-envelope icon""></i>
                        </div>
                        <input type="text" name="email" class="form-control input_user" value="<?php echo $_SESSION['mail']; ?>" placeholder="Email">
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-append">

                            <i toggle="#password-field"  class="fa fa-eye icon toggle-password"></i>
                        </div>
                        <input type="password" id="password-field" name="pwd" class="form-control input_pass" value="<?php echo $_SESSION['mdp']; ?>" placeholder="********">

                    </div>

                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                           <?php if($_SESSION['gender']=='male') { ?>
                            <input type="radio" name="gender" id="male" value="male" checked>
                            <label for="male">Male</label>


                            <input type="radio" name="gender" id="female" value="female">
                            <label for="female">Female</label>
                            <?php }
                            else{ ?>
                                <input type="radio" name="gender" id="male" value="male" checked>
                            <label for="male">Male</label>


                            <input type="radio" name="gender" id="female" value="female">
                            <label for="female">Female</label>
                            <?php }


                            ?>
                        </div>

                    </div> <div class="form-group">
                    <div class="input-group date"  data-provide="datepicker">
                        <div class="input-group-append">

                            <i class="fa fa-calendar icon"></i>
                        </div>


                        <input type="text" name="date" class="form-control input_user js-datepicker" id="datep" value="<?php echo $_SESSION['dateNaiss']; ?>" placeholder="Date of birthday">
                    </div></div>
                    <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <i class="fa fa-phone icon"></i>
                        </div>
                        <input type="text" name="tel" class="form-control input_user" value="<?php echo $_SESSION['tel']; ?>" placeholder="+21600000000">
                    </div></div>
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="input-group-append">
                                    <i class="fa fa-picture-o icon"></i>
                                </div>
                                <input type="file" name="photo" style="border-top:1px whitesmoke solid;border-right:1px whitesmoke solid; width: 385px;height: 45px;border-bottom:1px whitesmoke solid; ;margin-top:0px;padding-top: 5px;." value="" />
                            </div></div>
                    <div class="d-flex justify-content-center mt-3 login_container">
                        <button type="submit" name="button" class="btn login_btn" >SAVE</button>
                    </div>
                </form>
            </div>

    </div>
</div>
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
        $(".toggle-password").click(function() {

            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    </script>

</body>
</html><?php } ?>