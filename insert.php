<?php
require_once('db.php');
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name']; 
$email=$_POST['email'];
$password=$_POST['password'];


$sql= "INSERT INTO information(first_name, last_name, email,password) VALUES('$first_name','$last_name','$email','$password')";
$result= mysqli_query($connection,$sql)or die(mysqli_error(connection));
if($result==True){
	header('location:login.php');
}
else{
	echo "data not inserted";
}

?>