<?php include'header.php';?>

<?php
     class Fruits{
        public $name;
        public $color;
        function __construct($a,$b)
        {
            $this->name=$a;
            $this->color=$b;
             
        }
        function detail()
        {
            echo "Name of the fruits is {$this->name}"."<br>";
            echo "Color of the fruits is {$this->color}"."<br>";
        }
        function __destruct()
        {
            echo "Object is closed.";
             
        }         
         
     }
    $obj=new Fruits("apple","green");
    $obj->detail();
    unset($obj);//when obj unset destructor called
   ?>



<?php include 'footer.php';?>
