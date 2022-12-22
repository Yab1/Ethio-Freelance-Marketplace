<?php 


include_once "$_SERVER[DOCUMENT_ROOT]/free/model/register.php";
include_once "$_SERVER[DOCUMENT_ROOT]/free/controller/register.php";
if(isset($_SESSION["user-msg"])){
   $user=$_SESSION["user-msg"];
    unset($_SESSION["user-msg"]);
}
   else{
    $user="";
}

if(isset($_SESSION["difr-msgdifr"])){
   $difr=$_SESSION["difr-msgdifr"];
    unset($_SESSION["difr-msgdifr"]);
}
   else{
    $difr="";
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
		<link rel="stylesheet" type="text/css" href="includes/css/reg-form.css">
		<link rel="stylesheet" type="text/css" href="includes/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="includes/res/font-awesome/css/font-awesome.min.css">
        <script src="includes/js/jquery.js"></script>
        <script type="text/javascript" src="includes/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="includes/js/bootstrapValidator.js"></script>
        <style type="text/css">label{color: white;}</style>
</head>
<body>
	
<form method="post" action="../controller/register.php" id="regi" >

	<div class="col-1">
		
		<label>First Name</label>
		<span ><input type="text" name="fname" id="input"></span>
		<label>Last Name</label>
		<span ><input type="text" name="lname" id="input"></span>
		<label>User Name</label>
		<span ><input type="text" name="username" id="input"></span>
		<label>Email</label>
		<span ><input type="Email" name="email" id="input"></span>
		<label>Password</label>
		<span ><input type="password" name="password" id="input" ></span>
		<label>Confirm Password</label>
		<span ><input type="password" name="cpassword" id="input"></span>
		<label>Phone</label>
		<span><input type="text" name="phone" id="phone"></span>
		<label>Gender</label><br>
		<span><label for="fm"><input type="radio" name="gender" value="female" id="fm">Female</label></span>
		<span><label for="ma"><input type="radio" name="gender" value="male" id="ma">Male</label></span>
		<label>Date of Birth</label>
		<span><input type="Date" name="dob" id="dob"></span>
		<label>Address</label>
		<span><input type="text" name="address" id="phone"></span>
		<label>Account Type</label><br>
		<span><label for="3"><input type="radio" name="usertype" value="3" id="fm">Emlpoyer</label></span>
		<span><label for="2"><input type="radio" name="usertype" value="2" id="ma">Freelancer</label></span>
		
		<button type="submit" id="btn" name="signup" >Sign Up</button>

	
	</div>
</form>
</body>
</html>