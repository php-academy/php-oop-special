<?php

class Reader{
    protected $_file;
    public function __construct( $file ) {
        if( file_exists($file) ) {
            $this->_file = $file;
        } else {
            throw new FileException();
        }            
    }
    
    public function read(){
        /*...*/
        //echo $this->_file;
        throw new Exception('Unknow error!');
    }
}

class FileException extends Exception{
    public function __construct()
    {
        $this->message = "File does not exists!";
    }
}
/*
try{
    $reader = new Reader('/aksdhjasd/asdhgashd.txt');
}
catch( FileException $e ){
    echo $e->getMessage();
}
catch( Exception $e ){
    echo $e->getMessage();
}

try{
    $reader = new Reader( __DIR__ . '/index.php');
    $reader->read();
}
catch( FileException $e ){
    echo $e->getMessage();
}
catch( Exception $e ){
    echo $e->getMessage();
}*/

class Person {
    protected $_name = 'Ivan';
    protected $_age = 30;
    
    public function __get( $property ){
        //getName
        $methodName = 'get' . ucfirst($property); 
        if( method_exists($this, $methodName ) ){
            return $this->$methodName(); 
        } else {
            throw new Exception('Property does not exist');
        }
    }
    
    public function __set( $property, $value ) {
        //getName
        $methodName = 'set' . ucfirst($property); 
        if( method_exists($this, $methodName ) ){
            $this->$methodName($value); 
        } else {
            throw new Exception('Property does not exist');
        }
    }

    public function getName(){
        return $this->_name;
    }
    
    public function getAge(){
        return $this->_age;
    }
    
    public function setAge( $age ){
        $this->_age = $age; 
    }
    
}

$person = new Person();
$person->age = 31;
$person->name = "Super Ivan";
