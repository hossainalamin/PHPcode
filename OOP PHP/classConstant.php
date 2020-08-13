<?php include'header.php';?>

   <?php
   abstract class php
   {
       public function framework()
       {
           echo "The name of the class is ".__class__."<br>";//current class
           echo "The name of the objected created class ".get_class($this)."<br>";//object child
       }
   }

    class phpchild extends php
    {
        public function cms()
        {
            echo "The name of the class is ".__class__."<br>";
            echo "The name of the objected created class ".get_class($this)."<br>";
        }
    }

    $php=new phpchild();
    $php->framework();
    echo "<hr>";
    $php->cms();
    
   ?>
<?php include 'footer.php';?>
