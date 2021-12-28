<?php

$a = array('1',2,3,"hello");
$a[] = "tyagi"; //Adding the Value in the last index value

unset($a[4]); // Remove the 4th index value

$a[] = "sohang"; // the next value added in the 5th index after removing the last index value.


echo"<pre>";
print_r($a);


?>