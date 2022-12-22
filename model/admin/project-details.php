<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
 include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db.php";
if(isset($_SESSION["job_id"])){
    $job_id=$_SESSION["job_id"];
}

class Project_Detail extends Database{

    public $project_name;
    public $category;
    public $deadline;
    public $budget;
    public $employer;
    public $project_id;
    public $skill;
    public $description;
    public $fname;
    public $email;
    public $phone;
    public $address;
    public $id;

   function ProjectDetail()
    {
    $job_id=$_SESSION['job_id'];
    $sql = "SELECT * FROM project WHERE project_id='$job_id'";
    $result = $this->connect()->query($sql);

		if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $this->project_name=$row["project_name"];
        $this->category=$row["category"];
        $this->deadline=$row["posted_on"];
        $this->budget=$row["budget"];
        $this->employer=$row["e_username"];
        $this->skill=$row['skill'];
        $this->description=$row['description'];
        $this->id=$row['project_id'];
    } 
}
}

    function employer()
    {
        $employer=$this->employer;
        $sql1 = "SELECT * FROM employer WHERE e_username='$employer'";
        $result1 = $this->connect()->query($sql1);
            if ($result1->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $this->fname=$row["fname"];
        $this->phone=$row["phone_number"];
        $this->email=$row["email"];
        $this->address=$row["address"];

    } 
    
    }
}

}
?>





