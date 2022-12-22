<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
 include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db.php";
 include_once "$_SERVER[DOCUMENT_ROOT]/free/model/freelancer/freelancer-profile.php";
 include_once "$_SERVER[DOCUMENT_ROOT]/free/controller/freelancer/freelancer-profile.php";
 include_once "$_SERVER[DOCUMENT_ROOT]/free/model/support/support-profile.php";
  include_once "$_SERVER[DOCUMENT_ROOT]/free/controller/support/support-profile.php";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
   
    <link rel="stylesheet" type="text/css" href="../includes/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../includes/css/nav.css">
    <link rel="stylesheet" type="text/css" href="../includes/res/font-awesome/css/font-awesome.min.css">
    <script src="../includes/js/jquery.js"></script>
    <script src="../includes/js/bootstrap.min.js"></script>
    <script src="../includes/js/bootstrap.js"></script>
    <title>Hamburger Overlay Menu</title>
  </head>
  <body>
   

   <nav class="navbar navbar-inverse navbar-fixed-top" id="my-navbar" >
    <div class="menu-btn" style=" color: white; margin-top: 10px;">
      <i class="fa fa-navicon" ></i>
    </div>
    <div class="side-bar" style=" background-color: #333; ">
      <div class="close-btn">
        <i class="fa fa-times" ></i>
      </div>
      <div class="menu" >
        <div class="item"><a href="freelancer-profile.php"><i class="fa fa-desktop"></i>Home</a></div>
        
        <div class="item"><a href="manage-services.php"><i class="fa fa-tasks"></i>Manage Services</a></div>
        <div class="item"><a href="edit-cv.php"><i class="fa fa-book"></i>Edit Cv</a></div>
        <div class="item">
          <a class="sub-btn"><i class="fa fa-eye"></i>View Applications<i class="fa fa-angle-right dropdown"></i></a>
        </div>
        <div class="item"><a href="../reset-pass.php"><i class="fa fa-asterisk"></i>Reset Password</a></div>
        
      </div>

    </div>
    

    <script type="text/javascript">
    $(document).ready(function(){
      //jquery for toggle sub menus
      $('.sub-btn').click(function(){
        $(this).next('.sub-menu').slideToggle();
        $(this).find('.dropdown').toggleClass('rotate');
      });

      //jquery for expand and collapse the sidebar
      $('.menu-btn').click(function(){
        $('.side-bar').addClass('active');
        $('.menu-btn').css("visibility", "hidden");
      });

      $('.close-btn').click(function(){
        $('.side-bar').removeClass('active');
        $('.menu-btn').css("visibility", "visible");
      });
    });
    </script> 
  <div class="container">
    <div class="navber-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="index.php" class="navbar-brand">Freelance Marketplace</a>
    </div>
    <div class="collapse navbar-collapse" id="navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="projects.php">Browse all jobs</a></li>
        <li class="dropdown" style="background:#000;padding:0 10px 0 10px; margin-left: 1in;">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="fa fa-user"></span> 
                <?php include_once('../../model/freelancer/freelancer-profile.php');
                     $profile= new Freelancer_Profile();
                     $profile->view();
                     echo $profile ->username;?>

              </a>
              <ul class="dropdown-menu list-group list-group-item-info">
                <a href="freelancer-profile.php" class="list-group-item"><span class="fa fa-home"></span>  View profile</a>
                  <a href="edit-freelancer.php" class="list-group-item"><span class="fa fa-inbox"></span>  Edit Profile</a>
              <a href="logout.php" class="list-group-item"><span class="fa fa-ok"></span>  Logout</a>
              </ul>
          </li>
      </ul>
    </div>    
  </div>  
</nav>
 
  </body>
</html>
