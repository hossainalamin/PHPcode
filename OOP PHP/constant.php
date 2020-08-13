<?php include'header.php';?>
   <?php
    class person
    {
        
    static $age="24";//static variable can be accesed without creation object using self keyword    
    const NAME="Md Alamin Hossain";
    static function personDetail()
    {
        echo "Full name is ".person::NAME."<br>";//:: scope resulation operator
        echo "Age is : ".self::$age;
    }
        
    }
    person::personDetail();
   ?>
<?php include 'footer.php';?>
