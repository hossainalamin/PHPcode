<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Required</title>
</head>
<body>
               <?php
            //form required
            $nameerr=$mailerr=$gendererr=$messagerr= " ";
            $name=$mail=$message=$gender=" ";
            if($_SERVER['REQUEST_METHOD'] =="POST")
            {
                if(empty($_POST['Name']))
                {
                    $nameerr="<span style='color:red'>Name is required</span>";
                }else
                {
                   $name = valid($_POST['Name']);
                }
                if(empty($_POST['Email']))
                {
                    $mailerr="<span style='color:red'>Email is required</span>";
                }
                else{
                    $mail = valid($_POST['Email']);
                }
                   
                $message = valid($_POST['message']);
                
                if(empty($_POST['gender']))
                {
                    $gendererr="<span style='color:red'>Gender is required</span>";
                }
                else
                {
                   $gender = valid($_POST['gender']); 
                }
                   
                    
                
                
                
                
                
                 /*echo "Name: ".$name;
                   echo"<br>";
                   echo "Email: ".$mail;
                   echo"<br>";
                   echo "Message: ".$message;
                   echo"<br>";
                   echo "Gender: ".$gender;
                   echo"<br>";
                   */
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
                <p style="color:red">* required field</p>
                <table>
                    <tr>
                        <td>Name:*<?php echo $nameerr;?></td>
                        <td><input type="text" name="Name"></td>
                    </tr>
                    <tr>
                        <td>Email:*<?php echo $mailerr;?></td>
                        <td><input type="email" name="Email"></td>
                    </tr>
                    <tr>
                        <td>Message:</td>
                        <td><textarea name="message" cols="25" rows="5"></textarea></td>
                    </tr>
                    <tr>
                        <td>Gender:*<?php echo $gendererr;?></td>
                        <td><input type="radio" name="gender" value="Male" />Male</td>
                        <td>
                            <input type="radio" name="gender" value="Female" />Female
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="submit"></td>
                    </tr>
                </table>
            </form>

</body>
</html>