<?php 
 include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
 include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db.php";
 include_once "$_SERVER[DOCUMENT_ROOT]/free/model/freelancer/edit-cv.php";
 include_once "$_SERVER[DOCUMENT_ROOT]/free/controller/freelancer/edit-cv.php";

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
	<title>Edit profile</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../includes/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../includes/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="../includes/res/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../includes/css/bootstrapValidator.css">
    

<style>
	body{padding-top: 3%;margin: 0;}
	.card{box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); background:#fff}
</style>

</head>
<body>
<?php require 'includes/free_nav.php' ?>


<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="page-header">
                    <h2>Edit Cv</h2>
                </div>

                <form id="registrationForm" method="post" class="form-horizontal" action="../../controller/freelancer/edit-cv.php">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Full Name</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="name" value="<?php 
            echo $cv->name;
             ?>" />
                    </div>
                </div>

                 <div class="form-group">
                    <label class="col-sm-4 control-label">Phone</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="phone" value="<?php  
            echo $cv->phone;
             ?>"  />
                    </div>
                </div>

                 <div class="form-group">
                    <label class="col-sm-4 control-label">Email </label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="email" value="<?php 
            echo $cv->email;
             ?>" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label">Gender</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="gender" value="<?php 
            echo $cv->gender;
             ?>" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label">Date of birth</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="dob" placeholder="YYYY/MM/DD" value="<?php 
            echo $cv->birthdate;
             ?>" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label">Address</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="address" value="<?php 
            echo $cv->address;
             ?>"  />
                    </div>
                </div>

                 <div class="form-group">
                    <label class="col-sm-4 control-label">Education</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="edu" value="<?php 
            echo $cv->education;
             ?>" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label">Skill</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="skill" value="<?php 
            echo $cv->skill;
             ?>" />
                    </div>
                </div>
                
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Description</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="description" value="<?php 
            echo $cv->description;
             ?>" />
                    </div>
                </div>

                 
                  

                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <!-- Do NOT use name="submit" or id="submit" for the Submit button -->
                        <button type="submit" name="editcv" class="btn btn-info btn-lg">Save changes</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>



<script type="text/javascript" src="../includes/js/jquery.js"></script>
<script type="text/javascript" src="../includes/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../includes/js/bootstrapValidator.js"></script>

<?php require 'includes/footer.php' ?>
</body>
</html>