<?php 

if(isset($_SESSION["s_id"])){
    $s_id=$_SESSION["s_id"];
}

if(isset($_POST["sid"])){
    $_SESSION["s_id"]=$_POST["sid"];
   header("location: ../../view/freelancer/manage-service-details.php");

}


?>