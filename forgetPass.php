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
            <h1 style="text-align: center;">Password Reset :</h1>
            <br>
            <br>
           <div style="margin-left:100px;padding:10px;width:300px;height:250px;border-radius: 20%;margin-top:-50px;padding-top:50px;"> Please Provide us your Number So we can Send you The password of your Account !
               <form method="POST" action="Forget.php">
                   <input type="text" name="phone" placeholder="Write your Number ..."/>
               <input type="submit" value="Reset" class="btn btn-secondary" onclick="alert('check your mobile for your password')">
                   <input type="button" value="Login" class="btn btn-secondary" onclick="location.href='log.php';">
               </form>

           </div>


            </div>
        </div>
    </div>

</div>

<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
</body>
</html>