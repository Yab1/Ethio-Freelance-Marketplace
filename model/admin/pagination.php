<?php 
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
include_once "$_SERVER[DOCUMENT_ROOT]/free/controller/employer/employer-profile.php";
if (isset($_GET['page'])) {
    $page = $_GET['page'];
}
else{
    $page = 1;
}

$num_per_page = 03;
$start_from = ($page-1)*03;
$total_page = ceil($profile->count_emp/$num_per_page );
$total_page_free = ceil($profile->count_free/$num_per_page );
$total_page_pro = ceil($profile->count_pro/$num_per_page );
$total_page_ser = ceil($profile->count_ser/$num_per_page );
$total_page_blog = ceil($profile->count_blog/$num_per_page );

$servername = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "freelance";

$con = mysqli_connect($servername, $dbuser, $dbpass, $dbname);

$sql = "SELECT * FROM project LIMIT $start_from,$num_per_page ";
$result=mysqli_query($con,$sql);
$resultcheck= mysqli_num_rows($result);

$sql5 = "SELECT * FROM blogger LIMIT $start_from,$num_per_page ";
$result5=mysqli_query($con,$sql5);
$resultcheck5= mysqli_num_rows($result5);

$sql1 = "SELECT * FROM service LIMIT $start_from,$num_per_page";
$result1=mysqli_query($con,$sql1);
$resultcheck1= mysqli_num_rows($result1);

$sql6 = "SELECT * FROM employer LIMIT $start_from,$num_per_page";
$result6 = mysqli_query($con,$sql6);
$resultcheck6= mysqli_num_rows($result6);

$sql7 = "SELECT * FROM freelancer LIMIT $start_from,$num_per_page";
$result7 = mysqli_query($con,$sql7);
$resultcheck7= mysqli_num_rows($result7);

?>