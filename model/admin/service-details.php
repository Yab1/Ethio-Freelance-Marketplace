<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
 include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db.php";
if(isset($_SESSION["s_id"])){
    $s_id=$_SESSION["s_id"];
}

class Service_Detail extends Database{

    public $service_name;
    public $category;
    public $description;
    public $pay_rate;
    public $freelancer;
    public $service_id;
    public $id;

   function ServiceDetail()
    {
    $s_id=$_SESSION['s_id'];
    $sql = "SELECT * FROM service WHERE service_id='$s_id'";
    $result = $this->connect()->query($sql);

		if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $this->service_name=$row["service_name"];
        $this->category=$row["category"];
        $this->description=$row["description"];
        $this->pay_rate=$row["payrate"];
        $this->id=$row["service_id"];
        $this->freelancer=$row["f_username"];
    } 
    

}


}
}
?>