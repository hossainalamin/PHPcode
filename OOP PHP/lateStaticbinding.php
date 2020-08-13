<?php include'header.php';?>
   <?php
   class php
   {
       public function framework()
       {
           echo static::getphp()."<br>";
       }
       public static function getphp()
       {
           return __class__;
       }
   }

    class phpchild extends php
    {
        public static function getphp()
        {
            return __class__;
        }
    }
    
    $php=new php();
    $php->framework();
    $php1=new phpchild();
    $php1->framework();
   ?>


<?php include 'footer.php';?>
