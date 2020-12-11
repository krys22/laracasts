<?php

class Age
{
    public $age;

    public function __construct($age)
    {
        if($age < 0  || $age > 120){
            throw new InvalidArgumentException('That new no sense');
        }

        $this->age = $age;
    }

}

function register(string $name, Age $age)
    {
        
    }

register('John Doe', new Age(35));