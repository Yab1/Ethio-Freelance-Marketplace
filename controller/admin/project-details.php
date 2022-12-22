<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
include_once "$_SERVER[DOCUMENT_ROOT]/free/model/admin/project-details.php";

if(isset($_SESSION["job_id"])){
    $job_id=$_SESSION["job_id"];
}

$project_detail = new Project_Detail();

$project_detail->ProjectDetail();

?>