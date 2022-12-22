<?php
 include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
 include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db1.php";
 
 if(isset($_SESSION["user_id"])){
	$username=$_SESSION["user_id"];}
	else{
    $username="";
	header("location: index.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Manage Applications</title>
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
			  		<div class="panel-heading">Currently Applied On</div>
			  			<div class="panel-body">
			  				<h4>
	                    		<?php 
									if ($resultcheck5 > 0)
									{
										echo '<table  style=" width: 100% ; border: none;">';
												echo '<tr>
												<td>'.'Project Id'.'</td>
												<td>'.'Bid'.'</td>
												<td>'.'Status'.'</td>
												
												
												</tr>';
											while($row=mysqli_fetch_assoc($result5))
											{
												$p_id=$row["project_id"];
												$bid=$row["bid"];
									        	$status=$row["status"];
									       		
									       		
									       		
												echo '
												<form action="manage-application.php" method="post">
												<tr >
												<input type="hidden" name="pid" value="'.$p_id.'">
												<td><input type="submit" class="btn btn-link btn-lg" value="'.$p_id.' "></td>
												<td>'.$bid.'</td>
												<td>'.$status.'</td>
												</tr> 
												</form>' ;
											}
										echo '</table> ';
									}
								?>
           				  </h4> 
     			      </div>
			  </div>
		 </div>
	</div>
 </div>
</div><br>

<?php require 'includes/footer.php'  ?>	
</body>
</html>