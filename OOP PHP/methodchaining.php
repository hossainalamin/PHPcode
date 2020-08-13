<?php include 'header.php';?>
<?php
    
  function __autoload($class_name)
{
    include "classes/".$class_name.".php";
}
    $php=new php;
    $php->framework()->cms();
    
    
?>


<?php include 'footer.php';?>