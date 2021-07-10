<?php
include_once "entities/user.php";
include_once "core/userC.php";
include_once "connection/config.php";
$db = config::getConnexion();
$uploads_dir = './uploads';
session_start();
if (!empty($_POST))
{
    $avc=new userC();

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
   if( move_uploaded_file($tmp,$uploads_dir.'/'.$photo)){
       echo 'moved!!';

   }else {
       echo 'error';
   }
    $avc->modifieruser($usrr,$_SESSION['id']+0);
    var_dump($avc);





    $_SESSION['nom_prenom']=$_POST['fullname'];
    $_SESSION['dateNaiss']=$_POST['date'];
    $_SESSION['mail']=$_POST['email'];
    $_SESSION['tel']=$_POST['tel'];
    $_SESSION['photo']=$_FILES['photo']['name'];
    $_SESSION['gender']=$_POST['gender'];
    $_SESSION['mdp']=$_POST['pwd'];
    }
var_dump($_SESSION);

  header('location:modifuser.php');

?>