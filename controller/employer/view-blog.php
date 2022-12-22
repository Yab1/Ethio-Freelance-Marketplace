<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
 include_once "$_SERVER[DOCUMENT_ROOT]/free/blog/model/view-blog.php";

if(isset($_POST["bid"]))
{
    $_SESSION["b_id"]=$_POST["bid"];
    header("location: ../../view/employer/blog-detail.php");

}



?>