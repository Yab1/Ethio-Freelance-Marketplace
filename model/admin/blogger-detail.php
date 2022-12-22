<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
 include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db.php";
if(isset($_SESSION["user"])){
    $user=$_SESSION["user"];
}

class Blogger_Detail extends Database{

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
    public $user;
    public $address;
    function BloggerDetail()
    {
        $employer=$_SESSION["user"];
        $sql1 = "SELECT * FROM blogger WHERE username='$employer'";
        $result1 = $this->connect()->query($sql1);
            if ($result1->num_rows > 0) {
    while($row = $result1->fetch_assoc()) {
        $this->fname=$row["first_name"];
        $this->lname=$row["last_name"];
        $this->user=$row["username"];
        $this->email=$row["email"];
        $this->address=$row["address"];
        $this->phone=$row["phone_number"];

    } 
    
    }
}
}