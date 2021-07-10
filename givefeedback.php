
 <?php
include_once "entities/avis.php";
include_once "core/avicC.php";
  include_once "connection/config.php";
 $db = config::getConnexion();
 if (!empty($_POST))
  {$avc=new avicC();
      session_start();
    
    $usr=$_SESSION['id'];
    $event=$_POST['choose'];
    $comment=$_POST['comment'];
    $star=doubleval($_POST['rating']);
//    var_dump($usr);
//    var_dump($event);
//    var_dump($comment);
//    var_dump($star);


    $sql = "select id from event where name_event='$event'";

   $recherchetable =$db->prepare($sql);
    $recherchetable->execute();
    $r = $recherchetable->fetchALL();
      foreach ($r as $item) {
          $eventid=$item['id'];
    }
     // var_dump($eventid);
      $av=new avis($eventid+0, $usr+0, $comment, $star);
//var_dump($av);

$avc->addavis($av);

      //var_dump($rl);

     header('location:avis.php');


}
?>