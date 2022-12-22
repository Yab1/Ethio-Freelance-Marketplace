<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db.php";



class Freelancer_View extends Database{
    public $first_name;
    public $last_name;
    public $email;
    public $address;

     function view_freelancer(){
       

$sql = "SELECT * FROM freelancer";
$result = $this->connect()->query($sql);
$resultcheck= mysqli_num_rows($result);
if ($resultcheck > 0) {
    while($ans=mysqli_fetch_assoc($result)) {
        $this->first_name=$ans["first_name"];
        $this->last_name=$ans["last_name"];
        $this->email=$ans["email"];
        $this->address=$ans["address"];
             
    } 

    

}

}
}
?>