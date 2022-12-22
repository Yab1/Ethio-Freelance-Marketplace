<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db.php";
if(isset($_SESSION['user_id'])){
    
    $username = $_SESSION['user_id'];
}
else{
    $username="";
}

class Edit_Admin extends Database{
   public $fname;
   public $lname;
   public $gender;
   public $phone;
   public $email;
   
 
   public function __construct($fname,$lname,$email,$gender,$phone)
   {
       $this->fname = $fname;
       $this->lname = $lname;
       $this->gender = $gender;
       $this->phone = $phone;
       $this->email = $email;       
   }

   public function update_admin()
    {
        $uid=$_SESSION['user_id'];
        $sql = "UPDATE admin SET first_name='$this->fname',last_name='$this->lname',email='$this->email',gender='$this->gender',phone_number='$this->phone' WHERE username='$uid'";
        $stmt= $this->connect()->query($sql);
         if($stmt==true)
          {
           $_SESSION['msg'] = '<div class="alert alert-success alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success</strong>! update successful.
    </div>';
        header("location: ../../view/admin/admin-profile.php");
        exit();
          }
          else
          {

           $_SESSION['msg'] = $_SESSION['msg'] = 'update unsuccessful.';
        header("location: ../../view/admin/edit-admin.php");
        exit();
          }
    }
 }

?>