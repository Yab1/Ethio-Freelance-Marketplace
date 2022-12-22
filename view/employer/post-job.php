<?php 
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
 include "../../model/employer/post-job.php";
require '../../controller/employer/post-job.php';
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
	<title>Post a job</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../includes/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../includes/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="../includes/res/font-awesome/css/font-awesome.min.css">

<style>
	body{padding-top: 3%;margin: 0;}
	.card{box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); background:#fff}
</style>

</head>
<body>
<?php require 'includes/emp_nav.php' ?>
<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="page-header">
                    <h2>Post A Project</h2>
                </div>

                <form id="registrationForm" method="post" class="form-horizontal" action="../../controller/employer/post-job.php">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Project Name</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="name" value="" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label">Category</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="category" value="" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label">Project Description</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="description" value="" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label">Budget</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="budget" value="" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label">Required Skills</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="skill" value="" />
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <!-- Do NOT use name="submit" or id="submit" for the Submit button -->
                        <button type="submit" name="postjob" class="btn btn-info btn-lg">Post</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>



<script type="text/javascript" src="../includes/js/jquery.js"></script>
<script type="text/javascript" src="../includes/js/bootstrap.min.js"></script>



<?php require 'includes/footer.php'  ?>
</body>
</html>