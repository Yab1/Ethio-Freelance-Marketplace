<?php  
  include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
  include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db.php";
  include_once "$_SERVER[DOCUMENT_ROOT]/free/model/employer/manage-project-details.php";
  include_once "$_SERVER[DOCUMENT_ROOT]/free/controller/employer/manage-project-details.php";

if(isset($_SESSION["user_id"])){
	$username=$_SESSION["user_id"];}
	else{
    $username="";
	header("location: ../../index.php");
}

if(isset($_SESSION["usr_id"])){
    $usr_id=$_SESSION["usr_id"];
}
?>
<!DOCTYPE html>
<html>
<head> 
	<title>CV of Freelance</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" type="text/css" href="../includes/css/pagination.css">
	<link rel="stylesheet" type="text/css" href="../includes/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../includes/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="../includes/res/font-awesome/css/font-awesome.min.css">
	<script type="text/javascript" src="../includes/js/jquery.js"></script>
	<script type="text/javascript" src="../includes/js/bootstrap.min.js"></script>

<style>
	body{padding-top: 3%;margin: 0; }
	.card{box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); background:#fff}
</style>

</head>
<body>
<?php require'includes/emp_nav.php' ?>

<!--main body-->
<div style="padding:1% 3% 1% 3%; margin-left:3in;">
<div class="row">

<!--Column 1-->
	<div class="col-lg-9">

<!--Freelancer Profile Details-->	
		<div class="card" style="padding:20px 20px 5px 20px;margin-top:20px; ">
			<div class="panel panel-success">
			  <div class="panel-heading"><h3>Curriculum Vitae</h3></div>
			</div>

			<div class="row">
					<div class="col-sm-12 product-tabs">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab1" data-toggle="tab">Personal Info</a></li>
							<li class=""><a href="#tab2" data-toggle="tab" >Other</a></li>
						</ul>
						<div class="tab-content">
							
							<div class="tab-pane active" id="tab1">
								<div class="panel panel-primary">
									  <div class="panel-heading">Full Name</div>
									  <div class="panel-body"><h4><?php
									echo $cv	->name;?>
								</h4></div>
								</div>
							

								<div class="panel panel-primary">
										  <div class="panel-heading">Email</div>
										  <div class="panel-body"><h4><?php 
										echo $cv	->email;
										 ?></h4></div>
								</div>
								<div class="panel panel-primary">
										  <div class="panel-heading">Phone</div>
										  <div class="panel-body"><h4><?php 
										echo $cv	->phone;
										 ?></h4></div>
										</div>
										<div class="panel panel-primary">
										  <div class="panel-heading">Gender</div>
										  <div class="panel-body"><h4><?php 
										echo $cv	->gender;
										 ?></h4></div>
										</div>
										<div class="panel panel-primary">
										  <div class="panel-heading">Dob</div>
										  <div class="panel-body"><h4><?php 
										echo $cv	->birthdate;
										 ?></h4></div>
										</div>
										<div class="panel panel-primary">
										  <div class="panel-heading">Address</div>
										  <div class="panel-body"><h4><?php 
										echo $cv	->address;
										 ?></h4></div>
										</div>
							</div>
							

							<div class="tab-pane" id="tab2">
										<div class="panel panel-primary">
										  <div class="panel-heading">Skill</div>
										  <div class="panel-body"><h4><?php 
										echo $cv	->skill;
										 ?></h4></div>
										</div>
										<div class="panel panel-primary">
										  <div class="panel-heading">Education</div>
										  <div class="panel-body"><h4><?php 
										echo $cv	->education;
										 ?></h4></div>
										</div>
										<div class="panel panel-primary">
										  <div class="panel-heading">Description</div>
										  <div class="panel-body"><h4><?php 
										echo $cv	->description;
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
<!--End Freelancer Profile Details-->

</div>



</div>
</div>
<!--End main body-->
</div>

<br>

<script type="text/javascript">
	$('.next-button').click(function(){
		$('.nav-tabs > .active').next('li').find('a').trigger('click');
	});
	$('.previous-button').click(function(){
		$('.nav-tabs > .active').prev('li').find('a').trigger('click');
	});
</script>

<?php require 'includes/footer.php';?>

</body>
</html>