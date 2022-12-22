<?php
include_once"$_SERVER[DOCUMENT_ROOT]/free/model/register.php";

if(isset($_POST['signup']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$dob=date('y-m-d', strtotime($_POST['dob']));
$username=$_POST['username'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$address=$_POST['address'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$usertype=$_POST['usertype'];


$obj=new Signup($fname,$lname,$dob,$username,$gender,$phone,$email,$address,$password,$cpassword,$usertype);
$obj->user_Register();
}
?>

