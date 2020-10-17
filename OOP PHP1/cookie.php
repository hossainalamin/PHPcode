<form action="" method="post">
  <input type="text" name="shirt" placeholder="Enter name">
  <input type="submit" name="submit" value="Submit">
</form>
<?php
//create
//check
if(isset(_POST['submit'])){
  if(count($_COOKIE) >0)
    echo "you already have created ".count($_COOKIE)." cookies";
  else
      setcookie('shirt',$_POST['shirt'],time()+60*60*60*24);
}
//delete
setcookie('shirt',$_POST['shirt'],time()-60*60*60);
if($_COOKIE['shirt']){
  echo "please buy a shirt";
}
?>
