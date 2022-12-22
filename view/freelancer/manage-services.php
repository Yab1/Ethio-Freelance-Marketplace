<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
 include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db.php";
 include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db1.php";
 include_once "$_SERVER[DOCUMENT_ROOT]/free/controller/freelancer/manage-services.php";
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
	<title>Manage Services</title>
</head>
<body>
<?php require 'includes/free_nav.php' ?>

<!--main body-->
<div style="padding:1% 3% 1% 3%;">
<div class="row">

<!--Column 1-->
	<div class="col-lg-8" style=" margin-left: 200px;">

<!--Main profile card-->
		<div class="card" style="padding:20px 20px 5px 20px;margin-top:20px">
			<p></p>
			<div class="panel panel-primary">
			  <div class="panel-heading">Current Service Offerings</div>
			  <div class="panel-body"><h4>
                  <?php 


if ($resultcheck3 > 0){
	echo '<table  style=" width: 100% ; border: none;">';
			echo '<tr>
			<td>'.'Title'.'</td>
			<td>'.'Type'.'</td>
			<td>'.'Pay Rate'.'</td>
			
			
			</tr>';
		while($row=mysqli_fetch_assoc($result3)){
			$s_id=$row["service_id"];
			$title=$row["service_name"];
        	$type=$row["category"];
       		$payrate=$row["payrate"];
       		
       		
			echo '
			<form action="manage-services.php" method="post">
			<tr >
			<input type="hidden" name="sid" value="'.$s_id.'">
			<td><input type="submit" class="btn btn-link btn-lg" value="'.$title.' "></td>
			<td>'.$type.'</td>
			<td>'.$payrate.'</td>
			</tr> 
			</form>' ;
		}
		
		echo '</table> ';
}

?>
           </h4> </div>
			</div>
		</div>
	</div>
</div>
</div>
<?php require 'includes/footer.php'  ?>
</body>
</html>