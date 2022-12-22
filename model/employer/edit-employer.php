<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db.php";
if(isset($_SESSION['user_id'])){
    
    $username = $_SESSION['user_id'];
}
else{
    $username="";
}

class Edit_Employer extends Database{
   public $fname;
   public $lname;
   public $bio;
   public $dob;
   public $gender;
   public $phone;
   public $email;
   public $address;
 
   public function __construct($fname,$lname,$bio,$dob,$gender,$phone,$email,$address)
   {
       $this->fname = $fname;
       $this->lname = $lname;
       $this->bio = $bio;
       $this->dob = $dob;
       $this->gender = $gender;
       $this->phone = $phone;
       $this->email = $email;
       $this->address = $address;       
   }

   public function update_employer()
    {
        $uid=$_SESSION['user_id'];
        $sql = "UPDATE employer SET first_name='$this->fname',last_name='$this->lname',bio='$this->bio',dob='$this->dob',gender='$this->gender',phone_number='$this->phone',email='$this->email', address='$this->address' WHERE username='$uid'";
        $stmt= $this->connect()->query($sql);
         if($stmt==true)
          {
           $_SESSION['msg'] = '<div class="alert alert-success alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success</strong>! update successful.
    </div>';
        header("location: ../../view/employer/employer-profile.php");
        exit();
          }
          else
          {

           $_SESSION['msg'] = $_SESSION['msg'] = 'update unsuccessful.';
        header("location: ../../view/employer/edit-employer.php");
        exit();
          }
    }
 }

?>