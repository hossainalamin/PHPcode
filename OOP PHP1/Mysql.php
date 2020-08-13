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

?>

<?php include "../OOP PHP/footer.php";?>