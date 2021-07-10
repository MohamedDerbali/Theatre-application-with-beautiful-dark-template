<?php
session_start();
if(!empty($_SESSION))
{
    session_destroy();

}
header('location:index.php');
?>