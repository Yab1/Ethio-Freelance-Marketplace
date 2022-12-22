<?php 
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
 include "../../model/freelancer/post-service.php";
 require '../../controller/freelancer/post-service.php';

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Post a service</title>
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
            <div class="col-md-8 col-md-offset-2">
                <div class="page-header">
                    <h2>Post A Service</h2>
                </div>

                <form id="registrationForm" method="post" class="form-horizontal" action="../../controller/freelancer/post-service.php">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Service Name</label>
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
                    <label class="col-sm-4 control-label">Service Description</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="description" value="" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label">Pay Rate</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="pay_rate" value="" />
                    </div>
                </div>
                


                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <!-- Do NOT use name="submit" or id="submit" for the Submit button -->
                        <button type="submit" name="postservice" class="btn btn-info btn-lg">Post</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>






<?php require 'includes/footer.php'  ?>
</body>
</html>