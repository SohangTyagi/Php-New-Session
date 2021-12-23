<?php

$number = 123.45; //Output is 123.45 float chanhe into the integer.
$test2 = 23.123e7; //Output is 231230000 it converted float into the integer.
$test = 12_3_4_5.6789; //Output is 12345.6789 it removes the underscore _.

// conversion into the inerger;

$number1 = (int)123.45;
$test3 = (int)23.123e7;
$test4 = (int)123_4_4_5.2345;


// Conversion into string.
$string1 = "123.45";
$string2 = "23.123e7";
$string3 = "123_4_4_5.2345";

echo("Put Variable According to you Interger Or String");
?>