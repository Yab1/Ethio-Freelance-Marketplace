<?php
 include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
 include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db1.php";

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
	<title>Support Team</title>
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

<?php require 'includes/admin-nav.php' ?> 


	<!--main body-->
<div style="padding:1% 3% 1% 3%;">
<div class="row">

<!--Column 1-->
	<div class="col-lg-9">

<!--Freelancer Profile Details-->	
		<div class="card" style="padding:20px 20px 5px 20px;margin-top:20px">
			<div class="panel panel-success">
			  <div class="panel-heading"><h3>Support Team </h3></div>
			  <div class="panel-body"><h4>
			  	
			  	<?php 


if ($resultcheck6 > 0){
	echo '<table  style=" width: 100% ; border: none;">';
			echo '<tr>
			<td>'.'Username'.'</td>
			<td>'.'Name'.'</td>
			</tr>';
		while($row=mysqli_fetch_assoc($result6)){
			$user=$row["username"];
			$name=$row["first_name"];
			echo '
			<tr >
			<td><a href="../../chat/users.php?u_rcv='.$user.'" class="btn btn-link btn-lg"> '.$user.' </a>
			<td>'.$name.'</td>
			</tr> ' ;
		}
		
		echo '</table> ';
}

?>
           
              </h4></div>
			</div >
			<p style=" "></p>
		</div> 
	</div>
<!--End Column 1-->

</div>
</div><br>
<!--End main body-->
<?php require'includes/footer.php'; ?>
</body>
</html>