<html>

<head>
    <title>signup</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 ">
   <link rel="shortcut icon" href="assets/img/music.png">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/signup.css" rel="stylesheet"/>
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
    </style>
    <link href="assets/css/datepicker/daterangepicker.css" rel="stylesheet"></link>
   </head>

<body>
<div class="container h-100">
    <div class="d-flex justify-content-center h-100">
        <div class="user_card">
            <div class="d-flex justify-content-center" style=" margin-bottom: -50px;">
                <div class="brand_logo_container">
                    <img src="assets/img/512.png" class="brand_logo" alt="Logo">
                </div>
            </div>
            <div class="d-flex justify-content-center form_container">
                <!-- enctype(encryption type : te5ou form lkol tchouf les fichier eli 7atithom fih) !-->
                <form method="POST" action="createdUser.php" enctype="multipart/form-data">
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <i class="fa fa-user icon"></i>
                        </div>
                        <input type="text" name="fullname" class="form-control input_user" value="" placeholder="Fullname">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <i class="fa fa-envelope icon""></i>
                        </div>
                        <input type="text" name="email" class="form-control input_user" value="" placeholder="Email">
                    </div>
                    <div class="input-group mb-2">
                        <div class="input-group-append">
                            <i class="fa fa-key icon"></i>
                        </div>
                        <input type="password" name="pwd" class="form-control input_pass" value="" placeholder="********">
                    </div>

                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                            <input type="radio" name="gender" id="male" value="male" checked>
                            <label for="male">Male</label>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

                            <input type="radio" name="gender" id="female" value="female">
                            <label for="female">Female</label>
                        </div>

                    </div> <div class="form-group">
                    <div class="input-group date"  data-provide="datepicker">
                        <div class="input-group-append">

                            <i class="fa fa-calendar icon"></i>
                        </div>


                        <input type="text" name="date" class="form-control input_user js-datepicker" id="datep" value="" placeholder="Date of birthday">
                    </div></div>
                    <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <i class="fa fa-phone icon"></i>
                        </div>
                        <input type="text" name="tel" class="form-control input_user" value="" placeholder="+21600000000">
                    </div></div>
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <div class="input-group-append">
                                    <i class="fa fa-picture-o icon"></i>
                                </div>
                                <input type="file" name="photo" style="border-top:1px whitesmoke solid;border-right:1px whitesmoke solid; width: 385px;height: 45px;border-bottom:1px whitesmoke solid; ;margin-top:0px;padding-top: 5px;." value="" />
                            </div></div>
                    <div class="d-flex justify-content-center mt-3 login_container">
                        <button type="submit" name="button" class="btn login_btn" onclick="alert('User created successfully , You can login now');">SIGN UP</button>
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
    </script>

</body>
</html>