<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db.php";
if(isset($_SESSION['user_id'])){
    
    $username = $_SESSION['user_id'];
}
else{
    $username="";
}

class View_Cv extends Database{
   public $name;
   public $phone;
   public $email;
   public $gender;
   public $dob;
   public $address;
   public $education;
   public $skill;
   public $description;

    function view()
    {
        $uid=$_SESSION['user_id'];
        $sql = "SELECT * FROM cv WHERE f_username='$uid'";
        $result = $this->connect()->query($sql);
            if ($result->num_rows > 0) 
                    {
                        // output data of each row
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
                            $this->description=$row['description'];
                        }
                    } 
    }
}