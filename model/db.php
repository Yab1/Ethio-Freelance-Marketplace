<?php
class Database
{
private $host;
private $user;
private $pass;
private $dbname;
public function connect()
{

$this->host="localhost";
$this->user="root";
$this->pass="";
$this->dbname="freelance";
	$con = new mysqli($this->host, $this->user, $this->pass, $this->dbname);
	
	if ($con->connect_errno) {
		echo "Unable to connect to the database:,$mysqli->connect_error";
		
		exit();
		}
		return $con;
}
}
?>