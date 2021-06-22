<?php
// Declaring 
$a = 6;
$b = 4;
$c = 1.2;

//Arithmetic operations
// echo $a + $b * $c;

//Increment operator
echo $a++;
echo ++$a;

echo $a--;
echo --$a.'<br>';

//Check number
is_float(1.25);
is_numeric("3g.45"); //false

//Conversion
$strNumber = '12.34';
// $number = (int)$strNumber;
$number = floatval($strNumber);
var_dump($number);
echo '<br>';

//Number function
echo max(2, 3, 6). '<br>';
echo sqrt(16);
?>