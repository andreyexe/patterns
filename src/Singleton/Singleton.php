<?php
namespace Patterns\Singleton;

Class Singleton{
    private $properties = [];
    public static $instance;

    private function __construct(){}
    private function __clone(){}
    public function __wakeup(){}

    public static function getInstance(){
        if(empty(self::$instance))
            return self::$instance = new static();

        return self::$instance;
    }
    public function getProperties($key){
        if(isset($this->properties[$key]))
            return $this->properties[$key];
        return null;
    }
    public function setProperties($key, $value){
        if(isset($this->properties[$key]))
            return null;
        $this->properties[$key] = $value;
    }
}
