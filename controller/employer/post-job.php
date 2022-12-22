<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
include_once"$_SERVER[DOCUMENT_ROOT]/free/model/employer/post-job.php";

if(isset($_POST['postjob']))
{
$name=$_POST['name'];
$description=$_POST['description'];
$category=$_POST['category'];
$username=$_POST['username'];
$skill=$_POST['skill'];
$budget=$_POST['budget'];
$deadline=date("y/m/d");

$project=new Project($name,$description,$category,$username,$skill,$budget,$deadline);
$add = $project->post();
}
?>

