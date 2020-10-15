<?php
$all_key = array('a','b','c','d','e','f','1','3','4','5','!','@','#','$');
$length = array(3,5,7,9,11);
shuffle($length);

$final_length = $length[0];
echo"<br>Your Password Length is $final_length";
$str ="";
for($i = 0; $i<$final_length ;$i++){
    shuffle($all_key);
    $str .= $all_key[0];
}
?>