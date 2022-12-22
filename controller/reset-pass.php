<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
include_once "$_SERVER[DOCUMENT_ROOT]/free/model/reset-pass.php";
if(isset($_POST['changepwd']))
{
$cpwd=$_POST['current'];
$npwd=$_POST['newpassword'];
$copwd=$_POST['confirmpassword'];

$change=new ChangePass($cpwd,$npwd,$copwd);
$change->changePwd();
}
?>

