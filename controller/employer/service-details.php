<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
include_once "$_SERVER[DOCUMENT_ROOT]/free/model/employer/service-details.php";

if(isset($_SESSION["s_id"])){
    $s_id=$_SESSION["s_id"];
}

$service_detail = new Service_Detail();

$service_detail->ServiceDetail();

?>