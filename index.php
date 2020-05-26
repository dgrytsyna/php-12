<?php
require_once 'class.php';
$user = new User('Emma', 'Smith');
$user2 = new User('Kate', 'Smith');
$child = new ChildClass();
echo $child->write('Hello');
echo $child->fromParentClass();
var_dump($user);
var_dump($user2);
