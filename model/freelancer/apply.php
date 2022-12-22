<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db.php";
if(isset($_SESSION['user_id'])){
    
    $username = $_SESSION['user_id'];
}
else{
    $username="";
}

if(isset($_SESSION["job_id"])){
    $job_id=$_SESSION["job_id"];
}

class Apply extends Database{
	   
       public $bid;
       public $msg;
	public function __construct($cover,$bid)
	{
		  
		  $this->bid = $bid;
	}

	public function apply_job(){
		$uid=$_SESSION['user_id'];
		$job_id=$_SESSION['job_id'];
		$sql = "SELECT * FROM apply WHERE project_id='$job_id' and f_username='$uid'";
		
		$result = $this->connect()->query($sql);
		if ($result->num_rows > 0)
		{
			$_SESSION['msg'] = '<div class="alert alert-success alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
   You have already applied for this job. You cannot apply again.
    </div>';
	 header("location: apply.php");
	 exit();
		}
else {
    $_SESSION['msg'] ="";
	 }

     if ($_SESSION['msg'] ==""){
	 $sql1 = "INSERT INTO apply (f_username, project_id, bid, status) VALUES ('$uid', '$job_id', '$this->bid','pending')";
    $result1 = $this->connect()->query($sql1);

    if($result1==true){
       $_SESSION['msg'] = '<div class="alert alert-success alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
   You have applied for this job.
    </div>';
        header("location: freelancer-profile.php");
        exit();
    }
       
    }



	}
}


?>