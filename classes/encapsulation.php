<?php

class Person{

    public $name;
    
    public function __construct($name)
    {
        $this->name = $name;
    }

    private function thingsThatKeepUpAtNight(){

        return 'How many girls can I fuck in a day';
    }
}

$method = new ReflectionMethod(Person::class, 'thingsThatKeepUpAtNight');
$method->setAccessible(true);

$person = new Person('Bob');

$method->invoke($person);