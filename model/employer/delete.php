<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db.php";
if(isset($_SESSION["user_id"])){
    $username=$_SESSION["user_id"];}
    else{
    $username="";
    header("location: ../../index.php");
}


class Delete extends Database
{
    public $blog_id;

        public function __construct($blog_id)
        {
            $this->blog_id=$blog_id;
        }
        public function DeleteService()
        {  
            $b=$this->blog_id;
                   $sql="DELETE FROM project WHERE project_id='$b'";
                   $result = $this->connect()->query($sql);

                    if($result==true)
                    {

                    $_SESSION['msg'] = '<div class="alert alert-success alert-dismissable">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success:</strong> Project Deleted successfully.
                        </div>';
                        header("location: ../../view/employer/employer-profile.php");

                        exit();
                    }

                    else 
                    {
                        $_SESSION['msg'] = '<div class="alert alert-danger  mt:10px>
                        <a href="#"  data-dismiss="alert" ></a>
                        Something went wrong. Please try again
                        </div>';
                        header("location:../../view/employer/employer-profile.php");
                        exit(); 
                    }
               }
            
        }


 ?>

            
            
            