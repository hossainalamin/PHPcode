<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SuperGlobal</title>
</head>

<body>
    <?php
     /*superglobal variable
            $GLOBALS
            $_SERVER
            $_REQUEST
            $_POST
            $_GET
            $_FILE
            $_ENV
            $_COOKIE
            $_SESSION
      */
    
    //$GLOBALS
    
            $a=5;
            $b=4;
            function sum()
            {
                global $a,$b;
                $c=$a+$b;
                return $c;
            }
            echo "The sum is ".sum();
            echo "<br>";
            function sub()
            {
                $GLOBALS['s']=$GLOBALS['a']-$GLOBALS['b'];
            }
            sub();
            echo "The subtraction is ".$s;
            echo "<br>";
    
         //$_SERVER
    
            echo $_SERVER['PHP_SELF'];
            echo "<br>";
            
            echo $_SERVER['SERVER_NAME'];
            echo "<br>";
            
            echo $_SERVER['SCRIPT_NAME'];
            echo "<br>";
            
            echo $_SERVER['HTTP_USER_AGENT'];
            echo "<br>";
            
            
            echo $_SERVER['SERVER_ADDR'];
            echo "<br>";
            
            echo $_SERVER['HTTP_HOST'];
            echo "<br>";
    ?>
    //GET
             <a href="text.php?msg=Alamin&txt=kanon">Send data</a>
            <br>
            <?php
    //POST
            if($_SERVER['REQUEST_METHOD']=="POST")
               {
                   $name=$_REQUEST['username'];
                   if(empty($name))
                   {
                       echo"<span style='color:red'>Username should not be empty.</span>";
                       echo"<br>";
                   }
                else
                {
                    echo"<span style='color:green'>You have entered ".$name."</span>";
                    echo"<br>";
                }
                
               }
            ?>
            
            <!--$_request and $_post-->
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <label for="username">Username</label>
                <input type="text" name="username">
                <input type="submit" value="submit">
            </form>
            <br>

</body>

</html>
