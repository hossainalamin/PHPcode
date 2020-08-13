<?php include 'header.php';?>

<?php
//interface like class but no body of the function and no variable no object creation
interface school
{
    function myschool();
}
interface college
{
    function mycollege();
}
interface varsity
{
   function myvarsity(); 
}

class teacher implements school,college,varsity
{
    function __construct()
    {
       $this->myschool();
       $this->mycollege();
       $this->myvarsity(); 
    }
    function myschool()
    {
        echo "Im a school teacher."."<br>";
    }
    function mycollege()
    {
        echo "Im a college teacher."."<br>";
    }
    function myvarsity()
    {
        echo "Im a varsity teacher."."<br>";
    }
}
$obj=new teacher();
?>


<?php include 'footer.php';?>