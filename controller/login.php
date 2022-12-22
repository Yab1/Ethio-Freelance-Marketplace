<?php 
  
  include_once"$_SERVER[DOCUMENT_ROOT]/free/model/login.php";
    
    if (isset($_POST['login'])) {
        $username=$_POST['username'];
        $password=$_POST['password'];
    $user = new signin();
    extract($_REQUEST);
    $login = $user->checklogin($username, $password);
    
    
    }
?>