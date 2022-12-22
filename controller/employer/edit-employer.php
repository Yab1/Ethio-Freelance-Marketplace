<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
include_once"$_SERVER[DOCUMENT_ROOT]/free/model/employer/edit-employer.php";
if(isset($_SESSION['user_id'])){
    
    $username = $_SESSION['user_id'];
}
else{
    $username="";
    header("location: index.php");
}
if(isset($_POST['edit']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$bio=$_POST['bio'];
$dob=date('y-m-d', strtotime($_POST['dob']));
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$address=$_POST['address'];
$uid=$_SESSION['user_id'];

$edit=new Edit_Employer($fname,$lname,$bio,$dob,$gender,$phone,$email,$address);
$edit->update_employer();


}
?>

