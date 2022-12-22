<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db.php";
if(isset($_SESSION['user_id'])){
    
    $username = $_SESSION['user_id'];
}
else{
    $username="";
}

class Edit_Cv extends Database{
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


    public function update_cv()
    {
        $uid=$_SESSION['user_id'];
      $sql = "UPDATE cv SET fullname='$this->name',phone='$this->phone',email='$this->email',gender='$this->gender',dob='$this->dob',address='$this->address',education='$this->education',skill='$this->skill',description='$this->description' WHERE f_username='$uid'";
      $stmt= $this->connect()->query($sql);
         if($stmt==true)
          {
            $_SESSION['cv-msg'] = '<div class="alert alert-success alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
   Cv update successful..
    </div>';
           
        header("location: ../../view/freelancer/freelancer-profile.php");
          exit();
          }
           
    }



}