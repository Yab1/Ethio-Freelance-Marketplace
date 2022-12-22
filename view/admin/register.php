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
		<link rel="stylesheet" type="text/css" href="../includes/css/reg-form.css">
		<link rel="stylesheet" type="text/css" href="includes/res/font-awesome/css/font-awesome.min.css">
        <script src="../js/jquery.js"></script>
        <style type="text/css">label{color: white;}</style>
</head>
<body>
	<?php require 'includes/admin-nav.php'; ?><br><br><br>
	
<form method="post" action="../../controller/admin/register.php">
<div style=" text-align: center; color: white;"><h1>Register</h1>
<hr style=" width: 50%; margin-left: 3.5in; border: 1px solid; color: white;"></div>
	<div class="col-1" style=" margin-top: -1in;">
	
		<label>First Name</label>
		<span><input type="text" name="fname" id="input"></span>
		<label>Last Name</label>
		<span ><input type="text" name="lname" id="input"></span>
		<label>User Name</label>
		<span ><input type="text" name="username" id="input"></span>
		<?php 
   // Show any success or error message 
         
   ?>
		<label>Email</label>
		<span ><input type="Email" name="email" id="input"></span>
		<?php 
   // Show any success or error message 
         
   ?>
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
		<span><label for="3"><input type="radio" name="usertype" value="1" id="fm">Admin</label></span>
		<span><label for="3"><input type="radio" name="usertype" value="4" id="fm">Bloger</label></span>
		<span><label for="2"><input type="radio" name="usertype" value="5" id="fm">Support</label></span>
		<br>
		<button type="submit" id="btn" name="signup" >Sign Up</button>

	
	</div><br><br><br><br>
<script type="text/javascript">
	function validate(){
        var alphaExp=/^[a-zA-Z]+$/;
        // /[a-zA-Z]/g;
        var numeric=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
        var uppercase=/[A-Z]/g;
        var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
      
        if (!record.username.value.match(alphaExp))
        {
            alert("Enter a name")
            record.username.focus()
            return false;
        }

        if(!record.email.value.match(emailExp)){
            alert("Please provide your email")
        }
        if(!record.password.value.match(numeric)){

            alert("Password doesn't fullfil requirments")
        }
        
        
} 
</script>
<?php require 'includes/footer.php'; ?>
</form>
</body>
</html>