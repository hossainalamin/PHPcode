<?php include "../OOP PHP/header.php";?>
<?php
$dsn = "mysql:dbname=test;host=localhost;";
$user = "root";
$pass = "";
try
{
    $pdo = new PDO($dsn,$user,$pass);
}
catch(PDOException $e)
{
    echo "Connection Failed..".$e->getMessage();
}
/*$name = "Rahim";
$Email = "Rahim@gmail.com";
$skill = "Blog";

$sql = "insert into user(Name,Email,Skill) values(:Name,:Email,:Skill)";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':Name',$name);
$stmt->bindParam(':Email',$Email);
$stmt->bindParam(':Skill',$skill);
$stmt->execute();
$id=3;
$sql = "select * from user where id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id',$id);
$stmt->execute();
while($data = $stmt->fetch())
{
    echo"<pre>";
    echo "Name : ".$data['Name']."<br>";
    echo "Email : ".$data['Email']."<br>";
}*/
$name = "Abdul Karim";
$id = 25;
$sql = "update user set Name=:name where id=:id";
$stmt =$pdo->prepare($sql);
$stmt->bindParam(':name',$name);
$stmt->bindParam(':id',$id);
$stmt->execute();
$name = "Abdul Karim";
$id = 18;
$sql = "delete from user where id=:id";
$stmt =$pdo->prepare($sql);
$stmt->bindParam(':id',$id);
$stmt->execute();
?>
<?php include "../OOP PHP/footer.php";?>
