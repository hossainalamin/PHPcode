<?php
if($_SERVER['REQUEST_METHOD']=='POST' and isset($_POST['login']))
{
    $email        = $_POST['email'];
    $pass         = $_POST['password'];
    $hash_formate = "$2a07$";
    $salt         = "dskmfklasdmclsdkmcasd"; 
    $conC         =  $hash_formate . $salt;
    
    echo $pass;
    echo"<br>";
    echo crypt($pass,$conC);
}
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Document</title>
 </head>
 <body>
 	  <section id="body">
      <div class="card">
        <div class="card-header">
          <h2>User login</h2>
        </div>
        <div class="card-body">
            <form action="" method="post" style="max-width:600px;margin: 0 auto;">
            <div class="form-group">
               <label for="email">Email:</label>
               <input type="email" name="email" class="form-control" placeholder="Enter Email" required>
                <label for="email">Password:</label>
               <input type="password" name="password" class="form-control" placeholder="Enter Password" required> 
               <input type="submit"class="btn btn-primary mt-2" value="Login" name="login">
            </div>
            <?php
            if(isset($userlog))
            {
                echo $userlog;
            }
            ?> 
            </form>
            
        </div>
      </div>
 </section> 
 </body>
 </html>  
