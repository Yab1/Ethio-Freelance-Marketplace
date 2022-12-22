<?php
 include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
 include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db.php";
 include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db1.php";
 include_once "$_SERVER[DOCUMENT_ROOT]/free/model/admin/admin-profile.php";
 include_once "$_SERVER[DOCUMENT_ROOT]/free/controller/admin/admin-profile.php";
 include_once "$_SERVER[DOCUMENT_ROOT]/free/controller/employer/employer-profile.php";
if(isset($_SESSION["user_id"])){
	$username=$_SESSION["user_id"];}
	else{
    $username="";
	header("location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Super Admin</title>
    
	<link rel="stylesheet" type="text/css" href="../includes/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../includes/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="../includes/res/font-awesome/css/font-awesome.min.css">
	<script type="text/javascript" src="../includes/js/jquery.js"></script>
	<script type="text/javascript" src="../includes/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../includes/js/custom.js"></script>
    <link rel="stylesheet" type="text/css" href="../includes/css/style.css">

</head>

<body>
   <?php require 'includes/admin-nav.php'; ?><br><br><br>
    <div class="content-outer-wrapper" >
        <div class="chance"></div>
        <!-- end of chance -->
        <section class="profile-page">
            <div class="container">
                <!-- ================================
                  breadcrumbs
                  ================================-->
                <div class="row">
                    <div class="col-md-12 si-box-padding">
                        <section class="common-head-wrapper-sm clearfix">
                            <div class="wrapper-head">
                                <h4><i class="fa fa-th-large"></i><span>Website Overview</span></h4>
                            </div>
                            <!-- end of wrapper-head -->
                            
                            <!-- end of bread-crumbs -->
                        </section>
                        <!-- end of common-head-wrapper-sm -->
                    </div>
                    <!-- end of si-box-padding -->
                </div>
                <!-- end of row -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- ================================
                        widget box main
                        ================================-->
                        <section class="dash-main-widget-box">
                            <div class="row">
                                <div class="col-sm-3 si-box-padding"  >
                                    <div class="dash-box">
                                        <h2><?php echo $profile->count_emp;?></h2>
                                        <p>Employers Onboard</p>
                                        
                                    </div>
                                    <!-- end of dash-box -->
                                </div>
                                <!-- end of si-box-padding -->
                                <div class="col-sm-3 si-box-padding">
                                    <div class="dash-box">
                                        <h2><?php echo $profile->count_free;?></h2>
                                        <p>Freelancers Onboard </p>
                                        
                                    </div>
                                    <!-- end of dash-box -->
                                </div>
                                <!-- end of si-box-padding -->
                                <div class="col-sm-3 si-box-padding">
                                    <div class="dash-box">
                                        <h2><?php echo $profile->count_pro;?></h2>
                                        <p>Projects Available</p>
                                        
                                    </div>
                                    <!-- end of dash-box -->
                                </div>
                                <!-- end of si-box-padding -->
                                <div class="col-sm-3 si-box-padding">
                                    <div class="dash-box">
                                        <h2><?php echo $profile->count_ser;?></h2>
                                        <p>Services Available </p>
                                        
                                    </div>
                                    <!-- end of dash-box -->
                                </div>
                                <!-- end of si-box-padding -->
                            </div>
                            <!-- end of row -->
                        </section>
                  </div>
              </div>
          </div>
      </section>
</div>
  

  <div style="padding:0% 3% 1% 13%; ">
<div class="row">
  <div class="col-lg-3" >
<div class="card" style="padding:10px 20px 5px 20px;">
            <div class="panel panel-success" >
              <div class="panel-heading" style="  background: linear-gradient(87deg, #f5365c 0, #f56036 100%) !important; color: white;"><h3>Top 3 Categories </h3></div>
              <div class="panel-body"><h4>
                
                <?php 


if ($resultcheck8 > 0){
    echo '<table  style=" width: 50% ; border: none;" >';
            echo '<tr>
            
            <td>'.'Category'.'</td>
            <td>'.'Frequency'.'</td>
            </tr>';
        while($row=mysqli_fetch_assoc($result8)){
            
        $category=$row["category"];
        $freq=$row["COUNT(category)"];
        

            echo '
            <form action="services.php" method="post">
            <tr>
            <td><input type="submit" class="btn btn-link btn-lg" value="'.$category.'" style="color:black;"></td>
            <td>'.$freq.'</td>
          
            </tr>
            </form>' ;
        }
        echo '</table>';
}

?>
           
              </h4>
             </div>
            </div >
        
        </div> 
</div>
<div class="col-lg-3">
<div class="card" style="padding:10px 20px 5px 20px; ">
            <div class="panel panel-success">
              <div class="panel-heading" style="  background: linear-gradient(87deg, #f5365c 0, #f56036 100%) !important; color: white;"><h3>Frequently Hired </h3></div>
              <div class="panel-body"><h4>
                 
                <?php 


if ($resultcheck9 > 0){
    echo '<table  style=" width: 50% ; border: none;" >';
            echo '<tr>
            
            <td>'.'Freelancer'.'</td>
            <td>'.' '.'</td>
            <td>'.' '.'</td>
            <td>'.'Frequency'.'</td>
            </tr>';
        while($row=mysqli_fetch_assoc($result9)){
            
        $user=$row["f_username"];
        $freq=$row["COUNT(f_username)"];
        

            echo '
            <form action="services.php" method="post">
            <tr>
            <td><input type="submit" class="btn btn-link btn-lg" value="'.$user.'" style="color:black;"></td>
            <td style=" ">'.$freq.'</td>
            </tr>
            </form>' ;
        }
        echo '</table>';
}

?>
           
              </h4></div>
            </div >
        </div> 

</div>
        <div class="col-lg-3">
        <div class="card" style="padding:10px 20px 5px 20px; ">
            <div class="panel panel-success">
              <div class="panel-heading" style="  background: linear-gradient(87deg, #f5365c 0, #f56036 100%) !important; color: white;"><h3>Top Employer </h3></div>
              <div class="panel-body"><h4>
                
                <?php 


if ($resultcheck10 > 0){
    echo '<table  style=" width: 50% ; border: none;" >';
            echo '<tr>
            
            <td>'.'Employer'.'</td>
            <td>'.' '.'</td>
            <td>'.'Frequency'.'</td>
            </tr>';
        while($row=mysqli_fetch_assoc($result10)){
            
        $user=$row["e_username"];
        $freq=$row["COUNT(e_username)"];
        

            echo '
            <form action="services.php" method="post">
            <tr>
            <td><input type="submit" class="btn btn-link btn-lg" value="'.$user.'" style="color:black;"></td>
          
            <td>'.$freq.'</td>
          
            </tr>
            </form>' ;
        }
        echo '</table>';
}

?>
           
              </h4></div>
            </div >
            <p style=" "></p>
        </div> 
    </div>

</div>
</div>


</body>
</html>