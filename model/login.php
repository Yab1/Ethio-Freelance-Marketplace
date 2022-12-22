<?php
include_once"$_SERVER[DOCUMENT_ROOT]/free/session.php";
include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db.php";
  
class signin extends Database{
 private $username;   
 private $password;
 public $errmsg;

public function checklogin($username,$password)
{

$sql="SELECT * from user WHERE username='$username'  AND password='$password'";
$stmt= $this->connect()->query($sql);
$num=$stmt->num_rows;
$user_data = $stmt->fetch_assoc();
if($num>0 )
{        
// this login variable will use for the session thing
   
$_SESSION['login'] = true;
$_SESSION['user_id'] = $username;   
$role =$user_data['role_id'];

if($role=='1')
{
echo "<script type='text/javascript'> document.location = '../view/admin/admin-index.php'; </script>";
}
 else if($role=='2'){
echo "<script type='text/javascript'> document.location = '../view/freelancer/freelancer-profile.php' </script>";
}
 else if($role=='3'){
echo "<script type='text/javascript'> document.location = '../view/employer/employer-profile.php'; </script>";
}
else if($role=='4'){
echo "<script type='text/javascript'> document.location = '../blog/view/blogger-profile.php'; </script>";
}
else if($role=='5'){
echo "<script type='text/javascript'> document.location = '../view/support/support-profile.php'; </script>";
}
}
else
{
   $_SESSION["msg"] = 'Unable to login! Wrong username or password.';
    header("location: ../view/login.php ");    
} 
} 
}

?>















