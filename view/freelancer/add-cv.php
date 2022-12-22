<?php 
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
 include "../../model/freelancer/add-cv.php";
require '../../controller/freelancer/add-cv.php';

 if(isset($_SESSION["user_id"])){
	$username=$_SESSION["user_id"];}
	else{
    $username="";
	header("location: index.php");
}

if(isset($_SESSION["cv-msg"])){
   $cv=$_SESSION["cv-msg"];
    unset($_SESSION["cv-msg"]);
}
   else{
    $cv="";
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Add your CV</title>
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
<div class="container">
        <div class="row">
        		<?php 
	echo $cv; ?>
            <div class="col-md-8 col-md-offset-2">
                        <div class="page-header">
                        <h2>Add your CV</h2>
                        </div>
                        <form action="../../controller/freelancer/add-cv.php" method="post">
                            <div class="form-group">
                                <label class="col-sm-4 control-label">FullName</label>
                                <div class="col-sm-5">
                                    <input type="text" class="form-control" name="name" value="" /><br>
                                </div>
                            </div>

        <div class="form-group">
                <label class="col-sm-4 control-label">Phone</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="phone" value="" /><br>
                    </div>
        </div>

        <div class="form-group">
                <label class="col-sm-4 control-label">Email</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="email" value="" /><br>
                    </div>
        </div>

        <div class="form-group">
                <label class="col-sm-4 control-label">Gender</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="gender" value="" /><br>
                    </div>
        </div>

        <div class="form-group">
                <label class="col-sm-4 control-label">Date of Birth</label>
                    <div class="col-sm-5">
                        <input type="Date" class="form-control" name="dob" value="" /><br>
                    </div>
        </div>

        <div class="form-group">
                <label class="col-sm-4 control-label">Address</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="address" value="" /><br>
                    </div>
        </div>

        <div class="form-group">
                <label class="col-sm-4 control-label">Education</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="edu" value="" /><br>
                    </div>
        </div>

        <div class="form-group">
                <label class="col-sm-4 control-label">Skills</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="skill" value="" /><br>
                    </div>
        </div>

        <div class="form-group">
                <label class="col-sm-4 control-label">Description</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="description" value="" /><br>
                    </div>
        </div>

        <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <!-- Do NOT use name="submit" or id="submit" for the Submit button -->
                        <button type="submit" name="addcv" class="btn btn-info btn-lg">Add</button><br><br><br>
                    </div>
                </div>
            
	</form>
            </div>
        </div>
</div>

    <?php require 'includes/footer.php'  ?>
</body>
</html>