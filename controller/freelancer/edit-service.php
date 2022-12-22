<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
include_once"$_SERVER[DOCUMENT_ROOT]/free/model/freelancer/edit-service.php";
if(isset($_SESSION['user_id'])){
    
    $username = $_SESSION['user_id'];
}
else{
    $username="";
    header("location: index.php");
}
if(isset($_SESSION["s_id"])){
    $s_id=$_SESSION["s_id"];
}

if(isset($_POST['edit']))
{
$name=$_POST['name'];
$description=$_POST['description'];
$category=$_POST['category'];
$payrate=$_POST['payrate'];
$sid=$_SESSION['s_id'];

$edit=new Edit_Service($name,$description,$category,$payrate);
$edit->update_service();


}
?>

