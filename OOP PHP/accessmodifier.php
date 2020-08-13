<?php include'header.php';?>

   <?php
    /*public-inside class,subclass,outside class
    private-only inside class
    protected-inside class and subclass not outside class
    */
  
    class person
    {
        
    private $age="24";//static variable can be accesed without creation object using self keyword    
    public $name;
    function personDetail()
    {
        echo "Full name is {$this->name}"."<br>";//:: scope resulation operator
        echo "Age is : {$this->age}";
    }
        
    }
    $name="Alamin";
    $obj=new person;
    $obj->personDetail();
    
   ?>
<?php include 'footer.php';?>
