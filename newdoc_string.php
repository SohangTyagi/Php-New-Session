<?php

$he = "Sohang";
$friend = "Sprash";

// it doesn’t expand the variables it shows as it is that write in the string tag.
// we can use single quotes in the identifier 'tyagi'.
// Nowdoc strings are like single-quoted strings without escaping.
$talking = <<<'tyagi'
            $he,said: 'My Core is Better Then you.'
            $friend,"Not Agreed with. $he
            tyagi;
            // When we change the indetation of closing tag is shows error
            // Parse error: Invalid body indentation level 
echo($talking);


?>