<?php

class Reader{
    protected $_file;
    public function __construct( $file ) {
        if( file_exists($file) ) {
            $this->_file = $file;
        } else {
            throw new Exception('File does not exists!');
        }            
    }
    
    public function read(){
        /*...*/
        echo $this->_file;
    }
}

try{
    $reader = new Reader('/aksdhjasd/asdhgashd.txt');
} catch( Exception $e ){
    die($e->getMessage());
}
