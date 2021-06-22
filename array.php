<?php

//Create array
$fruits = ['banana', 'apple', 'orange'];

//Print array
var_dump($fruits);
echo '<br>';

//Get element by index
echo $fruits[1].'<br>';

//Set element by index
$fruits[1] = 'Peach';
var_dump($fruits);
echo '<br>';

//Check if array has element at index
if(isset($fruits[3])){
    echo 'true';
    echo '<br>';
}
else{
    echo 'false';
    echo '<br>';
}

//Add element to array
$fruits[] = 'apple';
var_dump($fruits);
echo '<br>';

//Print length array
echo count($fruits).'<br>';

//Add element the end to array
array_push($fruits, 'foo');
var_dump($fruits);
echo '<br>';

//Remove element the end to array
echo array_pop($fruits) .'<br>';
var_dump($fruits);
echo '<br>';

//Add element the first to array
array_unshift($fruits, 'bar');
var_dump($fruits);
echo '<br>';

//Remove element the first to array
array_shift($fruits);

//Split the string in array
$string = 'banana, apple, bar';
var_dump(explode(',',$string)).'<br>';
echo '<br>';

//Check element exist in array
var_dump(in_array('cod', $fruits));//false
echo '<br>';

//Search element in array
var_dump($fruits);
echo '<br>';
var_dump(array_search('apple', $fruits));//true
echo '<br>';

//Merge two arrays
// array_merge($array1, $array2);


?>