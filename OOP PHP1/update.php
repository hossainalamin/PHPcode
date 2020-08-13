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
$sql="update user set Name='Mim' where Name='meem';";
$result=$db->query($sql);
if($result==true)
{
    echo "data updated..";
    
}
else
{
    echo "No match.";
}

?>

<?php include "../OOP PHP/footer.php";?>