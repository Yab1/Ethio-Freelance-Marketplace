<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
 include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db.php";
 include_once "$_SERVER[DOCUMENT_ROOT]/free/controller/freelancer/freelancer-profile.php";
if(isset($_SESSION["user_id"])){
	$username=$_SESSION["user_id"];}
	else{
    $username="";
	header("location: index.php");
}
if(isset($_SESSION["pro-msg"])){
   $msg=$_SESSION["pro-msg"];
    unset($_SESSION["pro-msg"]);
}
   else{
    $msg="";
}
if(isset($_SESSION["post-msg"])){
   $msg=$_SESSION["post-msg"];
    unset($_SESSION["post-msg"]);
}
   else{
    $msg="";
}

if(isset($_SESSION["cv-msg"])){
   $msg=$_SESSION["cv-msg"];
    unset($_SESSION["cv-msg"]);
}
   else{
    $msg="";
}
if(isset($_SESSION["skill-msg"])){
	$msg=$_SESSION["skill-msg"];
	 unset($_SESSION["skill-msg"]);
 }
	else{
	 $msg="";
 }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Freelancer profile</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="../includes/css/pagination.css">
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
	
<?php require 'includes/free_nav.php'; ?>

<!--main body-->
<div style="padding:1% 3% 1% 3%;">
	<?php 
	echo $msg; ?>

<div class="row">

<!--Column 1-->
	<div class="col-lg-2">

<!--Main profile card-->
		<div class="card" style="padding:20px 20px 5px 20px;margin-top:20px">
			<p></p>
			<img src="../includes/res/img/img04.jpg">
			<h2><?php 
			echo $profile->fname;
			 ?></h2>
			<p><span class="fa fa-user"></span> <?php
			echo $profile->username;
			 ?></p>
			<ul class="list-group">
	          	<a href="edit-freelancer.php" class="list-group-item list-group-item-info">Edit Profile</a>
	          	<a href="post-service.php" class="list-group-item list-group-item-info">Post Service</a>
			   	<a href="add-cv.php" class="list-group-item list-group-item-info">Add CV</a>
			   	<a href="add-skill.php" class="list-group-item list-group-item-info">Add Skills</a>
			  	   <a href="logout.php" class="list-group-item list-group-item-info">Logout</a>
	        </ul>
	    </div>
<!--End Main profile card-->
	</div>
<!--End Column 1-->

<!--Column 2-->
	<div class="col-lg-7">

<!--Freelancer Profile Details-->	
		<div class="card" style="padding:20px 20px 5px 20px;margin-top:20px">
			<div class="panel panel-primary">
			  <div class="panel-heading"><h3>Freelancer Profile Details</h3></div>
			</div>
			<div class="row">
					<div class="col-sm-12 product-tabs" >
						<ul class="nav nav-tabs" >
							<li class="active"><a href="#tab1" data-toggle="tab">Full Name</a></li>
							<li class=""><a href="#tab2" data-toggle="tab" >Pofessional Title</a></li>
							<li class=""><a href="#tab3" data-toggle="tab">Bio</a></li>
							<li class="" ><a href="#tab4" data-toggle="tab" >Skills</a></li>
							<li class=""><a href="#tab5" data-toggle="tab">Educaction</a></li>
						</ul>
						<div class="tab-content">
							
							<div class="tab-pane active" id="tab1">
								<div class="panel panel-primary">
									  <div class="panel-heading">Full Name</div>
									  <div class="panel-body"><h4><?php
									echo $profile	->fname; echo " "; echo $profile->lname ;
								 ?></h4></div>
								</div>
							</div>
							<div class="tab-pane" id="tab2">
										<div class="panel panel-primary">
										  <div class="panel-heading">Professional Title</div>
										  <div class="panel-body"><h4><?php 
										echo $profile	->prof_title;
										 ?></h4></div>
										</div>
							</div>
							<div class="tab-pane" id="tab3">
								<div class="panel panel-primary">
										  <div class="panel-heading">Bio</div>
										  <div class="panel-body"><h4><?php 
										echo $profile->bio;
										 ?></h4></div>
										</div>
							</div>
							<div class="tab-pane" id="tab4">
								<div class="panel panel-primary">
										  <div class="panel-heading">Skill</div>
										  <div class="panel-body"><h4><?php 
										echo $profile->skill;
										 ?></h4></div>
										</div>
							</div>

							<div class="tab-pane" id="tab5">
								<div class="panel panel-primary">
										  <div class="panel-heading">Education</div>
										  <div class="panel-body"><h4><?php 
										echo $profile	->education;
										 ?></h4></div>
										</div>
							</div>
							
							
						</div>
						<div class="tab-control">
							<a  class="previous-button" role="button"><i class="fa fa-angle-left fa-3x fa-fw"></i></a>
							<a  class="next-button" role="button"><i class="fa fa-angle-right fa-3x fa-fw"></i></a>
						</div>
					</div>
			</div>
		</div>
<!--End Employer Profile Details-->

	</div>
<!--End Column 2-->


<!--Column 3-->
	<div class="col-lg-3">

<!--Contact Information-->
		<div class="card" style="padding:20px 20px 5px 20px;margin-top:20px">
			<div class="panel panel-success">
			  <div class="panel-heading"><h4>Contact Information</h4></div>
			</div>
			<div class="panel panel-success">
			  <div class="panel-heading">Email</div>
			  <div class="panel-body"><?php 
			echo $profile->email;
			 ?></div>
			</div>
			<div class="panel panel-success">
			  <div class="panel-heading">Mobile</div>
			  <div class="panel-body"><?php echo $profile->phone;?></div>
			</div>
			<div class="panel panel-success">
			  <div class="panel-heading">Address</div>
			  <div class="panel-body"><?php echo $profile->address;?></div>
			</div>
		</div>
<!--End Contact Information-->

	</div>
<!--End Column 3-->

</div>
</div>
<!--End main body-->
<script type="text/javascript">
	$('.next-button').click(function(){
		$('.nav-tabs > .active').next('li').find('a').trigger('click');
	});
	$('.previous-button').click(function(){
		$('.nav-tabs > .active').prev('li').find('a').trigger('click');
	});
</script>

<?php require 'includes/footer.php' ?>


</body>
</html>