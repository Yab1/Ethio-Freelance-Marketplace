<?php
include_once"$_SERVER[DOCUMENT_ROOT]/free/model/freelancer/apply.php";
if(isset($_SESSION["job_id"])){
    $job_id=$_SESSION["job_id"];
}
if(isset($_POST['apply']))
{
$cover=$_POST['cover'];
$bid=$_POST['bid'];




$apply=new Apply($cover,$bid);
$apply->apply_job();
}
?>