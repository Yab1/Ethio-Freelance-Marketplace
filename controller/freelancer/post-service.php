<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
include_once"$_SERVER[DOCUMENT_ROOT]/free/model/freelancer/post-service.php";


if(isset($_POST['postservice']))
{
$name=$_POST['name'];
$description=$_POST['description'];
$category=$_POST['category'];
$pay_rate=$_POST['pay_rate'];
$username=$_POST['username'];


$service=new Service($name,$description,$category,$pay_rate,$username);
$add_service = $service->postservice();
}
?>

