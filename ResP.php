
 <?php
include_once "entities/Reservation.php";
include_once "core/ReservationC.php";
  include_once "connection/config.php";
 $db = config::getConnexion();
 if (!empty($_POST))
  {$avc=new ReservationC();
      session_start();
    
    $usr=$_SESSION['id'];
    $event=$_POST['choose'];
    $comment=$_POST['comment'];
      $datee=$_POST['dateY'];
      $datetwo=$_POST['dateX'];


    $sql = "select id from event where name_event='$event'";

   $recherchetable =$db->prepare($sql);
    $recherchetable->execute();
    $r = $recherchetable->fetchALL();
      foreach ($r as $item) {
          $eventid=$item['id'];
    }
     // var_dump($eventid);
      $av=new Reservation( $usr+0,$eventid+0,$datee,$datetwo, $comment);
var_dump($av);

$avc->Reserve($av);



     header('location:affRes.php');


}
?>