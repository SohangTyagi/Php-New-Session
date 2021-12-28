<?php

$he = "Sohang";
$friend = "Sprash";

$talking = <<<tyagi
            $he,said: 'My Core is Better Then you.'
            $friend,"Not Agreed with. $he
    tyagi;
    


//In the heredoc we can use the identifier thats why we can use the single or double quotes in the string 
// syntax is <<< use the operator and the give a name to that which work as a identifier.
// Contains no other characters except a semicolon (;).
// Heredoc strings are like double-quoted strings without escaping.
echo($talking);


// Output
/*
Sohang,said: 'My Core is Better Then you.' Sprash,"Not Agreed with. Sohang
*/




// invalide Syntax


/*
$talking = <<<tyagi
    $he,said: 'My Core is Better Then you.'    //The string always same line in respect to identifier
            $friend,"Not Agreed with. $he
        tyagi;                          //close tag is also in the same line other wise it shows error.


*/


?>
