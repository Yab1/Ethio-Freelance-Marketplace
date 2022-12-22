<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
include_once"$_SERVER[DOCUMENT_ROOT]/free/model/admin/edit-admin.php";
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
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$uid=$_SESSION['user_id'];

$edit=new Edit_Admin($fname,$lname,$email,$gender,$phone);
$edit->update_admin();


}
?>

