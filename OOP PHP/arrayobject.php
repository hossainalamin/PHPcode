<?php include'header.php';?>

   <?php
   
       $arr=array("HTML","CSS","PHP");
       $coding= new ArrayObject($arr);
       $coding->append("java");
       $iterator=$coding->getIterator();   
       while($iterator->valid())
       {
           echo $iterator->current()."<br>";
           $iterator->next();
       }
   ?>
<?php include 'footer.php';?>
