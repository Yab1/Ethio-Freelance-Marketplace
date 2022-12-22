<?php 
 include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
 include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db.php";
 include_once "$_SERVER[DOCUMENT_ROOT]/free/controller/admin/admin-profile.php";
include_once "$_SERVER[DOCUMENT_ROOT]/free/controller/admin/edit-admin.php";

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
	<title>Edit profile</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../includes/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../includes/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="../includes/res/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../includes/css/bootstrapValidator.css">
    <script type="text/javascript" src="../includes/js/jquery.js"></script>
    <script type="text/javascript" src="../includes/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../includes/js/bootstrapValidator.js"></script>

<style>
	body{padding-top: 3%;margin: 0;}
	.card{box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); background:#fff}
</style>

</head>
<body>
<?php require 'includes/admin-nav.php' ?>

<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="page-header">
                    <h2>Edit Profile</h2>
                </div>

                <form id="registrationForm" method="post" class="form-horizontal" action="../../controller/admin/edit-admin.php">
                <div class="form-group">
                    <label class="col-sm-4 control-label">First Name</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="fname" value="<?php 
            echo $display->fname;
             ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Last Name</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="lname" value="<?php 
            echo $display->lname;
             ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Email address</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="email" value="<?php 
            echo $display->email;
             ?>" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label">Contact no.</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="phone" value="<?php 
            echo $display->phone;
             ?>"  />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label">Gender</label>
                    <div class="col-sm-5">
                        <div class="radio">
                            <label>
                                <input type="radio" name="gender" 
                                <?php if (isset($gender) && $gender=="male") echo "checked";?>
                                 value="male" /> Male
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="gender" 
                                <?php if (isset($gender) && $gender=="female") echo "checked";?>
                                 value="female" /> Female
                            </label>
                        </div>
                       
                    </div>
                </div>

                

                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <!-- Do NOT use name="submit" or id="submit" for the Submit button -->
                        <button type="submit" name="edit" class="btn btn-info btn-lg">Save changes</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>






<?php require 'includes/footer.php' ?>
</body>
</html>