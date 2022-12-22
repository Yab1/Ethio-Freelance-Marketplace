<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
include_once"$_SERVER[DOCUMENT_ROOT]/free/model/employer/edit-project.php";
if(isset($_SESSION['user_id'])){
    
    $username = $_SESSION['user_id'];
}
else{
    $username="";
    header("location: index.php");
}
if(isset($_SESSION["job_id"])){
    $job_id=$_SESSION["job_id"];
}

if(isset($_POST['edit']))
{
$name=$_POST['name'];
$description=$_POST['description'];
$category=$_POST['category'];
$budget=$_POST['budget'];
$skill=$_POST['skill'];
$jid=$_SESSION['job_id'];

$edit=new Edit_Project($name,$description,$category,$skill,$budget);
$edit->update_project();


}
?>

