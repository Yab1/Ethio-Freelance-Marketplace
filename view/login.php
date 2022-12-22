<?php 
include_once"$_SERVER[DOCUMENT_ROOT]/free/session.php";
include_once "$_SERVER[DOCUMENT_ROOT]/free/model/login.php";
include_once "$_SERVER[DOCUMENT_ROOT]/free/controller/login.php";
if(isset($_SESSION["msg"])){
   $err=$_SESSION["msg"];
    unset($_SESSION["msg"]);
}
   else{
    $err="";
}
if(isset($_SESSION["suc-msg"])){
   $suc=$_SESSION["suc-msg"];
    unset($_SESSION["suc-msg"]);
}
   else{
    $suc="";
}
if(isset($_SESSION["fail"])){
   $suc=$_SESSION["fail"];
    unset($_SESSION["fail"]);
}
   else{
    $suc="";
}
if(isset($_SESSION["p-msg"])){
   $suc=$_SESSION["p-msg"];
    unset($_SESSION["p-msg"]);
}
   else{
    $suc="";
}
if(isset($_SESSION["re_msg"])){
   $res=$_SESSION["re_msg"];
    unset($_SESSION["re_msg"]);
}
   else{
    $res="";
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="includes/res/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="includes/css/login.css">
   <link rel="stylesheet" type="text/css" href="includes/css/bootstrapValidator.css">
	<script src="includes/js/jquery.js"></script>
    <script src="includes/js/bootstrap.min.js"></script>
   <script src="includes/js/bootstrapValidator.js"></script>

</head>
<body>
<div class="overlay">

<form method="post" action="../controller/login.php" >
 
   <!--   con = Container  for items in the form-->
   <div class="con">
   <!--     Start  header Content  -->
   <header class="head-form">
      <?php 
   // Show any success or error message 
         echo $suc;
         echo $res;
   ?>
      <h2 >Log In</h2>
      <!--     A welcome message or an explanation of the login form -->
      <p>login here using your username and password</p>
   </header>
   <!--     End  header Content  -->
   <br> <?php 
   // Show any success or error message 
         echo $err;
   ?>
   <div class="field-set">
         <input class="form-input" id="txt-input" type="text" placeholder="@UserName" name="username">
      <br>
      <input class="form-input" type="password" placeholder="Password" id="pwd"  name="password" >
      <br>
      <button type="submit" class="log-in" name="login"> Log In </button>
   </div>
   <div class="other">

      <button class="btn submits frgt-pass" ><a href="forgot-pass.php" style=" text-decoration: none; color: white;">Forgot Password</a></button>

      <button class="btn submits sign-up"><a href="register.php" style=" text-decoration: none; color: white;">Sign Up 

      <i class="fa fa-user-plus" aria-hidden="true"></i></a>
      </button>

   </div>
     
<!--   End Conrainer  -->
  </div>
  
  <!-- End Form -->
</form>
</div>

</body>
</html>