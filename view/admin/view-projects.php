<?php
 include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
 include_once "$_SERVER[DOCUMENT_ROOT]/free/model/admin/pagination.php";
 include_once "$_SERVER[DOCUMENT_ROOT]/free/controller/admin/projects.php";

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
	<title>All Job Offers</title>
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
 
<?php require 'includes/admin-nav.php'; ?>


	<!--main body-->
<div style="padding:1% 3% 1% 3%;">
<div class="row">

<!--Column 1-->
	<div class="col-lg-9">

<!--Freelancer Profile Details-->	
		<div class="card" style="padding:20px 20px 5px 20px;margin-top:20px">
			<div class="panel panel-success">
			  <div class="panel-heading"><h3>All Job Offers</h3></div>
			  <div class="panel-body"><h4>

<?php 


if ($resultcheck > 0){
	echo '<table  style=" width: 100% ; border: none;">';
			echo '<tr>
			<td>'.'Title'.'</td>
			<td>'.'Type'.'</td>
			<td>'.'Budget'.'</td>
			<td>'.'Employer'.'</td>
			<td>'.'Deadline'.'</td>
			</tr>';
		while($row=mysqli_fetch_assoc($result)){
			$job_id=$row["project_id"];
			$title=$row["project_name"];
        	$type=$row["category"];
       		$budget=$row["budget"];
       		$username=$row["e_username"];
       		$deadline=$row["posted_on"];


			echo '
			<form action="view-projects.php" method="post">
			<tr >
			<input type="hidden" name="jid" value="'.$job_id.'">
			<td><input type="submit" class="btn btn-link btn-lg" value="'.$title.' "></td>
			<td>'.$type.'</td>
			<td>'.$budget.'</td>
			<td>'.$username.'</td>
			<td>'.$deadline.'</td>
			</tr> 
			</form>' ;
		}
		
		echo '</table> ';
}

?>

              </h4></div>
			</div>
			<p></p>
		</div>
<!--End Freelancer Profile Details-->
<?php 
if ($page>1) {
	echo "<a href='view-projects.php?page=".($page-1)." 'class='btn btn-danger' style='margin-left:10px; margin-top:10px;'>Back</a>" ;
}

for ($i=1; $i < $total_page_pro; $i++) 
{ 
   echo "<a href='view-projects.php?page=".$i." 'class='btn btn-primary' style='margin-left:10px; margin-top:10px;'>$i</a>" ;
}
if ($i>$page) {
	echo "<a href='view-projects.php?page=".($page+1)." 'class='btn btn-danger' style='margin-left:10px; margin-top:10px;'>Next</a>" ;
}
?>
	</div>
<!--End Column 1-->


<!--Column 2-->
	<div class="col-lg-3">

<!--Main profile card-->
		<div class="card" style="padding:20px 20px 5px 20px;margin-top:20px">
			<p></p>
			<form action="view-projects.php" method="post">
				<div class="form-group">
				  <input type="text" class="form-control" name="s_title">
				  <center><button type="submit" class="btn btn-info">Search by Project Title</button></center>
				</div>
	        </form>

	        <form action="view-projects.php" method="post">
				<div class="form-group">
				  <input type="text" class="form-control" name="s_type">
				  <center><button type="submit" class="btn btn-info" >Search by Project Category</button></center>
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
	$sql = "SELECT * FROM project WHERE project_name='$t' ";
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
                                $job_id=$row["project_id"];
                                $title=$row["project_name"];
                                $type=$row["category"];
                                $budget=$row["budget"];
                                $e_username=$row["e_username"];
                                $timestamp=$row["posted_on"];

                                echo '
                                <form action="projects.php" method="post">
                                <input type="hidden" name="jid" value="'.$job_id.'">
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
	$sql = "SELECT * FROM project WHERE category='$t' ";
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
                                $job_id=$row["project_id"];
                                $title=$row["project_name"];
                                $type=$row["category"];
                                $budget=$row["budget"];
                                $e_username=$row["e_username"];
                                $timestamp=$row["posted_on"];

                                echo '
                                <form action="projects.php" method="post">
                                <input type="hidden" name="jid" value="'.$job_id.'">
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
<?php require 'includes/footer.php'; ?>
</body>
</html>