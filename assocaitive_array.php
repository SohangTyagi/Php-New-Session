<?php

$a = [
    '1' => "Sohang",
    1 => "Tyagi",
    true => 100,
    1.9 => 1.29,
    1.0 => "Sohang Tyagi"

];

echo"<pre>";
print_r($a);



//Output is Sohang Tyagi because array overriding the same index values.
?>