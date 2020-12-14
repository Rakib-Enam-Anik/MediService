<?php
$servername="localhost";
$username="root";
$password="";
$dbname="php";

$connection = new mysqli($servername,$username,$password,$dbname);
if($connection->connect_error){
	die("connection failed".$connectin->connect_error);
	
}
?>