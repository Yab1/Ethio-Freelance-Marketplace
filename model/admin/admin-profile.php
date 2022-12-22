<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db.php";
if(isset($_SESSION["user_id"])){
    $username=$_SESSION["user_id"];}
    else{
    $username="";
    header("location: index.php");
}
class Admin_Profile extends Database{
    public $username;
    public $fname;
    public $lname;
    public $email;
    public $phone;
    public $gender;
  
 
    function View(){
$uid=$_SESSION['user_id'];
        
$sql = "SELECT * FROM admin WHERE username='$uid'";
$result = $this->connect()->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $this->fname=$row["first_name"];
        $this->lname=$row["last_name"];
        $this->username=$row["username"];
        $this->email=$row['email'];
        $this->phone=$row["phone_number"];
        $this->gender=$row["gender"];
       
        
        }
} 
}
}
?>