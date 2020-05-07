<a href=insertform.php>insert an element in the table<br><br></a>

<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mywebsite";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


if(isset($_GET["message"])){
    if(($_GET["message"]) == "insert" ){
        echo "the data sucessfully registered<br><br>";
    }
    elseif(($_GET["message"]) == "delete" ){
        echo "the data sucessfully deleted<br><br>";
    }
    elseif(($_GET["message"]) == "update" ){
        echo "the data sucessfully updated<br><br>";
    }
}


// Check connection
if($conn->connect_error){
    die("connect faild:".$conn->connect_error);
}

$sql="SELECT id,firstname,lastname,email FROM users";
$result = $conn->query($sql);

?>

<table border=1 color="black">
<?php
if($result->num_rows>0){
while($row=$result->fetch_assoc()){
    ?>

<tr>
<td>ID</td>
<td><?php echo $row["id"]?></td>
<td><a href="delete.php?id=<?php echo $row['id']?>">detete</a><br></td>
<td><a href="update.php?id=<?php echo $row['id']?>">update</a></td>
</tr>

<tr>
<td>first name</td>
<td><?php echo $row["firstname"]?></td>

</tr>

<tr>
<td>last name</td>
<td><?php echo $row["lastname"]?></td>

</tr>

<tr>
<td>email</td>
<td><?php echo $row["email"]?></td>

</tr>
<?php
}
}
?>


</table>
