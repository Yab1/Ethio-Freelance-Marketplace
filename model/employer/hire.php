<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db.php";

class Hire extends Database
{
    public $job_id;
    public $employer;
    public $freelancer;
    public $price;


    public function __construct($job_id,$employer,$freelancer,$price)
    {
        $this->job_id=$job_id;
        $this->employer=$employer;
        $this->freelancer=$freelancer;
        $this->price=$price;
    }

    public function post()
    {
        $uid=$_SESSION['user_id'];
              $sql = "INSERT INTO hired (project_id, e_username, f_username, price) VALUES ('$this->job_id','$uid','$this->freelancer','$this->price')";
              $sql1 = "UPDATE apply SET status ='hired' WHERE project_id ='$this->job_id'";
        $result = $this->connect()->query($sql);
        $result1 = $this->connect()->query($sql1);
        if($result==true)
        {
            $_SESSION['hire-msg'] = '<div class="alert alert-success alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    Freelancer Hired.
    </div>';
            header("location: ../../view/employer/employer-profile.php");
            exit();
        }
        else
        {
             $_SESSION['hire-msg'] = '<div class="alert alert-success alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    Failed.
    </div>';
            header("location: ../../view/employer/manage-project-details.php");
            exit();

        }
    }

}