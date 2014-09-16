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
}
