<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
include_once "$_SERVER[DOCUMENT_ROOT]/free/model/employer/manage-project-details.php";

if(isset($_SESSION["job_id"])){
    $job_id=$_SESSION["job_id"];
}
if(isset($_POST['edit']))
{
    $jid=$_SESSION['job_id'];

}
if(isset($_POST["f_user"])){
    $_SESSION["usr_id"]=$_POST["f_user"];
    header("location: view-freelancer.php");
}
if(isset($_POST["cv"])){
    header("location: view-cv.php");
}

$project_detail= new Project_Detail();
$project_detail->ProjectDetail();
$bid=new Project_Detail();
$bid->ViewBid();
$view= new Project_Detail();
$view->ViewFreelancer();
$cv= new Project_Detail();
$cv->ViewCv();



?>