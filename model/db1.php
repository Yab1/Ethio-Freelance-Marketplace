<?php 
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db.php";
include_once "$_SERVER[DOCUMENT_ROOT]/free/controller/employer/employer-profile.php";
if(isset($_SESSION['user_id'])){
    
    $username = $_SESSION['user_id'];
}
else{
    $username="";
}

$uid=$_SESSION['user_id'];

$servername = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "freelance";

$con = mysqli_connect($servername, $dbuser, $dbpass, $dbname);
$sql = "SELECT * FROM project  ";
$sql1 = "SELECT * FROM service ";
$sql2 = "SELECT * FROM project WHERE e_username='$uid'";
$sql3 = "SELECT * FROM service WHERE f_username='$uid'";
$sql4 = "SELECT * FROM apply WHERE f_username='$uid' and status='pending' ";
$sql5 = "SELECT * FROM apply WHERE f_username='$uid' and status='hired' ";
$sql6 = "SELECT * FROM support";
$sql8 =  "SELECT category, COUNT(category) FROM project GROUP BY category ORDER BY COUNT(category)  DESC LIMIT 3;";
$sql9 =  "SELECT f_username, COUNT(f_username) FROM hired GROUP BY f_username ORDER BY COUNT(f_username)  DESC LIMIT 5;";
$sql10 = "SELECT e_username, COUNT(e_username) FROM hired GROUP BY e_username ORDER BY COUNT(e_username)  DESC LIMIT 5;";
$sql11="SELECT * FROM user";
$sql12="SELECT * FROM messages WHERE incoming_msg_id='$uid' GROUP BY outgoing_msg_id";
$sql13="SELECT * FROM admin";

$result=mysqli_query($con,$sql);
$result1=mysqli_query($con,$sql1);
$result2 = mysqli_query($con,$sql2);
$result3 = mysqli_query($con,$sql3);
$result4 = mysqli_query($con,$sql4);
$result5 = mysqli_query($con,$sql5);
$result6 = mysqli_query($con,$sql6);
$result8 = mysqli_query($con,$sql8);
$result9 = mysqli_query($con,$sql9);
$result10 = mysqli_query($con,$sql10);
$result11=mysqli_query($con,$sql11);
$result12 = mysqli_query($con,$sql12);
$result13 = mysqli_query($con,$sql13);


$resultcheck= mysqli_num_rows($result);
$resultcheck1= mysqli_num_rows($result1);
$resultcheck2= mysqli_num_rows($result2);
$resultcheck3= mysqli_num_rows($result3);
$resultcheck4= mysqli_num_rows($result4);
$resultcheck5= mysqli_num_rows($result5);
$resultcheck6= mysqli_num_rows($result6);
$resultcheck8= mysqli_num_rows($result8);
$resultcheck9= mysqli_num_rows($result9);
$resultcheck10= mysqli_num_rows($result10);
$resultcheck11= mysqli_num_rows($result11);
$resultcheck12= mysqli_num_rows($result12);
$resultcheck13= mysqli_num_rows($result13);



?>