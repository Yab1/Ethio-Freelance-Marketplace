<?php  
  include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
  include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db.php";
  include_once "$_SERVER[DOCUMENT_ROOT]/free/model/freelancer/manage-service-details.php";
  include_once "$_SERVER[DOCUMENT_ROOT]/free/controller/freelancer/manage-service-details.php";

if(isset($_SESSION["user_id"])){
	$username=$_SESSION["user_id"];}
	else{
    $username="";
	header("location: ../../index.php");
}

if(isset($_SESSION["s_id"])){
    $s_id=$_SESSION["s_id"];
}
if(isset($_SESSION["ser-msg"])){
   $pro=$_SESSION["ser-msg"];
    unset($_SESSION["ser-msg"]);
}
   else{
    $pro="";
}

?>
<!DOCTYPE html>
<html>
<head> 
	<title>Service Details</title>
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
<?php 
	echo $pro; ?>
<!--Freelancer Profile Details-->	
		<div class="card" style="padding:20px 20px 5px 20px;margin-top:20px">
			<div class="panel panel-success">
			  <div class="panel-heading"><h3>Service Offer Details</h3></div>
			</div>
			<div class="panel panel-success">
			  <div class="panel-heading">Service Title</div>
			  <div class="panel-body"><h4><?php 
			  echo $service_detail->service_name; ?></h4></div>
			</div>
			<div class="panel panel-success">
			  <div class="panel-heading">Service Type</div>
			  <div class="panel-body"><h4><?php
			  echo $service_detail->category ?></h4></div>
			</div>
			<div class="panel panel-success">
			  <div class="panel-heading">Service Description</div>
			  <div class="panel-body"><h4><?php 
			  echo $service_detail->description ?></h4></div>
			</div>
		
			<div class="panel panel-success">
			  <div class="panel-heading">Pay Rate</div>
			  <div class="panel-body"><h4><?php 
			  echo $service_detail->payrate ?></h4></div>
			</div>
			
			<a href="edit-service.php" id="applybtn" type="button" class="btn btn-warning btn-lg">Edit this Service</a>
			<form action="../../controller/freelancer/delete.php" method="post">
	<input type="hidden" name="blog-id" value="<?php echo  $service_detail->id ?>">
	<button class="btn btn-warning btn-lg" id="applybtn" name="delete"style=" margin-left: 3in; margin-top: -90px; ">Delete </button>
</form>
			<p></p>
		</div>
<!--End Freelancer Profile Details-->

</div>


<!--Column 2-->

<!--End Column 2-->


<!--Column 3-->


</div>
</div>
<!--End main body-->





<?php require 'includes/footer.php';?>

</body>
</html>