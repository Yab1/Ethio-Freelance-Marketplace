<?php 

if(isset($_SESSION["job_id"])){
    $job_id=$_SESSION["job_id"];
}

if(isset($_POST["jid"])){
    $_SESSION["job_id"]=$_POST["jid"];
   header("location: ../../view/employer/manage-project-details.php");

}


?>