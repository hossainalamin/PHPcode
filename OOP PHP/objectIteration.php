<?php include 'header.php';?>
<?php
class person
{
	public $name="Alamin";
	public $age="25";
	private $email="hossainalamin980@gmail.com";
	
	function inner()
	{
        echo "Inside class:<br>";
        foreach($this as $details=>$values)
        {
            echo "$details = $values <br>";
        }
        
	}
       
}
$person=new person();
foreach($person as $detail=>$value)
{
	echo "$detail = $value <br>";
}
$person->inner();
?>

<?php include 'footer.php';?>
