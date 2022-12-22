<?php
session_start();
include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db.php";

class ChangePass extends Database 
{
	private $email;
	private $npwd;
	private $copwd;
	
	function __construct($email,$npwd,$copwd)
	{
	$this->email=$email;
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
        header("location: ../view/forgot-pass.php");
        exit(); 
         
    } 
     else
    {
     	$email=$this->email;
     	$sql = "SELECT * FROM user WHERE email='$email'";
            $stmt= $this->connect()->query($sql);
             if ($stmt==true)
            {  
            	$email=$this->email;
            	$sq="UPDATE user SET password='$this->newPassword' where email='$email'";
				$qry= $this->connect()->query($sq);
				if($qry==true)
				{
					$_SESSION['re_msg'] = '<div class="alert alert-success alert-dismissable">
					<a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
					Password Changed successfully.
					</div>';
					header("location: ../view/login.php");       
				}
				else 
				{
					$_SESSION['difr-msg'] = '<div class="alert alert-danger  mt:10px>
					<a href="#"  data-dismiss="alert" ></a>
 					Error password not changed
    				</div>';
   					header("location: ../view/register.php");
					exit(); 
				 }
     		}

     		else
     		{
				$_SESSION['un-msg'] = '<div class="alert alert-success alert-dismissable">
					<a href="#" class="close" data-dismiss="alert" aria-label="close"></a>
					Email does not exist.
					</div>';
                header("location: ../view/forgot-pass.php");
                exit(); 
			}
	}
}
}
?>
