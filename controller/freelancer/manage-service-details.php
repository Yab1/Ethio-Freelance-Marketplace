<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
include_once "$_SERVER[DOCUMENT_ROOT]/free/model/freelancer/manage-service-details.php";

if(isset($_SESSION["s_id"])){
    $s_id=$_SESSION["s_id"];
}
if(isset($_POST['edit']))
{
    $sid=$_SESSION['s_id'];

$delete=new Project_Detail();
$delete->delete_project();
}
$service_detail = new Service_Detail();

$service_detail->ServiceDetail();

?>