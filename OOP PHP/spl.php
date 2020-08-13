<?php include 'header.php';?>
<?php
$arr=array('html','css','php','js');
$it=new ArrayIterator($arr);
$limit=new LimitIterator($it,0,4);
$chc=new CachingIterator($it);
foreach($chc as $value){
    echo $value;
    if($chc->hasNext())
    {
        echo ", ";
    }
}
?>
<?php include 'footer.php';?>