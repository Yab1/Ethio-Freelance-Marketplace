<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db.php";




class Employer_Profile extends Database{
    public $username;
    public $fname;
    public $lname;
    public $email;
    public $phone;
    public $gender;
    public $birthdate;
    public $address;
    public $bio;
    public $project_name;
    public $category;
    public $deadline;
    public $budget;
    public $employer;
    public $project_id;
    public $service_name;
    public $service_id;
    public $type;
    public $pay_rate;
    public $freelancer; 
    public $count_pro; 
    public $count_ser; 
    public $count_feer;
    public $count_emp;

    function view(){

$uid=$_SESSION['user_id'];
        
$sql = "SELECT * FROM employer WHERE username='$uid'";
$sql2 = "SELECT * FROM project WHERE e_username='$uid'";
$sql3 = "SELECT * FROM service";
$sql4 = "SELECT * FROM project";
$sql5 = "SELECT * FROM employer";
$sql6 = "SELECT * FROM freelancer";
$sql7 = "SELECT * FROM blogger";

$result = $this->connect()->query($sql);
$result2 = $this->connect()->query($sql2);
$result3 = $this->connect()->query($sql3);
$result4 = $this->connect()->query($sql4);
$result5 = $this->connect()->query($sql5);
$result6 = $this->connect()->query($sql6);
$result7 = $this->connect()->query($sql7);


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
        
        }
} 
if ($result2->num_rows > 0) {
    while($row = $result2->fetch_assoc()) 
    {
        $this->project_name=$row["project_name"];
        $this->category=$row["category"];
        $this->deadline=$row["posted_on"];
        $this->project_id=$row["project_id"];
        $this->budget=$row["budget"];
        $this->employer=$row["e_username"];
    } 

}

    if ($result3->num_rows > 0) {

    while($row = $result3->fetch_assoc()) {
        $this->count_ser=mysqli_num_rows($result3);
        $this->service_name=$row["service_name"];
        $this->type=$row["category"];
        $this->service_id=$row["service_id"];
        $this->pay_rate=$row["payrate"];
        $this->freelancer=$row["f_username"];
    } 


}
 if ($result4->num_rows > 0)
    {
    while($row = $result4->fetch_assoc()) 
        {
         $this->count_pro=mysqli_num_rows($result4);
        } 
    }
     if ($result5->num_rows > 0)
    {
    while($row = $result5->fetch_assoc()) 
        {
         $this->count_emp=mysqli_num_rows($result5);
        } 
    }
     if ($result6->num_rows > 0)
    {
    while($row = $result6->fetch_assoc()) 
        {
         $this->count_free=mysqli_num_rows($result6);
        } 
    }

     if ($result7->num_rows > 0)
    {
    while($row = $result7->fetch_assoc()) 
        {
         $this->count_blog=mysqli_num_rows($result7);
        } 
    }
}
}
?>