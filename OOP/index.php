<?php

//Class
require_once "person.php";

$person = new Person('HungNguyen', 'Hung@gmail.com');
$person->setAge('30');
// $person->name = 'HungNguyen';
// $person->email = 'hung@gmail.com';

echo '<pre>';
var_dump($person);
echo '</pre>';
echo $person->getAge().'<br>';

$person2 = new Person('SuongNguyen', 'Suong@gmail.com');
echo '<pre>';
var_dump($person2);
echo '</pre>';
echo $person::$count;
echo '<br>';
echo $person::$address;
echo '<br>';
?>