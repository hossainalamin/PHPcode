    <?php
    $bgcolor="#444";
    $font="arial";
    $x=5;
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <title>PHP</title>
    <style>
        body {
            font-family: <?php echo $font;
            ?>
        }

        .php {
            background: <?php echo $bgcolor;
            ?>min-height: 900px;
            width: 900px;
            margin: 0 auto;
        }

        .head,
        .footer {

            background: #444;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        .maincontent {}

    </style>


</head>

<body>
    <!--headsection-->
    <div class="php">
        <section class="head">
            <h2>I love php </h2>
        </section>

        <section class="maincontent">
            <h2>Data types</h2>
            1.string
            2.int
            3.float
            4.boolean
            5.array
            6.object
            7.null
            8.resourse
            <hr>

    <?php
            echo"Let's start with php language.";
            echo "<br>";
                
            echo $x;
            echo"<br>";
            
            echo"php"," nice";//echo can print two string and print function can't
            //print "php","nice"; error
            echo"<br>";
            echo"<br>";
            
            var_dump($font);//varialble type and length
             echo"<br>";
            
            $cars=array("volvo","ferarri","nano");//array
            var_dump($cars);
             echo"<br>"; 
            
            class Student
            {
                function dept()
                {
                    return "cse";
                }
                
                function show()
                {
                   echo $this->dept();
                }
            }
            $st=new Student();//object
            $st->show();
             echo"<br>";
            
            //string funtion
            $x="Im Alamin";
            echo "The length of the string is" .strlen($x);
             echo"<br>";
            echo" there are ".str_word_count($x)."words.";
                 echo"<br>";
            echo "reverse= ".strrev($x);
             echo"<br>";
            echo "string possition of alamin ".strpos($x,"Alamin");
             echo"<br>";
            echo "string replace ".str_replace("Alamin","rokib",$x);
             echo"<br>";
            
            //numbers_function
            $y=10.6;
            echo var_dump(is_int($y));//return false
             echo"<br>";
            echo var_dump(is_float($y));//return true
             echo"<br>";
            
            $z= acos(8);
            echo var_dump($z);//if the calculation is not possible return nan
             echo"<br>";
            
            echo "type casting ".(int)$y;//float into integer
             echo"<br>";
            
            /*variable scope
            1.global-outside the function
            2.local-inside a function
            The global keyword is used to access a global variable from within a function.
            $x = 5;
            $y = 10;

            function myTest() {
                global $x, $y;
                $y = $x + $y;
            }
            
            3.Static 
            Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.*/
            
            //contant
            
            define("VALUE","Im learning php",true);//case sensetive
            function MyFunction()
            {
                echo VALUE;
            }
            MyFunction();
             echo"<br>";
            /*operation
            1.Arithmetic (**)exponential
            echo $x**$y
            2.Comparision
            === mean value and type equal
            !== Returns true if $x is not equal to $y, or they are not of the same type
            <=>	Spaceship	$x <=> $y	Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7.
            */
            $a=10;
            $b=10;
            echo "Exponential ".$a**$b;
             echo"<br>";
            echo "spaceship ".($b<=>$a);
           echo"<br>";
            
            /*
            3.logical
            xor-not two conditon is true only one should be true
            */
            
            //Associative array
            
            $x=array(
            "a"=>"Alamin",
            "b"=>"Hossain");
            $y=array(
            "c"=>"Rokibul",
            "d"=>"Islam");
            
            var_dump($x+$y);
             echo"<br>";
            var_dump($x!=$y);
             echo"<br>";
            
            //conditional assignment
           // $z=($a>5)?echo"true":echo"false";
             //loop
            echo "<br>";
            $c=10;
            while($c<15)
            {
                echo"The number is : $c <br>";
                $c++;
            }
            
            for($i=0;$i<3;$i++)
            {
                echo "The number is : $i <br>";
            }
            
            $cars=array("ferrari","audi");
            foreach($cars as $car)
            {
                echo "$car <br>";
            }
            
            $age=array("Alamin"=>"23","Rokib"=>"24");
            foreach($age as $x=>$var)
            {
                echo"$x = $var ";
            }
            
            function myFunction1($name="Alamin")
            {
                echo"Hello $name<br>";
            }
            myFunction1("Rokib");
            myFunction1();
            
            //Array
            $d=array(1,2,3,4);
            for($i=0;$i<count($d);$i++)
            {
                echo "Number assinged in the array : $d[$i] <br>";
            }
            
            echo count($d);//array index count
             echo"<br>";
            
            //associative array
            $age=array("Rahim"=>"25","karim"=>"35");
                foreach($age as $j=>$value)
                {
                    echo "Name = $j,Age = $value";
                    echo"<br>";
                }
            //Multidymantion
            
            $cars=array(
                array("bmw",22,12),
                array("nano",20,11),
                array("ferrari",19,9)
            );
            
            for($row=0;$row<3;$row++){
                echo"<p>Row number $row :</p>";
                
                echo"<ul>";
            {
                for($col=0;$col<3;$col++)
                {
                    echo"<li>".$cars[$row][$col]."</li>";
                }
                echo"<br>";
            }
            echo "</ul>";
            }
            /*sorting
            sort() - sort arrays in ascending order
            rsort() - sort arrays in descending order
            asort() - sort associative arrays in ascending order, according to the value
            ksort() - sort associative arrays in ascending order, according to the key
            arsort() - sort associative arrays in descending order, according to the value
            krsort() - sort associative arrays in descending order, according to the key
            */
            
            ?>

        </section>
        <section class="footer">
            <h2>Ending the page.</h2>
        </section>
    </div>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-slim.min.js"></script>
    <script src="js/popper.min.js"></script>
</body>

</html>
