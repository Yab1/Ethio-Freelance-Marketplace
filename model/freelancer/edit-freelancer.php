<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db.php";

if(isset($_SESSION['user_id'])){
    
    $username = $_SESSION['user_id'];
}
else{
    $username="";
}


class Edit_Freelancer extends Database{
   public $fname;
   public $lname;
   public $dob;
   public $gender;
   public $phone;
   public $email;
   public $address;
   public $bio;
   public $prof_title;
   public $education;
   public $experience;
  
   public function __construct($fname,$lname,$bio,$dob,$gender,$phone,$email,$address,$prof_title,$education,$experience)
   {
       $this->fname = $fname;
       $this->lname = $lname;
       $this->bio = $bio;
       $this->dob = $dob;
       $this->gender = $gender;
       $this->phone = $phone;
       $this->email = $email;
       $this->address = $address;
       $this->prof_title = $prof_title;
       $this->education = $education;
       $this->experience = $experience;
   }
   public function update_freelancer()
    {
        $uid=$_SESSION['user_id'];
      $sql = "UPDATE freelancer SET first_name='$this->fname',last_name='$this->lname',bio='$this->bio',dob='$this->dob',gender='$this->gender',phone_number='$this->phone',email='$this->email',address='$this->address',professional_title='$this->prof_title',education='$this->education',experience='$this->experience' WHERE username='$uid'";
      $stmt= $this->connect()->query($sql);
         if($stmt==true)
          {
            $_SESSION['pro-msg'] = '<div class="alert alert-success alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
   Profile update successful.
    </div>';
        header("location: ../../view/freelancer/freelancer-profile.php");
          exit();
          }
           
    }
 }
?>