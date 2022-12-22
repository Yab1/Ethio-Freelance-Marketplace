<?php
  include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
  include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db.php";
  include_once "$_SERVER[DOCUMENT_ROOT]/free/controller/employer/manage-project-details.php";
  include_once "$_SERVER[DOCUMENT_ROOT]/free/model/employer/manage-project-details.php";



if(isset($_SESSION["user_id"])){
	$username=$_SESSION["user_id"];}
	else{
    $username="";
	header("location: ../../index.php");
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Freelancer profile</title>
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

<?php require'includes/emp_nav.php' ?>

<!--main body-->
<div style="padding:1% 3% 1% 3%;">
<div class="row">

<!--Column 1-->
	<div class="col-lg-3">

<!--Main profile card-->
		<div class="card" style="padding:20px 20px 5px 20px;margin-top:20px">
			<p></p>
			<img src="../includes/res/img/img04.jpg">
			<h2><?php echo $view->fname; ?></h2>
			<p><span class="fa fa-user"></span> <?php echo $view->username; ?></p>
	        <center><a href="../../chat/users.php?u_rcv=<?php echo $view->username;?>" class="btn btn-info"><span class="fa fa-envelope"></span>  Send Message</a></center>
	        <p></p>
	    </div>
<!--End Main profile card-->

<!--Contact Information-->
		<div class="card" style="padding:20px 20px 5px 20px;margin-top:20px">
			<div class="panel panel-success">
			  <div class="panel-heading"><h4>Contact Information</h4></div>
			</div>
			<div class="panel panel-success">
			  <div class="panel-heading">Email</div>
			  <div class="panel-body"><?php echo $view->email; ?></div>
			</div>
			<div class="panel panel-success">
			  <div class="panel-heading">Mobile</div>
			  <div class="panel-body"><?php echo $view->phone; ?></div>
			</div>
			<div class="panel panel-success">
			  <div class="panel-heading">Address</div>
			  <div class="panel-body"><?php echo $view->address; ?></div>
			</div>
		</div>
<!--End Contact Information-->



	</div>
<!--End Column 1-->

<!--Column 2-->
	<div class="col-lg-7">

<!--Freelancer Profile Details-->	
		<div class="card" style="padding:20px 20px 5px 20px;margin-top:20px">
			<div class="panel panel-primary">
			  <div class="panel-heading"><h3>Freelancer Profile Details</h3></div>
			</div>
			<div class="panel panel-primary">
			  <div class="panel-heading">Professional Title</div>
			  <div class="panel-body"><h4><?php echo $view->prof_title; ?></h4></div>
			</div>
			<div class="panel panel-primary">
			  <div class="panel-heading">Skills</div>
			  <div class="panel-body"><h4><?php echo $cv->skill; ?></h4></div>
			</div>
			<div class="panel panel-primary">
			  <div class="panel-heading">Profile Summery</div>
			  <div class="panel-body"><h4><?php echo $view->bio; ?></h4></div>
			</div>
			<div class="panel panel-primary">
			  <div class="panel-heading">Education</div>
			  <div class="panel-body"><h4><?php echo $view->education; ?></h4></div>
			</div>
			<div class="panel panel-primary">
			  <div class="panel-heading">Experience</div>
			  <div class="panel-body"><h4><?php echo $view->experience; ?></h4></div>
			</div>
			
		</div>
<!--End Freelancer Profile Details-->

	</div>
<!--End Column 2-->


<!--Column 3-->
<!--End Column 3-->

</div>
</div>
<!--End main body-->


<?php require'includes/footer.php' ?>
</body>
</html>