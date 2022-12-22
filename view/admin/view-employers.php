<?php
 include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
 include_once "$_SERVER[DOCUMENT_ROOT]/free/model/admin/pagination.php";

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
	<title>All Employers</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" type="text/css" href="../includes/css/bootstrap.min.css">
	  
	  <link rel="stylesheet" type="text/css" href="../includes/css/nav.css">
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
	<?php
 require 'includes/admin-nav.php';
?>


	<!--main body-->

<div style="padding:1% 3% 1% 3%;">
<div class="row">

<!--Column 1-->
	<div class="col-lg-9">

<!--Freelancer Profile Details-->	
		<div class="card" style="padding:20px 20px 5px 20px;margin-top:20px">
			<div class="panel panel-success">
			  <div class="panel-heading"><h3>All Employers</h3></div>
			  <div class="panel-body"><h4>

<?php 


if ($resultcheck6 > 0){
	echo '<table  style=" width: 100% ; border: none;" >';
			echo '<tr>
			<td>'.'Username'.'</td>
			<td>'.'First Name'.'</td>
			<td>'.'Last Name'.'</td>
			<td>'.'Email'.'</td>
			<td>'.'Address'.'</td>
			</tr>';
		while($row=mysqli_fetch_assoc($result6)){
			$user=$row["username"];
			$fname=$row["first_name"];
        	$lname=$row["last_name"];
       		$email=$row["email"];
       		$address=$row["address"];


			echo '
			<form action="../../controller/admin/employers.php" method="post">
			<tr >
			<input type="hidden" name="uid" value="'.$user.'">
			<td><input type="submit" class="btn btn-link btn-lg" value="'.$user.' "></td>
			<td>'.$fname.'</td>
			<td>'.$lname.'</td>
			<td>'.$email.'</td>
			<td>'.$address.'</td>
			</tr> 
			</form>' ;
		}
		
		echo '</table> ';
}



?>
              </h4></div>
			</div>
		</div>
<!--End Freelancer Profile Details-->
<?php 
if ($page>1) {
	echo "<a href='view-employers.php?page=".($page-1)." 'class='btn btn-danger' style='margin-left:10px; margin-top:10px;'>Back</a>" ;
}

for ($i=1; $i < $total_page; $i++) 
{ 
   echo "<a href='view-employers.php?page=".$i." 'class='btn btn-primary' style='margin-left:10px; margin-top:10px;'>$i</a>" ;
}
if ($i>$page) {
	echo "<a href='view-employers.php?page=".($page+1)." 'class='btn btn-danger' style='margin-left:10px; margin-top:10px;'>Next</a>" ;
}
?>
	</div>
<div class="col-lg-3">

<!--Main profile card-->
		<div class="card" style="padding:20px 20px 5px 20px;margin-top:20px">
			<p></p>
			<form action="view-employers.php" method="post">
				<div class="form-group">
				  <input type="text" class="form-control" name="s_name">
				  <center><button type="submit" class="btn btn-info" >Search by Username</button></center>
				</div>
	        </form>

	        
	    </div>
<!--End Main profile card-->

	</div>
</div>
	<br>
	<?php
$servername = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "freelance";

$con = mysqli_connect($servername, $dbuser, $dbpass, $dbname);
if(isset($_POST["s_name"])){
	$t=$_POST["s_name"];
	$sql = "SELECT * FROM employer WHERE username='$t' ";
	$result = $con->query($sql);
	$resultcheck= mysqli_num_rows($result);

                      if ($resultcheck > 0) {
                      	echo '<h4><table  style=" width: 50% ; border: 2px solid white; margin-left: 2in; background-color:white; padding:20px 20px 5px 20px;">';
											echo '<tr style="background-color:#dff0d8">
											<td >'.'Username'.'</td>
											<td>'.'First Name'.'</td>
											<td>'.'Last Name'.'</td>
											<td>'.'Email'.'</td>
											<td>'.'Address'.'</td>
											</tr>';
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                $job_id=$row["username"];
                                $title=$row["username"];
                                $type=$row["first_name"];
                                $budget=$row["last_name"];
                                $e_username=$row["email"];
                                $address=$row["address"];

                                echo '
                                <form action="services.php" method="post">
                                <input type="hidden" name="sid" value="'.$job_id.'">
                                    <tr>
                                    <td><input type="submit" class="btn btn-link btn-lg" value="'.$title.'"></td>
                                    <td>'.$type.'</td>
                                    <td>'.$budget.'</td>
                                    <td>'.$e_username.'</td>
                                    <td>'.$address.'</td>
                                    </tr>
                                </form>
                               </h4> ';

                                }
                                echo '</table> ';
                        } 
                        else {
                            echo ' <div style=" font-size:2em;" > No Result </div>';
                        }
}
?>

	</div>


</div>
</div>
<!--End main body-->
<br>
<?php require 'includes/footer.php'; ?>
</body>
</html>