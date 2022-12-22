<?php
  include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
  include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db.php";
  include_once "$_SERVER[DOCUMENT_ROOT]/free/controller/freelancer/apply.php";
if(isset($_SESSION["user_id"])){
	$username=$_SESSION["user_id"];}
	else{
    $username="";
	header("location: index.php");
}
if(isset($_SESSION["job_id"])){
    $job_id=$_SESSION["job_id"];
}
else{
    $job_id="";
    header("location: index.php");
}
if(isset($_SESSION["msg"])){
   $msg=$_SESSION["msg"];
    unset($_SESSION["msg"]);
}
   else{
    $msg="";
}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title></title>
     <link rel="stylesheet" type="text/css" href="../includes/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../includes/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="../includes/res/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../includes/css/bootstrapValidator.css">
 </head>
 <body>
    <?php require 'includes/free_nav.php' ?><br><br><br>
 <div class="container">
    <?php echo $msg; ?>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="page-header">
                    <h2>Apply for Job</h2>
                </div>

                <form id="registrationForm" method="post" class="form-horizontal">
           
               

                <div class="form-group">
                    <label class="col-sm-4 control-label">Place a bid</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="bid" value="" />
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <!-- Do NOT use name="submit" or id="submit" for the Submit button -->
                        <button type="submit" name="apply" class="btn btn-info btn-lg">Submit</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>
    <?php require 'includes/footer.php'; ?>
 </body>
 </html>