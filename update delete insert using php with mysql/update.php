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
$sql="select id,firstname,lastname,email from users where id='$id'";
$result=$conn->query($sql);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        $id=$row['id'];
        $fname=$row['firstname'];
        $lname=$row['lastname'];
        $email=$row['email'];
        }
}
?>
<form action="update1.php" method="POST">
    <table>
    <tr>
    <td>id</td>
    <td>:<input type="number" name="num" value=<?php echo $id?> readonly></td>
    </tr>
    <tr>
    <td>first name</td>
    <td>:<input type="textbox" name="fname" value=<?php echo $fname?>></td>
    </tr>
    <tr>
    <td>last name</td>
    <td>:<input type="textbox" name="lname" value=<?php echo $lname?>></td>
    </tr>
    <tr>
    <td>email address</td>
    <td>:<input type="email" name="email" value=<?php echo $email?>></td>
    </tr>
    <tr>
    <td><input type="reset"></td>
    <td><input type="submit"></td>
    </tr>
    </table>
    </form>

 