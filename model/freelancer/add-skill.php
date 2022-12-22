<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db.php";
if(isset($_SESSION['user_id'])){
    
    $username = $_SESSION['user_id'];
}
else{
    $username="";
}
class Skill extends Database
{
    public $skill;
    public function __construct($skill)
    {
        
        $this->skill= $skill;
    }
    public function addskill()
    {
        
        $skills= implode(",",$this->skill);
        $uid=$_SESSION['user_id'];
        $sql= "UPDATE freelancer SET skill='$skills' WHERE username='$uid'";
        $result = $this->connect()->query($sql);
        if($result==true)
        {
            $_SESSION['skill-msg'] = '<div class="alert alert-success alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    Skill has been added.
    </div>';
            header("location: ../../view/freelancer/freelancer-profile.php");
            exit();
        }
        else
        {
             $_SESSION['skill-emsg'] = '<div class="alert alert-success alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    Failed.
    </div>';
            header("location: ../../view/freelancer/add-skill.php");
            exit();

        }
    }
}
?>