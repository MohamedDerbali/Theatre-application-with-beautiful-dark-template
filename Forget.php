<?php

require_once './vendor/autoload.php';
include_once "connection/config.php";
include_once "core/userC.php";
use Twilio\Rest\Client;

$pass=$_POST['phone'];
$usr=new userC();
$rl=$usr->forget($pass);
var_dump($rl);
foreach ($rl as $pop){
    $passwordd=$pop;
}
if(!empty($passwordd)){

   $sid = "AC8ff565b2fa7aa78b71e94a02fe81089f";
    $token = "b4bb093683fd5aa3cdad779b544072f1";

    $client = new Client($sid, $token);
    $message = $client->messages->create(
        '+216'.$pass, // Text this number
        array(
            'from' => '+17602010731', // From a valid Twilio number
            'body' => 'Hello , Your reset Password is : '.$passwordd['mdp'].' .  thanks for using our Password reset Service !'
        )
    );

    print $message->sid;}
header('location:forgetPass.php');

?>