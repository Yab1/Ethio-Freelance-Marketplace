<?php  
  include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
  include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db1.php";
  include_once "$_SERVER[DOCUMENT_ROOT]/free/model/employer/manage-project-details.php";
  include_once "$_SERVER[DOCUMENT_ROOT]/free/model/employer/manage-project-details.php";
  include_once "$_SERVER[DOCUMENT_ROOT]/free/controller/employer/manage-project-details.php";

if(isset($_SESSION["user_id"])){
	$username=$_SESSION["user_id"];}
	else{
    $username="";
	header("location: ../../index.php");
}

if(isset($_SESSION["job_id"])){
    $job_id=$_SESSION["job_id"];
}


?>
<!DOCTYPE html>
<html>
<head> 
	<title>Projects Details</title>
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
	<div class="col-lg-7">

<!--Freelancer Profile Details-->	
		<div class="card" style="padding:20px 20px 5px 20px;margin-top:20px">
			<div class="panel panel-success">
			  <div class="panel-heading"><h3>Project Offer Details</h3></div>
			</div>
			<div class="panel panel-success">
			  <div class="panel-heading">Project Title</div>
			  <div class="panel-body"><h4><?php 
			  echo $project_detail->project_name; ?></h4></div>
			</div>
			<div class="panel panel-success">
			  <div class="panel-heading">Project Type</div>
			  <div class="panel-body"><h4><?php
			  echo $project_detail->category ?></h4></div>
			</div>
			<div class="panel panel-success">
			  <div class="panel-heading">Project Description</div>
			  <div class="panel-body"><h4><?php 
			  echo $project_detail->description ?></h4></div>
			</div>
			<div class="panel panel-success">
			  <div class="panel-heading">Skill</div>
			  <div class="panel-body"><h4><?php 
			  echo $project_detail->skill ?></h4></div>
			</div>
			<div class="panel panel-success">
			  <div class="panel-heading">Budget</div>
			  <div class="panel-body"><h4><?php 
			  echo $project_detail->budget ?></h4></div>
			</div>
			
			<a href="edit-project.php" id="applybtn" type="button" class="btn btn-warning btn-lg">Edit this Job</a>
			<form action="../../controller/employer/delete.php" method="post">
	<input type="hidden" name="blog-id" value="<?php echo  $project_detail->id ?>">
	<button class="btn btn-warning btn-lg" id="applybtn" name="delete"style=" margin-left: 3in; margin-top: -70px; ">Delete </button>
</form>
			<p></p>
		</div>
<!--End Freelancer Profile Details-->

</div>


<!--Column 2-->
<div class="col-lg-5">
<div id="applicant" class="card" style="padding:20px 20px 5px 20px;margin-top:20px">
			<div class="panel panel-success">
			  <div class="panel-heading"><h3>Applicants for this job</h3></div>
			  <div class="panel-body"><h4>
                  <table style="width:100%">
                  <tr>
                      <td>Username</td>
                      <td>Bid</td>
                      <td>Cv</td>

                  </tr>
                    <?php 
               			
               					echo '
                        	<form action="manage-project-details.php" method="post">
	                        	<input type="hidden" name="f_user" value="'.$bid->username.'">
	                            <tr>
	                            <td><input type="submit" class="btn btn-link btn-lg" value="'.$bid->username.'"></td>
	                            <td>'.$bid->bid.'</td>
	                            <td><input type="submit" name="cv" class="btn btn-link btn-lg" value="View"></td>
                       	    </form>
                            
                            <form action="../../controller/employer/hire.php" method="post">
	                            <input type="hidden" name="f_user" value="'.$bid->username.'">
	                            <input type="hidden" name="f_price" value="'.$bid->bid.'">
	                            <input type="hidden" name="job_id" value="'.$job_id.'">
	                            <td><input type="submit"  name="hire" class="btn btn-link btn-lg" value="Hire"></td>
	                            </tr>
                        	</form>';
               			
                        

                       ?>
                     </table>
              </h4></div>
			</div>
			<p></p>
		</div>
	</div>
<!--End Column 2-->


<!--Column 3-->


</div>
</div>
<!--End main body-->





<?php require 'includes/footer.php';?>

</body>
</html>