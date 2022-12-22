<?php
 include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
 include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db.php";

if(isset($_SESSION["job_id"]))
    {
        $job_id=$_SESSION["job_id"];
    }
if(isset($_SESSION["usr_id"])){
    $usr_id=$_SESSION["usr_id"];
}
class Project_Detail extends Database
{

    public $project_name;
    public $category;
    public $description;
    public $budget;
    public $skill;
    public $username;
    public $bid;
    public $txt;
    public $id;
   function ProjectDetail()
    {
        $job_id=$_SESSION['job_id'];
        $sql = "SELECT * FROM project WHERE project_id='$job_id'";
        $result = $this->connect()->query($sql);

    		if ($result->num_rows > 0) 
            {
                while($row = $result->fetch_assoc()) 
                {
                    $this->project_name=$row["project_name"];
                    $this->category=$row["category"];
                    $this->description=$row["description"];
                    $this->budget=$row["budget"];
                    $this->skill=$row["skill"];
                    $this->id=$row["project_id"];
                } 
            }
    }

    function ViewBid()
    {
       $job_id=$_SESSION['job_id']; 
       $sql = "SELECT * FROM apply WHERE project_id='$job_id' ORDER BY bid";
       $result1 = $this->connect()->query($sql);

       if ($result1->num_rows > 0) 
        {
            while($row = $result1->fetch_assoc()) 
            {
                $this->username=$row["f_username"];
                $this->bid=$row["bid"];
                    
            } 
        }
    }



    function ViewFreelancer()
    {
        $usr_id=$_SESSION["usr_id"];
        $sql = "SELECT * FROM freelancer WHERE username='$usr_id'";
        $result = $this->connect()->query($sql);
        if ($result->num_rows > 0) 
            {
                while($row = $result->fetch_assoc()) 
                {
                    $this->fname=$row["first_name"];
                    $this->lname=$row["last_name"];
                    $this->username=$row["username"];
                    $this->email=$row['email'];
                    $this->phone=$row["phone_number"];
                    $this->gender=$row["gender"];
                    $this->birthdate=$row["dob"];
                    $this->address=$row["address"];
                    $this->bio=$row["bio"];
                    $this->prof_title=$row["professional_title"];
                    $this->education=$row["education"];
                    $this->experience=$row["experience"];
                } 
            }
    }


    function ViewCv()
    {
        $usr_id=$_SESSION["usr_id"];
        $sql = "SELECT * FROM cv WHERE f_username='$usr_id'";
        $result = $this->connect()->query($sql);
        if ($result->num_rows > 0) 
            {
                while($row = $result->fetch_assoc()) 
                {
                    $this->name=$row["fullname"];
                    $this->phone=$row["phone"];
                    $this->email=$row['email'];
                    $this->gender=$row["gender"];
                    $this->birthdate=$row["dob"];
                    $this->address=$row["address"];
                    $this->education=$row["education"];
                    $this->skill=$row["skill"];
                    $this->description=$row["description"];
                } 
                    
            }
    }

}
?>