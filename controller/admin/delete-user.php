<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
include_once"$_SERVER[DOCUMENT_ROOT]/free/model/admin/delete-user.php";
if(isset($_SESSION['user_id'])){
    
    $username = $_SESSION['user_id'];
}
else{
    $username="";
    header("location: index.php");
}
if(isset($_SESSION["b_id"])){
    $job_id=$_SESSION["b_id"];
}

if(isset($_POST['delete_emp']))
{
$blog_id=$_POST['blog-id'];

$delete=new Delete($blog_id);
$delete->DeleteEmp();
}

if(isset($_POST['delete_free']))
{
$blog_id=$_POST['blog-id'];

$delete=new Delete($blog_id);
$delete->DeleteFree();
}
if(isset($_POST['delete_blogger']))
{
$blog_id=$_POST['blog-id'];

$delete=new Delete($blog_id);
$delete->DeleteBlogger();
}
?>

