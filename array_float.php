<?php

$a = array(1,2,3,4,5,6);

$a[1.5] = "tyagi"; // Error During Execution
$a[4.7] = "tyagi";

echo"<pre>";
print_r($a);
?>