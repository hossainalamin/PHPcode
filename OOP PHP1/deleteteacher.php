<?php include "../OOP PHP/header.php"; ?>
<?php
spl_autoload_register(function($class_name)
{
     include'classes/'.$class_name.".php"; 
});
?>
<section class="mainleft" style="float:left;">
<?php
$obj = new teacher();
?>

<?php
    if(isset($_GET['action']) && $_GET['action'] == 'delete')
    {
        $id=$_GET['id'];
        if($obj->delete($id))
        {
            echo "<span style='color:green;text:bold;'>Data Deleted</span>";
        }
?>

<form action="teachercrud.php" method="post">
 <table>
    <tr>
        <td>Name: </td>
        <td><input type="text" name="name" required="1"/></td>    
    </tr>

    <tr>
       <td>Department: </td>
        <td><input type="text" name="dep" required="1"/></td>
    </tr>

    <tr>
      <td>Age: </td>
        <td><input type="text" name="age" required="1"/></td>
    </tr>
    <tr>
      <td></td>
        <td>
        <input type="submit" name="submit" value="Submit"/>
        <input type="reset" value="Clear"/>
        </td>
    </tr>
  </table>
</form>
<?php } ?>
</section>



<section class="mainright" style="float:right;">
  <table class="tblone"border=1 style="text-align:center;">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Department</th>
        <th>Age</th>
        <th>Action</th>
    </tr>
<?php
    $i=0;
    foreach($obj->readAll() as $key=>$value){
        $i++;
?>
    <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $value['name'];?></td>
        <td><?php echo $value['dep'];?></td>
        <td><?php echo $value['age'];?></td>
        <td>
        <?php echo"<a href='crudupdate.php?action=edit&id=".$value['id']."'>Edit</a>";?> ||
        <?php echo"<a href='cruddelete.php?action=delete&id=".$value['id']."'onClick='return confirm(\"Are you sure to delete data..\")'>delete</a>";?>
        
        </td>
    </tr>
<?php } ?>

  </table>
     <hr>
   <br>
    <a href="crud.php">Student section</a>
  <a href="teachercrud.php">Teacher section</a>
</section>

<?php include "../OOP PHP/footer.php"; ?>