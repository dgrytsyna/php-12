<?php
class User {
    function __construct($username, $surname) {
        echo('__construct with 2 params called: '.$username.', '.$surname. '<br>');

    }
};
class ParentClass
{
    public function write($message)
    {
        echo 'ParentClass: ' . $message . '<br>';
    }
    
    public function fromParentClass()
    {
        echo 'this message is from parent class <br>';
    }
};

class ChildClass extends ParentClass
{
    public function write($message)
    {
        echo 'ChildClass: ' . $message .  '<br>';
    }
};