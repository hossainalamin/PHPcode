<?php include 'header.php';?>
<?php 
/*spl_autoload_register(function ($class_name)
{
    include 'classes/'.$class_name.'.php';
});*/

function __autoload($class_name)
{
    include 'classes/'.$class_name.'.php';
}

$java=new java();
$php=new php();

?>


<?php include'footer.php' ?>