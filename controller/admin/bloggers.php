<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
include_once "$_SERVER[DOCUMENT_ROOT]/free/model/admin/bloggers.php";


if(isset($_POST["uid"])){
	$_SESSION["user"]=$_POST["uid"];
	header("location: ../../view/admin/blogger-detail.php");
}

$view = new Blogger_View();

$emp = $view->view_blogger();


?>