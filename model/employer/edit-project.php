<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db.php";




class Edit_Project extends Database{
    public $name;
    public $description;
    public $category;
    public $budget;
    public $job_id;
     public function __construct($name,$description,$category,$skill,$budget)
   {
       $this->name = $name;
       $this->description = $description;
       $this->category = $category;
       $this->skill = $skill;
       $this->budget = $budget;      
   }

  public function update_project()
    {
        $jid=$_SESSION['job_id'];
        $sql = "UPDATE project SET project_name='$this->name',description='$this->description',category='$this->category',skill='$this->skill',budget='$this->budget' WHERE project_id='$jid'";
        $stmt= $this->connect()->query($sql);
         if($stmt==true)
          {
           $_SESSION['msg'] = '<div class="alert alert-success alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong>Success</strong>! update successful.
    </div>';
        header("location: ../../view/employer/manage-project-details.php");
        exit();
          }
          else
          {

           $_SESSION['msg'] = $_SESSION['msg'] = 'update unsuccessful.';
        header("location: ./../view/employer/employer-profile.php");
        exit();
          }
    }
}
?>