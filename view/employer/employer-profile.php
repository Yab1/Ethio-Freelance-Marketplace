<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
 include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db.php";
 include_once "$_SERVER[DOCUMENT_ROOT]/free/controller/employer/employer-profile.php";
if(isset($_SESSION["user_id"])){
	$username=$_SESSION["user_id"];}
	else{
    $username="";
	header("location: ../../index.php");
}
if(isset($_SESSION["msg"])){
   $pro=$_SESSION["msg"];
    unset($_SESSION["msg"]);
}
   else{
    $pro="";
}
if(isset($_SESSION["hire-msg"])){
   $pro=$_SESSION["hire-msg"];
    unset($_SESSION["hire-msg"]);
}
   else{
    $pro="";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Employer profile</title>
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
<?php require 'includes/emp_nav.php' ?>

<!--main body-->
<div style="padding:1% 3% 1% 3%;">
<div class="row">
	<?php 
	echo $pro; ?>
<!--Column 1-->
	<div class="col-lg-2">

<!--Main profile card-->
		<div class="card" style="padding:20px 20px 5px 20px;margin-top:20px">
			<p></p>
			<img src="../includes/res/img/img04.jpg">
			<h2><?php 
			echo $profile	->fname;
			 ?></h2>
			<p><span class="fa fa-user"></span> <?php 
			echo $profile	->username;
			 ?></p>
			<ul class="list-group">
				<a href="post-Job.php" class="list-group-item list-group-item-info">Post a job offer</a>
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

<!--Employer Profile Details-->	
		<div class="card" style="padding:20px 20px 5px 20px;margin-top:20px">
			<div class="panel panel-primary">
			  <div class="panel-heading"><h3>Employer Profile Details</h3></div>
			</div>

			<div class="row">
					<div class="col-sm-12 product-tabs" >
						<ul class="nav nav-tabs" style="">
							<li class="active"><a href="#tab1" data-toggle="tab">Full Name</a></li>
							<li class=""><a href="#tab2" data-toggle="tab" >Bio</a></li>
							<li class=""><a href="#tab3" data-toggle="tab">Posted Jobs</a></li>
							<li class=""><a href="#tab4" data-toggle="tab">Hired Freelancers</a></li>
						</ul>
						<div class="tab-content">
							
							<div class="tab-pane active" id="tab1">
								<div class="panel panel-primary">
									  <div class="panel-heading">Full Name</div>
									  <div class="panel-body"><h4><?php
									echo $profile	->fname; echo $profile	->lname ;?>
								</h4></div>
								</div>
							</div>
							<div class="tab-pane" id="tab2">
										<div class="panel panel-primary">
										  <div class="panel-heading">Profile Bio</div>
										  <div class="panel-body"><h4><?php 
										echo $profile	->bio;
										 ?></h4></div>
										</div>
							</div>
							<div class="tab-pane" id="tab3">
								<div class="panel panel-primary">
												  <div class="panel-heading">Job Offerings</div>
												  <div class="panel-body"><h4>
					                  <table style="width:100%">
					                      <tr>
					                          <td>Title</td>
					                          <td>Category</td>
					                          <td>Posted on</td>
					                      </tr>
					                      <tr>
					                          <td><?php echo $profile ->project_name; ?></td>
					                          <td><?php echo $profile ->category; ?></td>
					                          <td><?php echo $profile ->deadline; ?> </td>
					                      </tr>        
					                  </table>
					              </h4></div>
								</div>
							</div>
							<div class="tab-pane" id="tab4">
											<div class="panel panel-primary">
										  <div class="panel-heading">Hired Freelancers</div>
										  <div class="panel-body"><h4>
                  <table style="width:100%">
                      <tr>
                          <td>Job Id</td>
                          <td>Title</td>
                          <td>Freelancer</td>
                      </tr>
                      
                  </table>
              		</h4></div>
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

		<div class="card" style="padding:20px 20px 5px 20px;margin-top:20px">
			<div class="panel panel-success">
			  <div class="panel-heading"><h4>Contact Information</h4></div>
			</div>
			<div class="panel panel-success">
			  <div class="panel-heading">Email</div>
			  <div class="panel-body"><?php 
			echo $profile	->email;
			 ?></div>
			</div>
			<div class="panel panel-success">
			  <div class="panel-heading">Mobile</div>
			  <div class="panel-body"><?php 
			echo $profile	->phone;
			 ?></div>
			</div>
			<div class="panel panel-success">
			  <div class="panel-heading">Address</div>
			  <div class="panel-body"><?php 
			echo $profile	->address;
			 ?></div>
			</div>
		</div>


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