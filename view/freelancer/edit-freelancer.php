<?php 
 include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
 include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db.php";
 include_once "$_SERVER[DOCUMENT_ROOT]/free/controller/freelancer/edit-freelancer.php";

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
	<title>Edit profile</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../includes/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../includes/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="../includes/res/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../includes/css/bootstrapValidator.css">
    

<style>
	body{padding-top: 3%;margin: 0;}
	.card{box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); background:#fff}
</style>

</head>
<body>
<?php require 'includes/free_nav.php' ?>


<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="page-header">
                    <h2>Edit Profile</h2>
                </div>

                <form id="registrationForm" method="post" class="form-horizontal" action="../../controller/freelancer/edit-freelancer.php">
                <div class="form-group">
                    <label class="col-sm-4 control-label">First Name</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="fname" value="<?php 
            echo $profile->fname;
             ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Last Name</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="lname" value="<?php 
            echo $profile->lname;
             ?>" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Email address</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="email" value="<?php 
            echo $profile->email;
             ?>" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label">Contact no.</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="phone" value="<?php 
            echo $profile->phone;
             ?>"  />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label">Gender</label>
                    <div class="col-sm-5">
                        <div class="radio">
                            <label>
                                <input type="radio" name="gender" 
                                <?php if (isset($gender) && $gender=="male") echo "checked";?>
                                 value="male" /> Male
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="gender" 
                                <?php if (isset($gender) && $gender=="female") echo "checked";?>
                                 value="female" /> Female
                            </label>
                        </div>
                       
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label">Date of birth</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="dob" placeholder="YYYY/MM/DD" value="<?php 
            echo $profile->birthdate;
             ?>" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-4 control-label">Address</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="address" value="<?php 
            echo $profile->address;
             ?>"  />
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-sm-4 control-label">Bio</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="bio" value="<?php 
            echo $profile->bio;
             ?>" />
                    </div>
                </div>
                
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Professional Title</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="prof_title" value="<?php 
            echo $profile->prof_title;
             ?>" />
                    </div>
                </div>

                  <div class="form-group">
                    <label class="col-sm-4 control-label">Education</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="education" value="<?php 
            echo $profile->education;
             ?>" />
                    </div>
                </div>
                  <div class="form-group">
                    <label class="col-sm-4 control-label">Experience</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" name="experience" value="<?php 
            echo $profile->experience;
             ?>" />
                    </div>
                </div>
                
              

                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <!-- Do NOT use name="submit" or id="submit" for the Submit button -->
                        <button type="submit" name="editFrelancer" class="btn btn-info btn-lg">Save changes</button>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </div>



<script type="text/javascript" src="../includes/js/jquery.js"></script>
<script type="text/javascript" src="../includes/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../includes/js/bootstrapValidator.js"></script>

<script>
$(document).ready(function() {
    $('#registrationForm').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'fa fa-ok',
            invalid: 'fa fa-remove',
            validating: 'fa fa-refresh'
        },
        fields: {
            name: {
                validators: {
                    notEmpty: {
                        message: 'The name is required and cannot be empty'
                    }
                }
            },
            username: {
                message: 'The username is not valid',
                validators: {
                    notEmpty: {
                        message: 'The username is required and cannot be empty'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The username must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9]+$/,
                        message: 'The username can only consist of alphabetical and number'
                    },
                    different: {
                        field: 'password',
                        message: 'The username and password cannot be the same as each other'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required and cannot be empty'
                    },
                    emailAddress: {
                        message: 'The email address is not a valid'
                    }
                }
            },
            
            contactNo: {
                validators: {
                    notEmpty: {
                        message: 'The contact number is required'
                    },
                    regexp: {
                        regexp: /^[0-9]+$/,
                        message: 'The number is not valid'
                    }
                }
            },
            gender: {
                validators: {
                    notEmpty: {
                        message: 'The gender is required'
                    }
                }
            },
            birthdate: {
                validators: {
                    notEmpty: {
                        message: 'The date of birth is required'
                    },
                    date: {
                        format: 'YYYY-MM-DD',
                        message: 'The date of birth is not valid'
                    }
                }
            },
            address: {
                validators: {
                    notEmpty: {
                        message: 'The address is required'
                    }
                }
            },
        }
    });
});
</script>
<?php require 'includes/footer.php' ?>
</body>
</html>