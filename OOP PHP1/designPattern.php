 <?php include '../OOP PHP/header.php';?>
<?php  
spl_autoload_register(function($class_name)
{
     include 'classes/'.$class_name.".php"; 
});

$getmsg=new User();
$msg=$getmsg->getmsg();

switch("$msg"){
    case "text":
        $txt=new text();
        break;
    case "email":
        $txt=new email();
        break;        
}
$txt->notification();

?>





 <?php include '../OOP PHP/footer.php';?>