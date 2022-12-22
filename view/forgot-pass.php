<?php 

 include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db.php";
 include_once "$_SERVER[DOCUMENT_ROOT]/free/controller/forgot-pass.php";




if(isset($_SESSION["difr-msg"])){
   $d_msg=$_SESSION["difr-msg"];
    unset($_SESSION["difr-msg"]);
}
   else{
    $d_msg="";
}
if(isset($_SESSION["d-msg"])){
   $d_msg=$_SESSION["d-msg"];
    unset($_SESSION["d-msg"]);
}
   else{
    $d_msg="";
}
if(isset($_SESSION["un-msg"])){
   $un_msg=$_SESSION["un-msg"];
    unset($_SESSION["un-msg"]);
}
   else{
    $un_msg="";
}
if(isset($_SESSION["p-msg"])){
   $msg=$_SESSION["p-msg"];
    unset($_SESSION["p-msg"]);
}
   else{
    $msg="";
}


?>
<!DOCTYPE HTML>
<html>
<head>
<title>Forgot Password</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<link href="includes/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="includes/css/style.css" rel='stylesheet' type='text/css' />
<link href="includes/css/morris.css" rel="stylesheet" type="text/css"/>
<link href="includes/res/font-awesome/css/font-awesome.min.css" rel="stylesheet"> 
<script src="includes/js/jquery.js"></script>
<script src="includes/js/bootstrap.min.js"></script>

  <style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>

</head> 
<body>
	
   <div class="page-container">
   	<?php echo $msg; 
		  echo $d_msg;
		  echo $un_msg;
	?>
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
              <!--header start here-->

<div class="header-main text-center">
					<div class="">
								<h1 style="color:DodgerBlue">
								Freelance Marketplace</h1>
							</div>	
				</div>
							<?php
if(isset($_SESSION['msg'])) {
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
?>
				     <div class="clearfix"> </div>	
				</div>
 	<div class="grid-form">

  <div class="grid-form1">				
  <div class="panel-body">
					<form action="../controller/forgot-pass.php" name="chngpwd" method="post" class="form-horizontal" >
						<div class="form-group">
							<label class="col-md-2 control-label">Email</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-key"></i>
									</span>
									<input type="email"  class="form-control1"  name="email" id="email" placeholder="Email" required=""><span id="user-result"></span> 
								</div>
							</div>
						</div>

	<div class="form-group">
							<label class="col-md-2 control-label">New Password</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-key"></i>
									</span>
									<input type="password" class="form-control1" name="newpassword" id="newpassword" placeholder="New Password" required="">
								</div>
							</div>
						</div>
	<div class="form-group">
							<label class="col-md-2 control-label">Confirm Password</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-key"></i>
									</span>
									<input type="password" class="form-control1" name="confirmpassword" id="confirmpassword" placeholder="Confrim Password" required="">
								</div>
							</div>
						</div>

						<div class="col-sm-8 col-sm-offset-2">
				<button type="submit" name="changepwd" class="btn-primary btn">Save</button>
				
			</div>
		</div>
			
					</form>
	</div>
</div>
</div>
</div>
 </div>
 <br>
 <?php require 'includes/footer.php'  ?>


   
</body>
</html>
