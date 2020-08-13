<?php include '../OOP PHP/header.php';?>

<?php  
spl_autoload_register(function($class_name)
{
     include 'classes/'.$class_name.".php"; 
});

$mng=new Database();
$mng->setdriver("mysql");
$mng->connect();

?>





 <?php include '../OOP PHP/footer.php';?>