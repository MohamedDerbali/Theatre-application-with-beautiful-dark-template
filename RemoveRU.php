
 <?php
include_once "entities/Reservation.php";
include_once "core/ReservationC.php";
  include_once "connection/config.php";
 $db = config::getConnexion();

  $avc=new ReservationC();

$xRes=$_GET['idres'];

$avc->deleteuserRes($xRes+0);



    header('location:affRes.php');



?>