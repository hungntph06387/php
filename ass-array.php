<?php

//Create
$person = [
    'name'    => 'Hung',
    'age'     => 22,
    '0' => ['game', 'sport']
];
echo '<pre>';
var_dump($person); //print_r($person)
echo '</pre>';

foreach($person as $key => $value){
    // echo $key .' '.$value.'<br>';

    // is_array kiểm tra xem có phải mảng hay không
    if(is_array($value)){
        echo $key.' '.implode(', ', $value).'<br>';//implode nối các phần tử trong mảng 
    }
    else{
        echo $key.' '.$value.'<br>';
    }
}

//Get element by key
echo $person['name'];
echo '<br>';

//Set elemrnt by key
$person['email'] = 'hung@gmail.com';
echo '<pre>';
var_dump($person); //print_r($person)
echo '</pre>';

//Check null by key and element assignment
if(!isset($person['address'])){
    $person['address'] = 'unknown';
}
echo '<pre>';
var_dump($person); //print_r($person)
echo '</pre>';

$age = 22;
echo $age < 22 ? 'con hang' : 'het hang';

?>