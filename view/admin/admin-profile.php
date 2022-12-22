<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
 include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db.php";
 include_once "$_SERVER[DOCUMENT_ROOT]/free/controller/admin/admin-profile.php";
if(isset($_SESSION["user_id"]))
	{
	$username=$_SESSION["user_id"];
	}
	else{
		    $username="";
			header("location: ../../index.php");
		}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin profile</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../includes/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../includes/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="../includes/res/font-awesome/css/font-awesome.min.css">
	<script type="text/javascript" src="../includes/js/jquery.js"></script>
	<script type="text/javascript" src="../includes/js/bootstrap.min.js"></script>
	
<style>
	body{padding-top: 3%;margin: 0;}
	.card{box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); background:#fff}
</style>

</head>
<body>
<?php require 'includes/admin-nav.php' ?>

<!--main body-->
<div style="padding:1% 3% 1% 3%;">
<div class="row">
<!--Column 1-->
	<div class="col-lg-3">

<!--Main profile card-->
		<div class="card" style="padding:20px 20px 5px 20px;margin-top:20px">
			<p></p>
			<img src="../includes/res/img/img04.jpg">
			<h2><?php 
			echo $display->fname;
			 ?></h2>
			<p><span class="fa fa-user"></span> <?php 
			echo $display->username;
			 ?></p>
			<ul class="list-group">
	        <a href="edit-employer.php" class="list-group-item list-group-item-info">Edit Profile</a>
			  	<a href="logout.php" class="list-group-item list-group-item-info">Logout</a>
			  	
			  	  
	        </ul>
	    </div>
	    
<!--End Main profile card-->

<!--Contact Information-->
		
<!--End Contact Information-->



	</div>
<!--End Column 1-->

<!--Column 2-->
	<div class="col-lg-7">

<!--Admin Profile Details-->	
		<div class="card" style="padding:20px 20px 5px 20px;margin-top:20px">
			<div class="panel panel-success">
			  <div class="panel-heading"><h4>Contact Information</h4></div>
			</div>
			<div class="panel panel-success">
			  <div class="panel-heading">Email</div>
			  <div class="panel-body"><?php 
			echo $display	->email;
			 ?></div>
			</div>
			<div class="panel panel-success">
			  <div class="panel-heading">Mobile</div>
			  <div class="panel-body"><?php 
			echo $display	->phone;
			 ?></div>
			</div>
			<div class="panel panel-success">
			  <div class="panel-heading">Gender</div>
			  <div class="panel-body"><?php 
			echo $display	->gender;
			 ?></div>
			</div>
		</div>
<!--End Admin Profile Details-->

	</div>
<!--End Column 2-->


<!--Column 3-->
	<div class="col-lg-2">



	</div>
<!--End Column 3-->

</div>
</div>
<!--End main body-->

<?php require 'includes/footer.php' ?>



</body>
</html>