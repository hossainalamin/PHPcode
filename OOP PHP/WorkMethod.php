<?php include 'header.php';?>
<form action="" method="post">
    <table>
        <tr>
            <td>Enter the first number:</td>
            <td><input type="number" name="num1"></td>
        </tr>

        <tr>
            <td>Enter second:</td>
            <td><input type="number" name="num2"></td>
        </tr>

        <tr>
            <td><input type="submit" name="Calculation" value="Calculation"></td>
        </tr>
    </table>
</form>
<?php
if(isset($_POST['Calculation']))
{
    $num1=$_POST['num1'];
    $num2=$_POST['num2'];
    if(empty($num1) or empty($num2))
    {
        echo "<span style='color:red';>Field must not be empty.</span>";
    }
    else{
    class calculation
    {
        function add($a,$b)
        {    
             echo "Addition ".($a+$b)."<br>";
        }
        function sub($a,$b)
        {
            echo "Subtraction ".($a-$b)."<br>";
        }
        function mul($a,$b)
        {
          echo "Multiplication ".($a*$b)."<br>";
        }
        function div($a,$b)
        {
          echo "Divission ".($a/$b)."<br>";
        }
    }
    
   $cal=new calculation;
   $cal->add($num1,$num2);
   $cal->sub($num1,$num2);
   $cal->mul($num1,$num2);
   $cal->div($num1,$num2);
    }
}  
?>
<?php include 'footer.php';?>
