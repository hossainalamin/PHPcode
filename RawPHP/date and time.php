<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Date and time</title>
</head>
<body>
   <?php
    echo "Today is : ".date('D/M/Y');
    echo "<br>";
    
    echo"Today is :".date("l");
    echo "<br>";
    
    echo"Default is :".date("h:i:sa");
    echo "<br>";
  
    date_default_timezone_set("Asia/Dhaka");
    echo"Time is :".date("h:i:sa");
    echo "<br>";
    
    echo date_default_timezone_get();


    

    ?>
    <section class="footer">
        <p>&copy; <?php echo date("Y")?> Alamin's Work</p>
    </section>
    
</body>
</html>