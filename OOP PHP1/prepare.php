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
    echo "Connection successful..<br>";
}
$sql="select name,email from user;";
$stmt=$db->prepare($sql);
$stmt->bind_result($name,$skill);
$stmt->execute();
while($stmt->fetch())
{
    echo "$name<br>";
}

$sql1="insert into user(name,email,skill) values(?,?,?);";
$stmt->prepare($sql1);
$stmt->bind_param("sss",$name,$email,$skill);
$name="Emon";
$email="rifatemon@gmail.com";
$skill="facebooking";
$stmt->execute();
$stmt->close();
$db->close();
?>

<?php include "../OOP PHP/footer.php";?>