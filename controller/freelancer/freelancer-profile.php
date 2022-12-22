<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
include_once "$_SERVER[DOCUMENT_ROOT]/free/model/freelancer/freelancer-profile.php";



$profile = new Freelancer_Profile();

$profile->view();

?>