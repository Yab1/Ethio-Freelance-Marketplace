<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
 include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db.php";
  include_once "$_SERVER[DOCUMENT_ROOT]/free/model/employer/employer-profile.php";
 include_once "$_SERVER[DOCUMENT_ROOT]/free/controller/employer/employer-profile.php";

class Project extends Database{
	public $name;
	public $description;
	public $category;
	public $username;
	public $skill;
	public $budget;
	public $deadline;

	public function __construct($name,$description,$category,$username,$skill,$budget,$deadline){
		$this->name=$name;
		$this->description=$description;
		$this->category=$category;
		$this->username=$username;
		$this->skill=$skill;
		$this->budget=$budget;
		$this->deadline=$deadline;
	}
	public function post(){
		$uid=$_SESSION['user_id'];
		  $sql = "INSERT INTO project (project_name, description, category, e_username, skill, budget, posted_on,status) VALUES ('$this->name','$this->description','$this->category','$uid','$this->skill','$this->budget','$this->deadline','pending')";
    
    $result = $this->connect()->query($sql);
    if($result==true){
        $_SESSION["project_id"] = $this->connect()->insert_id;
        header("location: ../../view/employer/employer-profile.php");
    }
    else{
		echo "error";
		header("location: ../../view/employer/post-job.php");
	}
	}
}
?>