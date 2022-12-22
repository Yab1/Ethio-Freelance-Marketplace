<?php  
  include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
  include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db.php";
  include_once "$_SERVER[DOCUMENT_ROOT]/free/model/freelancer/project-details.php";
  include_once "$_SERVER[DOCUMENT_ROOT]/free/controller/freelancer/project-details.php";
if(isset($_SESSION["user_id"])){
	$username=$_SESSION["user_id"];}
	else{
    $username="";
	header("location: index.php");
}

if(isset($_SESSION["job_id"])){
    $job_id=$_SESSION["job_id"];
}

?>
<!DOCTYPE html>
<html>
<head> 
	<title>Job Details</title>
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
<?php require'includes/free_nav.php' ?>

<!--main body-->
<div style="padding:1% 3% 1% 3%;">
<div class="row">

<!--Column 1-->
	<div class="col-lg-7">

<!--Freelancer Profile Details-->	
		<div class="card" style="padding:20px 20px 5px 20px;margin-top:20px">
			<div class="panel panel-success">
			  <div class="panel-heading"><h3>Job Offer Details</h3></div>
			</div>
			<div class="panel panel-success">
			  <div class="panel-heading">Job Title</div>
			  <div class="panel-body"><h4><?php 
			
			  echo $project_detail->project_name; ?></h4></div>
			</div>
			<div class="panel panel-success">
			  <div class="panel-heading">Job Type</div>
			  <div class="panel-body"><h4><?php
			  echo $project_detail->category ?></h4></div>
			</div>
			<div class="panel panel-success">
			  <div class="panel-heading">Job Description</div>
			  <div class="panel-body"><h4><?php 
			  echo $project_detail->description ?></h4></div>
			</div>
			<div class="panel panel-success">
			  <div class="panel-heading">Budget</div>
			  <div class="panel-body"><h4><?php 
			  echo $project_detail->budget ?></h4></div>
			</div>
			<div class="panel panel-success">
			  <div class="panel-heading">Required Skills</div>
			  <div class="panel-body"><h4><?php 
			  echo $project_detail->skill ?></h4></div>
			</div>
			
			<div class="panel panel-success">
			  <div class="panel-heading">Deadline</div>
			  <div class="panel-body"><h4><?php 
			  echo $project_detail->deadline ?></h4></div>
			</div>
			<a href="apply.php" id="applybtn" type="button" class="btn btn-warning btn-lg">Apply for this Job</a>
			<p></p>
		</div>
<!--End Freelancer Profile Details-->


</div>

<!--Column 2-->
	<div class="col-lg-3">

<!--Main profile card-->
		<div class="card" style="padding:20px 20px 5px 20px;margin-top:20px">
			<p></p>
			<img src="../includes/res/img/img04.jpg">
			<h2><?php include_once('../../model/employer/employer-profile.php');
			$profile= new Employer_Profile();
			$profile->view();
			echo $profile	->fname;?></h2>
			<p><span class="fa fa-user"></span> <?php 
			  echo $project_detail->employer; ?></p>
	        <center><a href="../../chat/users.php?u_rcv=<?php echo $project_detail->employer;?>" class="btn btn-info"><span class="fa fa-envelope"></span>  Send Message</a></center>
	        <p></p>
	    </div>
<!--End Main profile card-->

	</div>
<!--End Column 2-->

</div>
</div>
<!--End main body-->






<?php require 'includes/footer.php' ?>
</body>
</html>