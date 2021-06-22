<?php

//Variable types;
$name = 'HungNguyen';
$age = 22;
$isMale = true;
$height = 1.7;
$salary = null;

//Print var
echo $name .'<br>';
echo $age.'<br>';
echo $isMale.'<br>';
echo $height.'<br>';
echo $salary.'<br>';

//Print type var
echo gettype($name). '<br>';
echo gettype($age). '<br>';
echo gettype($isMale). '<br>';
echo gettype($height). '<br>';
echo gettype($salary). '<br>';

//Print whole var
var_dump($name, $age, $isMale, $height, $salary);
echo '<br>';

//Chage value of var
$name = false;

//Print type of var
echo gettype($name). '<br>';

//Check var
is_string($name); //false
is_int($age); //true
is_bool($isMale); //true
is_double($height); //true
 
//Check var is defined
isset($name); //true
isset($email); //false

//Constants (Hằng số)
define('name', 'Nguyen Hung');
echo name . '<br>';

//Using PHP built-in constants
echo SORT_ASC.'<br>';
echo PHP_INT_MAX.'<br>';

?>