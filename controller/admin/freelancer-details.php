<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
include_once "$_SERVER[DOCUMENT_ROOT]/free/model/admin/freelancers-detail.php";

if(isset($_SESSION["user"])){
    $user=$_SESSION["user"];
}

$free_detail = new Freelancer_Detail();

$free_detail->FreelancerDetail();

?>