<?php
class Greeting {
    static public $name = 'Ivan';
    static public function sayHello()
    {
        echo "Hello, " . self::$name . "!";
    }
}
echo Greeting::$name;
Greeting::sayHello();