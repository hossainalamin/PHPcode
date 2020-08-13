<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Validation</title>
</head>

<body>
    <!--form vadidation-->
    <?php 
            // Form validation
            $name=$mail=$message= $gender = " ";
            if($_SERVER['REQUEST_METHOD'] =="POST")
            {
                   $name = valid($_POST['Name']);
                   $mail = valid($_POST['Email']);
                   $message = valid($_POST['message']);
                   $gender = valid($_POST['gender']); 

                
                   echo "Name: ".$name;
                   echo"<br>";
                   echo "Email: ".$mail;
                   echo"<br>";
                   echo "Message: ".$message;
                   echo"<br>";
                   echo "Gender: ".$gender;
                   echo"<br>";
            }
            
            function valid($data)
            {
                $data=trim($data);
                $data=htmlspecialchars($data);
                $data=stripcslashes($data);
                return $data;
            }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <table>
            <tr>
                <td>Name:</td>
                <td><input type="text" name="Name" required></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="Email"></td>
            </tr>
            <tr>
                <td>Message:</td>
                <td><textarea name="message" cols="25" rows="5"></textarea></td>
            </tr>
            <tr>
                <td>Gender:</td>
                <td><input type="radio" name="gender" value="female">Female</td>
                <td><input type="radio" name="gender" value="male">Male</td>
                <td><input type="radio" name="gender" value="other">Other</td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="submit"></td>
            </tr>
        </table>
    </form>
</body>

</html>
