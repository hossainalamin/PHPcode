<?php include 'header.php';?>
<?php
/*PHP only supports single inheritance: a child class can inherit only from one single parent.
So, what if a class needs to inherit multiple behaviors? OOP traits solve this problem.*/
trait message1{
    function msg1()
    {
        echo "Hello.<br>";
        return $this;
    }
}
trait message2{
    function msg2()
    {
        echo "How are you.";
        return $this;
    }
}
class one{
    use message1;
}
class two{
    use message1,message2;
}

$obj1=new one();
$obj1->msg1();
$obj2=new two();
$obj2->msg1();
$obj2->msg2();
?>

<?php include 'footer.php';?>