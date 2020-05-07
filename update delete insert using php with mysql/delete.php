<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mywebsite";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
die("connection failed:".$conn->connect_error);
}
$id=$_GET['id'];
$sql="delete from users where id=$id";
if($conn->query($sql)==TRUE){
header("location:result.php?message=delete");
}else{
echo"error deleting record".$conn->error;
}
$conn->close();
?>