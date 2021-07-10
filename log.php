<?php
session_start();
if(!empty($_SESSION)) {
header('location:index.php');
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
    <link href="assets/css/login.css" rel="stylesheet"/>
   </head>

<body>
<div class="container h-100">
    <div class="d-flex justify-content-center h-100">
        <div class="user_card">
            <div class="d-flex justify-content-center">
                <div class="brand_logo_container">
                    <img src="assets/img/512.png" class="brand_logo" alt="Logo">
                </div>
            </div>
            <div class="d-flex justify-content-center form_container">


                    <form method="POST" action="access.php">
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <i class="fa fa-envelope icon"></i>
                        </div>

                        <input type="text" name="email" class="form-control input_user" value="" placeholder="email">
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-append">
                            <i class="fa fa-key icon"></i>
                        </div>
                        <input type="password" name="pwd" class="form-control input_pass" value="" placeholder="********">
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                            <label style="color: #CAC6C6;" class="custom-control-label" for="customControlInline">Remember me</label>
                            <a style="color: #CAC6C6;margin-left: 120px;position: relative;"  href="forgetPass.php">Forgot your password?</a>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center mt-3 login_container">
                        <button type="submit" name="button" class="btn login_btn">LOGIN</button>




                    </div>
                </form>

            </div>
            <div class="mt-4">
                <div class="d-flex justify-content-center links">
                    Don't have an account?

                </div>  <div class="d-flex justify-content-center links">
                    <a href="Signup.php" style="color: #CAC6C6;" class="ml-2">Sign Up</a>

                </div>
               


            </div>
        </div>
    </div>

</div>

<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
</body>
</html>
<?php } ?>