<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db.php";



class Project_View extends Database{
    public $project_name;
    public $category;
    public $deadline;
    public $budget;
    public $employer;
    public $project_id;

     function view_project(){
       

$sql = "SELECT * FROM project";
$result = $this->connect()->query($sql);
$resultcheck= mysqli_num_rows($result);
if ($resultcheck > 0) {
    while($ans=mysqli_fetch_assoc($result)) {
        $this->project_id=$ans["project_id"];
        $this->project_name=$ans["project_name"];
        $this->category=$ans["category"];
        $this->employer=$ans["e_username"];
        $this->budget=$ans["budget"];
        $this->deadline=$ans["deadline"];       
    } 

    

}

}
}
?>