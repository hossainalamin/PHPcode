<?php include 'header.php';?>
<?php

spl_autoload_register(function($class_name)
                      {
                          include 'classes/'.$class_name.".php";
                      });

$pr=new programming();
$ser=serialize($pr);
/*
file_put_contents("programing.txt",$ser);
echo $ser;*/

$getcontent=file_get_contents("programing.txt");
$unsr=unserialize($getcontent);
echo"<pre>";
print_r($unsr);
?>
<?php include 'footer.php';?>