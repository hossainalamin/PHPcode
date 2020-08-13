<?php include "../OOP PHP/header.php";?>
    
<?php
$db=new mysqli("localhost","root","","test");
if($db->connect_error)
{
    echo "Connection Failed.<br>";
    exit();
}
else
{
    echo "Connection successful..<br>";
}
$sql="insert into user(name,email,skill) VALUES('MEEM','aleyameem244@gmail.com','Sing');";
if($db->query($sql)==true)
{
    echo "New data inserted.<br>";
}
else{
    echo "Failed..";
}
//multiple insert
$sql = "INSERT INTO user (name,email,skill)
VALUES ('John', 'Doe', 'john@example.com');";
$sql .= "INSERT INTO user (name,email,skill)
VALUES ('Mary', 'Moe', 'mary@example.com');";
$sql .= "INSERT INTO user (name,email,skill)
VALUES ('Julie', 'Dooley', 'julie@example.com')";

if ($db->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$db->close();

?>

<?php include "../OOP PHP/footer.php";?>