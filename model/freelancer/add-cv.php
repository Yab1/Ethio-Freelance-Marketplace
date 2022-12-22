<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db.php";
if(isset($_SESSION['user_id'])){
    
    $username = $_SESSION['user_id'];
}
else{
    $username="";
}


class Cv extends Database{
   public $name;
   public $phone;
   public $email;
   public $gender;
   public $dob;
   public $address;
   public $education;
   public $skill;
   public $description;
 
  public function __construct($name,$phone,$email,$gender,$dob,$address,$education,$skill,$description)
   {
   	   $this->name = $name;
   	   $this->phone = $phone;
   	   $this->email = $email;
   	   $this->gender = $gender;
   	   $this->dob = $dob;
   	   $this->address = $address;
       $this->education = $education;
       $this->skill = $skill;
       $this->description = $description;
   }

   public function addcv(){
		$uid=$_SESSION['user_id'];

		$sql1 = "SELECT * FROM cv WHERE f_username = '$uid'";
		$result1 = $this->connect()->query($sql1);
		if ($result1->num_rows > 0)
		{
			$_SESSION['cv-msg'] = '<div class="alert alert-success alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    You already have a CV uploaded. You cannot upload again.
    </div>';
	 header("location: ../../view/freelancer/add-cv.php");
		}
else {
    $_SESSION['cv-msg']="";
	 }

if ($_SESSION['cv-msg']==""){


		  $sql = "INSERT INTO cv (fullname, phone, email, gender, dob, address, education, skill, description ,f_username) VALUES ('$this->name','$this->phone','$this->email','$this->gender','$this->dob','$this->address','$this->education','$this->skill','$this->description','$uid')";
    
    $result = $this->connect()->query($sql);
    if($result==true){
       $_SESSION['cv-msg'] = '<div class="alert alert-success alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success</strong>! CV Added.
    </div>';
        header("location: ../../view/freelancer/freelancer-profile.php");
    }
    else{
		$_SESSION['cv-msg'] = '<div class="alert alert-success alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Failed</strong>! CV  not Added..
    </div>';
		header("location: ../../view/freelancer/add-cv.php");
	}

}
}
	
}
?>