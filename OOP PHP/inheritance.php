<?php include'header.php';?>
   <?php
    class person1
    {    
    public $username;
    public $user_id;    
    static $age="24";//static variable can be accesed without creation object using self keyword    
    const NAME="Md Alamin Hossain ";
    function __construct($a,$b)
    {
        $this->username=$a;
        $this->user_id=$b;
    }    
    function personDetail()
    {
        echo "The user name is {$this->username}"."<br>";
        echo "The user id is {$this->user_id}"."<br>";
        echo "Full name is ".person1::NAME."<br>";//:: scope resulation operator
        echo "Age is : ".self::$age;
    }
        
    }
    class persontwo extends person1//if person1 class is declared as final it cant be extends
    {
        
       public $level;    
       function personDetail()//if funtion is final then overwrite is not possible
    {
        echo "The user name is {$this->username}"."<br>";
        echo "The user id is {$this->user_id}"."<br>";
        echo "The user id is {$this->level}"."<br>";
        echo "Full name is ".person1::NAME."<br>";//:: scope resulation operator
        echo "Age is : ".self::$age;
    } 
    }

    $obj=new person1("unknown","1");    
    //person1::personDetail();//when function is static
    $obj1=new persontwo("Kanon","321");
    $obj1->level="Adminstrator";
    $obj1->personDetail();
    
   ?>


<?php include 'footer.php';?>
