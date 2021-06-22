<?php

//Print
function hello()
{
    echo 'Hello I am Suong'.'<br>';
}
hello();

//Function with argument
function hello1($name)
{
    echo 'Hello I am'.' '.$name.'<br>';
}
hello1('Hung');

//Function sum all number using $nums
function sumAll(...$nums)
{
    $sum = 0;
    foreach($nums as $n){
        $sum += $n;
    }
    return $sum;
}
echo sumAll(1,2,3,4,5);

?>