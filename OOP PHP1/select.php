<?php include "../OOP PHP/header.php";?>
    
<?php


$db=new mysqli("localhost","root","","test");
if($db->connect_error)
{
    echo "Connection Failed.";
    exit();
}
else
{
    echo "Connection successful..";
}
$result="select name,email,skill from user;";
$sql=$db->query($result);
if ($sql->num_rows > 0) {
    // output data of each row
   echo "<table border=1><tr><th>Name</th><th>Email</th><th>Skill</th></tr>";
    // output data of each row
    while($row = $sql->fetch_assoc()) {
        echo "<tr><td>".$row["name"]."</td><td>".$row["email"]."</td><td> ".$row["skill"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$db->close();
?>

<?php include "../OOP PHP/footer.php";?>