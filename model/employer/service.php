<?php
include_once "$_SERVER[DOCUMENT_ROOT]/free/session.php";
include_once "$_SERVER[DOCUMENT_ROOT]/free/model/db.php";

if(isset($_SESSION["s_id"])){
    $s_id=$_SESSION["s_id"];
}



class Service extends Database{
    public $service_name;
    public $service_id;
    public $type;
    public $pay_rate;
    public $freelancer;   
    function viewservice(){

$sql3 = "SELECT * FROM service";

$result3 = $this->connect()->query($sql3);


    if ($result3->num_rows > 0) {
    while($row = $result3->fetch_assoc()) {
        $this->service_name=$row["service_name"];
        $this->type=$row["category"];
        $this->service_id=$row["service_id"];
        $this->pay_rate=$row["payrate"];
        $this->freelancer=$row["f_username"];
    } 

}
}
}
?>