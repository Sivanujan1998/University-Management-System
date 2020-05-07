<?php

$fname=val($_POST["fname"]);
$lname=val($_POST["lname"]);
$email=val($_POST["email"]);
$id=val($_POST["num"]);


function val($data){
    $data=trim($data);
    $data=stripcslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}

$servername="localhost";
$username="root";
$password="";
$dbname="mywebsite";
$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("connection failed:".$conn->connect_error);
}
$sql="UPDATE users SET firstname ='$fname',lastname='$lname',email='$email' WHERE id='$id'";
if($conn->query($sql)==TRUE){
    header("location:result.php?message=update");
}else{
    echo"error".$sql."<br>".$conn->error;
}
$conn->close();
?>