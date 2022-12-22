<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
include_once "$_SERVER[DOCUMENT_ROOT]/free/model/admin/freelancers.php";


if(isset($_POST["uid"])){
	$_SESSION["user"]=$_POST["uid"];
	header("location: freelancer-details.php");
}

$view = new Freelancer_View();

$free = $view->view_freelancer();


?>