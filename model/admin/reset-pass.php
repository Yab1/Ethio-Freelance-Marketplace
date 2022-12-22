<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db.php";
if(isset($_SESSION['user_id'])){
    
    $username = $_SESSION['user_id'];
}
else{
    $username="";
}
class ChangePass extends Database 
{
	private $cpwd;
	private $npwd;
	private $copwd;
	
	function __construct($cpwd,$npwd,$copwd)
	{
	$this->currentPassword=$cpwd;
	$this->newPassword=$npwd;
	$this->confirmPassword=$copwd;	
	}

	
	public function changePwd()
	{
$uid=$_SESSION['user_id'];
							
		if($this->confirmPassword!==$this->newPassword)
       {
     $_SESSION['d_msg'] = '<div class="alert alert-danger  mt:10px>
    <a href="#"  data-dismiss="alert" ></a>
    <strong>ERROR:</strong> password does not match.
    </div>';
        header("location: ../view/reset-pass.php");
        exit(); 
         
     }
     else{
$sq="UPDATE user SET password='$this->newPassword' where username='$uid'";
$qry= $this->connect()->query($sq);
if($qry==true)
{
$_SESSION['msg'] = '<div class="alert alert-success alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
    Password Changed successfully.
    </div>';
        header("location: ../view/login.php");       
}

	
	else {
		$_SESSION['difr-msg'] = '<div class="alert alert-danger  mt:10px>
<a href="#"  data-dismiss="alert" ></a>
 Current Password Not Correct
    </div>';
   header("location: ../view/register.php");
exit(); 
	}
}
}
}
?>
