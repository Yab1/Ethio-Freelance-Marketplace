<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
include_once "$_SERVER[DOCUMENT_ROOT]/free/model/admin/service.php";
if(isset($_POST["sid"])){
    $_SESSION["s_id"]=$_POST["sid"];
   header("location: index.php");

}
if(isset($_POST["sid"])){
    $_SESSION["s_id"]=$_POST["sid"];
   header("location: service-details.php");

}

$service = new Service();

$service->viewservice();

?>