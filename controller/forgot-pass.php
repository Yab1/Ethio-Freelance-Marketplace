<?php

include_once "$_SERVER[DOCUMENT_ROOT]/free/model/forgot-pass.php";
if(isset($_POST['changepwd']))
{
$email=$_POST['email'];
$npwd=$_POST['newpassword'];
$copwd=$_POST['confirmpassword'];

$change=new ChangePass($email,$npwd,$copwd);
$change->changePwd();
}
?>

