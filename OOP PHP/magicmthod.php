<?php include 'header.php';?>
<?php 
/*magic mathod
__construct()
__destruct()
__get($property)
__set($property,$value)
__call($method,$arg_array)*/
class student{
    public $age;
    function detail()
    {
        echo "Im a student .<br>";
    }
    
    function __get($pm)
    {
        echo"$pm is undefined.<br>";
    }
    
    function __set($pm,$vl){
        echo "The $pm of the person is $vl.<br>";
    }
    
    function __call($pm,$value)
    {
        echo "The is no method named ".$pm."<br>And no arguments like ".implode(",",$value)."<br>";
    }
}
if(class_exists("student")){
$st=new student();
    if(method_exists($st,"detail")){
        echo "Method exists.<br>";
    }
$st->detail();
$st->Alamin;
$st->name="Rokib";
$st->newMethod('1','2','3');
echo "Student class exists.";
}
else
{
    echo "No such class";
}


?>


<?php include'footer.php' ?>