<?php  
  include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
  include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db.php";
  include_once "$_SERVER[DOCUMENT_ROOT]/free/model/admin/employers-detail.php";
  include_once "$_SERVER[DOCUMENT_ROOT]/free/controller/admin/employer-details.php";

if(isset($_SESSION["user_id"])){
	$username=$_SESSION["user_id"];}
	else{
    $username="";
	header("location: ../../index.php");
}

if(isset($_SESSION["user"])){
    $user=$_SESSION["user"];
}


?>
<!DOCTYPE html>
<html>
<head> 
	<title>Employer Details</title>
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
<?php require'includes/admin-nav.php' ?>

<!--main body-->
<div style="padding:1% 3% 1% 3%;">
<div class="row">
<div class="col-lg-3">

<!--Main profile card-->
		<div class="card" style="padding:20px 20px 5px 20px;margin-top:20px">
			<p></p>
			<img src="../includes/res/img/img04.jpg">
			<h4><?php echo $emp_detail->fname; echo " "; echo $emp_detail->lname;?></h4>
			<p><span class="fa fa-user"></span> <?php 
			  echo $emp_detail->user; ?></p>
	        <center><a href="../../chat/users.php?u_rcv=<?php 
			  echo $emp_detail->user ?>" class="btn btn-info"><span class="fa fa-envelope"></span>  Send Message</a></center>
	        <p></p>
	        
	    </div>

<!--End Main profile card-->
	</div>

<!--Column 1-->
	<div class="col-lg-7">

<!--Freelancer Profile Details-->	
		<div class="card" style="padding:20px 20px 5px 20px;margin-top:20px">
			<div class="panel panel-success">
			  <div class="panel-heading"><h3>Employer Profile</h3></div>
			</div>
			<div class="panel panel-success">
			  <div class="panel-heading">First Name</div>
			  <div class="panel-body"><h4><?php 
			  echo $emp_detail->fname; ?></h4></div>
			</div>
			<div class="panel panel-success">
			  <div class="panel-heading">Last Name</div>
			  <div class="panel-body"><h4><?php
			  echo $emp_detail->fname ?></h4></div>
			</div>
			<div class="panel panel-success">
			  <div class="panel-heading">Username</div>
			  <div class="panel-body"><h4><?php 
			  echo $emp_detail->user ?></h4></div>
			</div>
			<div class="panel panel-success">
			  <div class="panel-heading">Phone</div>
			  <div class="panel-body"><h4><?php 
			  echo $emp_detail->phone ?></h4></div>
			</div>
			<div class="panel panel-success">
			  <div class="panel-heading">Address</div>
			  <div class="panel-body"><h4><?php 
			  echo $emp_detail->address?></h4></div>
			</div>
			
			
			<p></p>
		</div>
<!--End Freelancer Profile Details-->
</div>
  <form action="../../controller/admin/delete-user.php" method="post">
	<input type="hidden" name="blog-id" value="<?php echo  $emp_detail->user ?>">
	<button class="btn btn-warning btn-lg" id="applybtn" name="delete_emp"style=" margin-right: 1in; margin-top: -10in; ">Delete User</button>
</form>
</div>
</div>
<?php require 'includes/footer.php' ?>
</body>
</html>
