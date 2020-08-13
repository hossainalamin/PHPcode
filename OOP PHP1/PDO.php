<?php include "../OOP PHP/header.php";?>
<?php
$dsn="mysql:dbname=test;host=localhost";
$user="root";
$pass="";
try{
$pdo=new PDO($dsn,$user,$pass);
}
catch(PDOException $e)
{
    echo "Connection failed..".$e->getMessage();
}

$sql="select * from user;";
$result=$pdo->query($sql);
foreach($result as $value)
{
    echo $value['Name']."<br>";
}
?>


<?php include "../OOP PHP/footer.php";?>
