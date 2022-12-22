<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
include_once"$_SERVER[DOCUMENT_ROOT]/free/model/freelancer/edit-freelancer.php";
if(isset($_SESSION['user_id'])){
    
    $username = $_SESSION['user_id'];
}
else{
    $username="";
     header("location: index.php");
}


if(isset($_POST['editFrelancer']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$dob=date('y-m-d', strtotime($_POST['dob']));
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$address=$_POST['address'];
$bio=$_POST['bio'];
$prof_title=$_POST['prof_title'];
$education=$_POST['education'];
$experience=$_POST['experience'];


$edit_freelancer=new Edit_Freelancer($fname,$lname,$bio,$dob,$gender,$phone,$email,$address,$prof_title,$education,$experience);
$edit_freelancer->update_freelancer();
}
?>

