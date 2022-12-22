<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db.php";


class Freelancer_Profile extends Database{
    public $username;
    public $fname;
    public $lname;
    public $email;
    public $phone;
    public $gender;
    public $birthdate;
    public $address;
    public $bio;
    public $prof_title;
    public $education;
    public $experience;
    public $project_name;
    public $category;
    public $deadline;
    public $budget;
    public $employer;
    public $project_id;
    public $skill;


    function view(){
$uid=$_SESSION['user_id'];
        
$sql = "SELECT * FROM freelancer WHERE username='$uid'";
$sql1 = "SELECT * FROM project";
$result = $this->connect()->query($sql);
$result2 = $this->connect()->query($sql1);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
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
         $this->skill=$row["skill"];
        
        }
} 
if ($result2->num_rows > 0) {
    while($row=$result2->fetch_assoc()) {
        $this->project_id=$row["project_id"];
        $this->project_name=$row["project_name"];
        $this->category=$row["category"];
        $this->employer=$row["e_username"];
        $this->budget=$row["budget"];
        $this->deadline=$row["posted_on"];       
    } 
}
}
}
?>