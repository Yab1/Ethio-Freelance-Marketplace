<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db.php";




class Edit_Service extends Database{
    public $name;
    public $description;
    public $category;
    public $payrate;
    public $s_id;
     public function __construct($name,$description,$category,$payrate)
   {
       $this->name = $name;
       $this->description = $description;
       $this->category = $category;
       $this->payrate = $payrate;      
   }

  public function update_service()
    {
        $sid=$_SESSION['s_id'];
        $sql = "UPDATE service SET service_name='$this->name',description='$this->description',category='$this->category',payrate='$this->payrate' WHERE service_id='$sid'";
        $stmt= $this->connect()->query($sql);
         if($stmt==true)
          {
           $_SESSION['ser-msg'] = '<div class="alert alert-success alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success</strong>! service update  successful.
    </div>';
        header("location: ../../view/freelancer/manage-service-details.php");
        exit();
          }
          else
          {

             $_SESSION['ser-msg'] = '<div class="alert alert-success alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    Service Update Unsuccessful.
    </div>';
        header("location: ./../view/freelancer/freelancer-profile.php");
        exit();
          }
    }
}
?>