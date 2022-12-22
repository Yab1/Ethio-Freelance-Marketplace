<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
include_once "$_SERVER[DOCUMENT_ROOT]/free/model/freelancer/edit-cv.php";
include_once "$_SERVER[DOCUMENT_ROOT]/free/model/freelancer/view-cv.php";

$cv = new View_Cv();
$cv->view();
if(isset($_POST['editcv']))
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


$edit_cv =new Edit_Cv($name,$phone,$email,$gender,$dob,$address,$education,$skill,$description);
$edit_cv->update_cv();

}
?>