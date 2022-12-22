<?php 
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db.php";
include_once "$_SERVER[DOCUMENT_ROOT]/free/controller/freelancer/add-skill.php";
  if(isset($_SESSION["skill-emsg"])){
    $skill_msg=$_SESSION["skill-emsg"];
     unset($_SESSION["skill-emsg"]);
 }
    else{
     $skill_msg="";
 }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add your Skills</title>
    <link rel="stylesheet" type="text/css" href="includes/skill.css"/>
    <link rel="stylesheet" type="text/css" href="../includes/res/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../includes/css/bootstrap.min.css">
    <script type="text/javascript" src="../includes/js/jquery.js"></script>
    <script type="text/javascript" src="../includes/js/bootstrap.min.js"></script>
    <style>
        #btn{
	font-family: "Roboto", sans-serif;
	text-transform: uppercase;
	outline: 0;
	background: #4CAF50;
	width: 100px;
	border: 0;
	border-radius: 5px;
	padding: 10px;
	color: #FFFFFF;
	font-size: 14px;
	cursor: pointer;
    margin-left: 3in;
}
#btn:hover{
	background: #43A047;
}
#btn:focus{
	border: 2px solid ;
	color: black;
	background: #43A047;
}
    </style>
</head>
<body>
<?php require 'includes/free_nav.php' ?>
<br><br><br><br>
    <div class="container"style="max-width: 700px;">

    <div class="col-md-6" >
                    <h4 class="frm_section_n">Add you Skills</h4>
                  </div>

        <form action="../../controller/freelancer/add-skill.php" method="POST">
            <div class="row">
                <div class="col-lg-12">
                    <div id="inputFormRow">
                    
                        <div class="form-group col-md-7">
                            <input type="text" name="skill[]" class="form-control m-input" placeholder="Enter Skill" required> 
                        </div>
                       
                    </div>
                    <div id="newRow"></div>
                    
                </div>
            </div>
            <button id="addRow" type="button" class="btn btn-info ">Add Row</button>
            <button   name="save" id="btn">Save</button>
        </form>
    </div>
    
    <script type="text/javascript">
        // add row
        $("#addRow").click(function () {
            var html = '';
            html += '<div id="inputFormRow">';
            html += '<div class="input-group-append">';
            html += '<div class="form-group col-md-6">';
            html += '<input type="text" name="skill[]" class="form-control m-input" placeholder="Enter Skill" required >';
            html += '</div>';
            html += '<div class="form-group col-md-2 add_del_btn_outer">'
            html += '<button id="removeRow" type="button" class="btn_round remove_node_btn_frm_field"  ><i class="fa fa-trash"></i></button>';
            html +='</div>'
            
          
            
            html += '</div>';
            
            $('#newRow').append(html);
        });

        // remove row
        $(document).on('click', '#removeRow', function () {
            $(this).closest('#inputFormRow').remove();
            
        });
    </script><br>
    <?php require 'includes/footer.php' ?>
</body>
</html>

