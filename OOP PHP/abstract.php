<?php include 'header.php';?>
<?php
//Abstract class
abstract class student
{
    public $name;
    public $age;
    function detail()
    {
        echo "$this->name "."is ". "$this->age "."years old.<br>";
    }
    
    abstract public function fabs();//for abstract function class need to be abstract
}

class boy extends student
{
    function myfunction()
    {
        parent::detail();
    }
    
    function fabs()
    {
        echo "This is a abstract function.";
    }
}


$st=new boy();
$st->name="Rahim";
$st->age="15";
$st->myfunction();
$st->fabs();
?>
<?php include 'footer.php';?>