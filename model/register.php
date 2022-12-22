<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db.php";
class Signup extends Database{
   public $fname;
   public $lname;
   public $dob;
   public $username;
   public $gender;
   public $phone;
   public $email;
   public $address;
   public $password;
   public $cpassword; 
   public $usertype;
   public function __construct($fname,$lname,$dob,$username,$gender,$phone,$email,$address,$password,$cpassword,$usertype)
   {
       $this->fname = $fname;
       $this->lname = $lname;
       $this->dob = $dob;
       $this->username = $username;
       $this->gender = $gender;
       $this->phone = $phone;
       $this->email = $email;
       $this->address = $address;
       $this->password = $password;
       $this->cpassword = $cpassword;
       $this->usertype = $usertype;

   }
   
   public function user_Register()
    {       
         if($this->password !== $this->cpassword)
       {
       $_SESSION["difr-msg"] = 'password does not match';
        header("location: ../view/register.php");
        exit(); 
         
     }
     
        elseif(filter_var($this->username, FILTER_VALIDATE_EMAIL)) 
        {
            $usr = $this->username;
            $sql = "SELECT * FROM user WHERE username='$usr'";
            $stmt= $this->connect()->query($sql);

            if ($stmt->num_rows > 0)
            {
              $_SESSION['user-msg'] = 'Username already exists.';
              header("location: ../view/register.php");
              exit();  
            }
        }
        elseif ($this->usertype==3) {
              $sql2 ="INSERT INTO employer (first_name,last_name,dob,username,gender,phone_number,email,address) VALUES ('$this->fname','$this->lname','$this->dob','$this->username','$this->gender','$this->phone','$this->email','$this->address')";
              $sql3 = "INSERT INTO user (username,email,password,role_id) VALUES ('$this->username', '$this->email', '$this->password', '$this->usertype')";
          $stmt2= $this->connect()->query($sql2);
          $stmt3= $this->connect()->query($sql3);
          if($stmt2)
          {
           $_SESSION['suc-msg'] = 'Registration successful.';
           header("location: ../view/login.php");
           exit();
          }
        }

        elseif ($this->usertype==2) {
             $sql4 ="INSERT INTO freelancer (first_name,last_name,dob,username,gender,phone_number,email,address) VALUES ('$this->fname','$this->lname','$this->dob','$this->username','$this->gender','$this->phone','$this->email','$this->address')";
              $sql5 = "INSERT INTO user (username,email,password,role_id) VALUES ('$this->username', '$this->email', '$this->password', '$this->usertype')";
          $stmt4= $this->connect()->query($sql4);
          $stmt5= $this->connect()->query($sql5);
          if($stmt4)
          {
           $_SESSION['suc-msg'] = 'Registration successful.';
        header("location: ../view/login.php");
        exit();
          }
        }
       
        
     }
    }

    
?>