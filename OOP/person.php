<?php 

class Person{
    public $name;
    public $email;
    private $age;
    public static $count = 0;
    public static $address;

    public function __construct($name, $email)
    {
        echo $name .' '. $email;

        $this->name = $name;
        $this->email = $email;
        self::$count++;
        self::$address = 'Ha Noi';
    }

    public function setAge($age){
        $this->age = $age;
    }

    public function getAge(){
        return $this->age;
    }

    public static function getCount(){
        return self::$count;
    }

    // public static function getAddress(){
    //     return self::$address;
    // }
}

?>