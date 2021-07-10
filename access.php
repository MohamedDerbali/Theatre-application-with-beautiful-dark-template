
 <?php

  include_once "connection/config.php";
 $db = config::getConnexion();
if(session_start()){
 session_destroy();}
 if(isset($_POST['email'])and isset ($_POST['pwd']))
  {session_start();
    
    $email=$_POST['email'];   
    $p=$_POST['pwd']; 
    
    $sql = "select * from utilisateur where mail='$email' and mdp='$p'";

    $recherchetable =$db->prepare($sql);
    $recherchetable->execute();
    $rl = $recherchetable->fetchALL();
   // var_dump($rl);

  if(!empty($rl))
  {foreach($rl as $rechercheliste){

$_SESSION['id']=$rechercheliste['id'];
$_SESSION['nom_prenom']=$rechercheliste['nom_prenom'];
$_SESSION['dateNaiss']=$rechercheliste['dateNaiss'];
$_SESSION['mail']=$rechercheliste['mail'];
$_SESSION['tel']=$rechercheliste['tel'];
$_SESSION['photo']=$rechercheliste['photo'];
$_SESSION['gender']=$rechercheliste['gender'];
$_SESSION['mdp']=$rechercheliste['mdp'];
$_SESSION['flash']="ok";
//redirection vers une autre page
      header('location:index.php');
      //to know the content of the variable
var_dump($_SESSION);
  }}
 else {

     header('location:log.php');

 }
}
?>