<?php

//While

//Loop with $counter
$counter = 0;
while($counter <10)
{
    echo $counter.'<br>';
    if($counter===5){
        break;
    }
    $counter++;
}

//Do-while
$counter1 = 0;
do{
    echo $counter1;
    $counter1++;

}while($counter1<10);
echo '<br>';

//For
for($i=0; $i < 10; $i++){
    echo $i.'<br>';
}

//Foreach
$fruits = ['banana','apple','foo'];
foreach($fruits as $key => $fruit){
    echo $key.' '.$fruit.'<br>';
}

$person = [
    'name' => 'HungNguyen',
    'age' => 22,
    'hobbies' => ['game','sport','music']
];
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

?>