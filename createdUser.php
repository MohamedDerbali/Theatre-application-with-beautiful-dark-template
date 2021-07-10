<?php
include_once "entities/user.php";
include_once "core/userC.php";
include_once "connection/config.php";
$db = config::getConnexion();
$uploads_dir = './uploads';
if (!empty($_POST))
{$avc=new userC();

    $fullname=$_POST['fullname'];
    $email=$_POST['email'];

    $pass=$_POST['pwd'];
    $gender=$_POST['gender'];
    $dat=$_POST['date'];
    $tel=$_POST['tel'];
    $photo=$_FILES['photo']['name'];
    $newDate = date("Y-m-d", strtotime($dat));
    $tmp=$_FILES['photo']['tmp_name'];

    $usrr=new user($fullname, $newDate, $tel, $email, $pass, $photo, $gender);
    var_dump($usrr);
    //move_uploaded_file thez image men blassa t7otha fi blassa o5ra
   if( move_uploaded_file($tmp,$uploads_dir.'/'.$photo)){
       echo 'moved!!';

   }else {
       echo 'error';
   }
    $avc->ajouteruser($usrr);
    var_dump($avc);


    }

   header('location:log.php');

?>