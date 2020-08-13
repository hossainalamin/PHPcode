<?php include'header.php';?>

<?php
     class Fruits{
        public $name;
        public $color;
        function __construct($a)
         {
             $this->name=$a;
             
         }
        function detail($b)
         {
            $this->color=$b;
 
         }
         
        function __destruct()
         {
             echo "The name of the fruites is {$this->name}"."<br>";
             echo "The name of the fruites is {$this->color}"."<br>";
             
         }
     }
        class tree extends Fruits
         {
             function detail($c)
            {
                $this->color=$c;
            }
             
         }
    
    $obj=new Fruits("apple");
    $obj->detail("green");
    $obj1=new tree("Berry");
    $obj1->detail("Black");
    unset($obj);//when obj unset destructor called
    unset($obj1);//when obj unset destructor called
   ?>



<?php include 'footer.php';?>
