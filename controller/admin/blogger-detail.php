<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
include_once "$_SERVER[DOCUMENT_ROOT]/free/model/admin/blogger-detail.php";

if(isset($_SESSION["user"])){
    $user=$_SESSION["user"];
}

$emp_detail = new Blogger_Detail();

$emp_detail->BloggerDetail();

?>