<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
include_once "$_SERVER[DOCUMENT_ROOT]/free/model/admin/admin-profile.php";


$display = new Admin_Profile();

$display->View();

?>