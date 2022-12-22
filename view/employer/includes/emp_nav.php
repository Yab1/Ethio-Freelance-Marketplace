<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
 include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db.php";
 include_once "$_SERVER[DOCUMENT_ROOT]/free/controller/employer/employer-profile.php";

   
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
        <div class="item"><a href="employer-profile.php"><i class="fa fa-desktop"></i>Home</a></div>
        <div class="item"><a href="manage-projects.php"><i class="fa fa-tasks"></i>Manage Projects</a></div>
        <div class="item"><a href="../reset-pass.php"><i class="fa fa-asterisk"></i>Reset Password</a></div>
        <div class="item"><a href="support-list.php"><i class="fa fa-phone"></i>Contact Support</a></div>
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
        <li><a href="services.php">Browse all Services</a></li>
        <li class="dropdown" style="background:#000;padding:0 20px 0 20px;">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="fa fa-user"></span> 
                <?php echo $profile ->username;?>
              </a>
              <ul class="dropdown-menu list-group list-group-item-info">
                <a href="employer-profile.php" class="list-group-item"><span class="fa fa-home"></span>  View profile</a>
                <a href="edit-employer.php" class="list-group-item"><span class="fa fa-inbox"></span>  Edit Profile</a>
                <a href="logout.php" class="list-group-item"><span class="fa fa-ok"></span>  Logout</a>
              </ul>
          </li>
      </ul>
    </div>    
  </div>  
</nav>
 
  </body>
</html>
