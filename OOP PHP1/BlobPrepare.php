<?php include "../OOP PHP/header.php";?>
<?php
$db=new mysqli("localhost","root","","test");
if($db->connect_error)
{
    echo "Connection Failed.";
    exit();
}
else
{
    echo "Connection successful..<br>";
}
$sql="select images from user where id=?;";
$stmt=$db->prepare($sql);
$stmt->bind_param("i",$id);
$id=24;
$stmt->execute();
$stmt->bind_result($images);
$stmt->fetch();
header('content-type:jpg');
echo '<img src="data:image/jpg;base64,'.base64_encode($images).'">';
/*$sql="insert into user(images) values(?);";
$stmt=$db->prepare($sql);
$stmt->bind_param("b",$images);
$image=file_get_contents("8.jpg");
$stmt->send_long_data(0,$image);
$stmt->execute();*/
$stmt->close();
$db->close();
?>

<?php include "../OOP PHP/footer.php";?>
