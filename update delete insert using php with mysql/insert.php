<?php
$fname=val($_POST["fname"]);
$lname=val($_POST["lname"]);
$email=val($_POST["email"]);


function val($data){
    $data=trim($data);
    $data=stripcslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mywebsite";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if($conn->connect_error){
    die("connect faild:".$conn->connect_error);
}

$sql="insert into `users` (firstname,lastname,email) values ('$fname','$lname','$email')";


if($conn->query($sql)==TRUE){
    header("location:result.php?message=insert");
}else{
    echo"error".$sql."<br>".$conn->error;
}
$conn->close();
?>