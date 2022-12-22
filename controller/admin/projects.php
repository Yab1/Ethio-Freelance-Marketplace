<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
include_once "$_SERVER[DOCUMENT_ROOT]/free/model/freelancer/projects.php";
if(isset($_POST["sid"])){
    $_SESSION["s_id"]=$_POST["sid"];
   header("location: index.php");

}

if(isset($_POST["jid"])){
	$_SESSION["job_id"]=$_POST["jid"];
	header("location: project-details.php");
}

$view = new Project_View();

$project = $view->view_project();


?>