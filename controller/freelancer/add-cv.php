<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
include_once"$_SERVER[DOCUMENT_ROOT]/free/model/freelancer/add-cv.php";


if(isset($_POST['addcv']))
{
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$dob=date('y-m-d', strtotime($_POST['dob']));
$address=$_POST['address'];
$education=$_POST['edu'];
$skill=$_POST['skill'];
$description=$_POST['description'];



$cv=new Cv($name,$phone,$email,$gender,$dob,$address,$education,$skill,$description);
$add_cv = $cv->addcv();
}
?>

