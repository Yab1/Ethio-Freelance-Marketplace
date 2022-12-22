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
        public function DeleteEmp()
        {  
            $b=$this->blog_id;
                   $sql="DELETE FROM employer WHERE username='$b'";
                   $sql1="DELETE FROM user WHERE username='$b'";
                   $result = $this->connect()->query($sql);
                   $result1 = $this->connect()->query($sql1);
                    if($result1==true)
                    {

                    $_SESSION['msg'] = '<div class="alert alert-success alert-dismissable">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success:</strong> Employer Profile Deleted successfully.
                        </div>';
                        header("location: ../../view/admin/admin-profile.php");
                        exit();
                    }

                    else 
                    {
                        $_SESSION['msg'] = '<div class="alert alert-danger  mt:10px>
                        <a href="#"  data-dismiss="alert" ></a>
                        Something went wrong. Please try again
                        </div>';
                        header("location:../../view/admin/employer-details.php");
                        exit(); 
                    }
               }
               public function DeleteFree()
        {  
            $b=$this->blog_id;
                   $sql="DELETE FROM freelancer WHERE username='$b'";
                   $sql1="DELETE FROM user WHERE username='$b'";
                   $result = $this->connect()->query($sql);
                   $result1 = $this->connect()->query($sql1);
                    if($result1==true)
                    {

                    $_SESSION['msg'] = '<div class="alert alert-success alert-dismissable">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success:</strong> Freelancer Profile Deleted successfully.
                        </div>';
                        header("location: ../../view/admin/admin-profile.php");
                        exit();
                    }

                    else 
                    {
                        $_SESSION['msg'] = '<div class="alert alert-danger  mt:10px>
                        <a href="#"  data-dismiss="alert" ></a>
                        Something went wrong. Please try again
                        </div>';
                        header("location:../../view/admin/freelancer-details.php");
                        exit(); 
                    }
               }

               public function DeleteBlogger()
        {  
            $b=$this->blog_id;
                   $sql="DELETE FROM blogger WHERE username='$b'";
                   $sql1="DELETE FROM user WHERE username='$b'";
                   $result = $this->connect()->query($sql);
                   $result1 = $this->connect()->query($sql1);
                    if($result1==true)
                    {

                    $_SESSION['msg'] = '<div class="alert alert-success alert-dismissable">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        <strong>Success:</strong> Blogger Profile Deleted successfully.
                        </div>';
                        header("location: ../../view/admin/admin-profile.php");
                        exit();
                    }

                    else 
                    {
                        $_SESSION['msg'] = '<div class="alert alert-danger  mt:10px>
                        <a href="#"  data-dismiss="alert" ></a>
                        Something went wrong. Please try again
                        </div>';
                        header("location:../../view/admin/freelancer-details.php");
                        exit(); 
                    }
               }
            
               
            
}


 ?>

            
            
            