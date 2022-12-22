<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
include_once "$_SERVER[DOCUMENT_ROOT]/free/model/employer/employer-profile.php";

$profile = new Employer_Profile();
$profile->view();

?>