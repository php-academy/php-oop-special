<?php
class Greeting {
    const NUMBER = 1; 
    static public $name = 'Ivan';
    static public function sayHello()
    {
        echo "Hello, " . self::$name . "!";
        //echo self::NUMBER;
    }
}
//echo Greeting::$name;
//Greeting::sayHello();
echo Greeting::NUMBER;