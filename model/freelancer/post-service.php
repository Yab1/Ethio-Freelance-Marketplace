<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
 include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db.php";
  include_once "$_SERVER[DOCUMENT_ROOT]/free/model/freelancer/freelancer-profile.php";
 include_once "$_SERVER[DOCUMENT_ROOT]/free/controller/freelancer/freelancer-profile.php";



class Service extends Database{
	public $name;
	public $description;
	public $category;
	public $username;
	public $pay_rate;
	public $deadline;
	

	public function __construct($name,$description,$category,$pay_rate,$username){
		$this->name=$name;
		$this->description=$description;
		$this->category=$category;
		$this->pay_rate=$pay_rate;
		$this->username=$username;
		
	}

	public function postservice(){
		$uid=$_SESSION['user_id'];
		  $sql = "INSERT INTO service (service_name, description, category, payrate, f_username) VALUES ('$this->name','$this->description','$this->category','$this->pay_rate','$uid')";
    
    $result = $this->connect()->query($sql);
    if($result==true){
       $_SESSION['post-msg'] = '<div class="alert alert-success alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    Service posted.
    </div>';
        header("location: ../../view/freelancer/freelancer-profile.php");
    }
    else{
		$_SESSION['post-msg'] = '<div class="alert alert-success alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    Service post Unsuccessful.
    </div>';
		header("location: ../../view/freelancer/post-service.php");
	}
	}
	
}
?>