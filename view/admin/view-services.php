<?php
 include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
 include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db.php";
 include_once "$_SERVER[DOCUMENT_ROOT]/free/model/admin/pagination.php";
 include_once "$_SERVER[DOCUMENT_ROOT]/free/controller/employer/service.php";
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
	<title>All Service Offers</title>
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
			  <div class="panel-heading"><h3>All Service Offers </h3></div>
			  <div class="panel-body"><h4>
			  	
			  	<?php 


if ($resultcheck1 > 0){
	echo '<table  style=" width: 100% ; border: none;" >';
			echo '<tr>
			
			<td>'.'Title'.'</td>
			<td>'.'Type'.'</td>
			<td>'.'Pay Rate'.'</td>
			<td>'.'Freelancer'.'</td>
			</tr>';
		while($row=mysqli_fetch_assoc($result1)){
			
        $title=$row["service_name"];
        $type=$row["category"];
        $budget=$row["payrate"];
        $username=$row["f_username"];
        $s_id=$row["service_id"];

			echo '
			<form action="view-services.php" method="post">
			<tr>
			<input type="hidden" name="sid" value="'.$s_id.'">
		  	<td><input type="submit" class="btn btn-link btn-lg" value="'.$title.'"></td>
			<td>'.$type.'</td>
			<td>'.$budget.'</td>
			<td>'.$username.'</td>
			</tr>
			</form>' ;
		}
		echo '</table>';
}

?>
           
              </h4></div>
			</div >
		</div> 
<!--End Freelancer Profile Details-->
<?php 
if ($page>1) {
	echo "<a href='view-services.php?page=".($page-1)." 'class='btn btn-danger' style='margin-left:10px; margin-top:10px;'>Back</a>" ;
}

for ($i=1; $i < $total_page_ser; $i++) 
{ 
   echo "<a href='view-services.php?page=".$i." 'class='btn btn-primary' style='margin-left:10px; margin-top:10px;'>$i</a>" ;
}
if ($i>$page) {
	echo "<a href='view-services.php?page=".($page+1)." 'class='btn btn-danger' style='margin-left:10px; margin-top:10px;'>Next</a>" ;
}
?>
	</div>
<!--End Column 1-->


<!--Column 2-->
	<div class="col-lg-3">

<!--Main profile card-->
		<div class="card" style="padding:20px 20px 5px 20px;margin-top:20px">
			<p></p>
			<form action="view-services.php" method="post">
				<div class="form-group">
				  <input type="text" class="form-control" name="s_title">
				  <center><button type="submit" class="btn btn-info">Search by Service Title</button></center>
				</div>
	        </form>

	        <form action="view-services.php" method="post">
				<div class="form-group">
				  <input type="text" class="form-control" name="s_type">
				  <center><button type="submit" class="btn btn-info">Search by Service Category</button></center>
				</div>
	        </form>
	        <p></p>
	    </div>
<!--End Main profile card-->

	</div>
<!--End Column 2-->
<?php $servername = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "freelance";

$con = mysqli_connect($servername, $dbuser, $dbpass, $dbname);
if(isset($_POST["s_title"])){
	$t=$_POST["s_title"];
	$sql = "SELECT * FROM service WHERE service_name='$t' ";
	$result = $con->query($sql);
	$resultcheck= mysqli_num_rows($result);

                      if ($resultcheck > 0) {
                      	echo '<h4><table  style=" width: 50% ; border: 2px solid white; margin-left: 2in; background-color:white; padding:20px 20px 5px 20px;">';
											echo '<tr style="background-color:#dff0d8">
											<td >'.'Title'.'</td>
											<td>'.'Type'.'</td>
											<td>'.'Budget'.'</td>
											<td>'.'Employer'.'</td>
											<td>'.'Posted On'.'</td>
											</tr>';
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                $job_id=$row["service_id"];
                                $title=$row["service_name"];
                                $type=$row["category"];
                                $budget=$row["payrate"];
                                $e_username=$row["f_username"];
                                $timestamp=$row["posted_on"];

                                echo '
                                <form action="services.php" method="post">
                                <input type="hidden" name="sid" value="'.$job_id.'">
                                    <tr>
                                    <td><input type="submit" class="btn btn-link btn-lg" value="'.$title.'"></td>
                                    <td>'.$type.'</td>
                                    <td>'.$budget.'</td>
                                    <td>'.$e_username.'</td>
                                    <td>'.$timestamp.'</td>
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
elseif(isset($_POST["s_type"])){
	$t=$_POST["s_type"];
	$sql = "SELECT * FROM service WHERE category='$t' ";
	$result = $con->query($sql);
	$resultcheck= mysqli_num_rows($result);

                      if ($resultcheck > 0) {
                      	echo '<h4><table  style=" width: 50% ; border: 2px solid white; margin-left: 2in; background-color:white; padding:20px 20px 5px 20px;">';
											echo '<tr style="background-color:#dff0d8">
											<td >'.'Title'.'</td>
											<td>'.'Type'.'</td>
											<td>'.'Budget'.'</td>
											<td>'.'Employer'.'</td>
											<td>'.'Posted On'.'</td>
											</tr>';
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                $job_id=$row["service_id"];
                                $title=$row["service_name"];
                                $type=$row["category"];
                                $budget=$row["payrate"];
                                $e_username=$row["f_username"];
                                $timestamp=$row["posted_on"];

                                echo '
                                <form action="services.php" method="post">
                                <input type="hidden" name="sid" value="'.$job_id.'">
                                    <tr>
                                    <td><input type="submit" class="btn btn-link btn-lg" value="'.$title.'"></td>
                                    <td>'.$type.'</td>
                                    <td>'.$budget.'</td>
                                    <td>'.$e_username.'</td>
                                    <td>'.$timestamp.'</td>
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
<!--End main body-->
<?php require'includes/footer.php'; ?>
</body>
</html>