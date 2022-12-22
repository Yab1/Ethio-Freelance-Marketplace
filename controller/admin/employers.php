<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
include_once "$_SERVER[DOCUMENT_ROOT]/free/model/admin/employers.php";


if(isset($_POST["uid"])){
	$_SESSION["user"]=$_POST["uid"];
	header("location: ../../view/admin/employer-details.php");
}

$view = new Employer_View();

$emp = $view->view_employer();


?>