<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
include_once"$_SERVER[DOCUMENT_ROOT]/free/model/employer/hire.php";

if(isset($_POST['hire']))
{
$freelancer=$_POST['f_user'];
$price=$_POST['f_price'];
$job_id=$_POST['job_id'];

$hire=new Hire($job_id,$employer,$freelancer,$price);
$add = $hire->post();
}
?>
