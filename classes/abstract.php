<?php

abstract class AchievementType

{

    public function name(){

        $class = (new ReflectionClass($this))->getShortName();
    
        return trim(preg_replace('/[A-Z]/', ' $0', $class));

    }

    public function icon(){

        return strtolower(str_replace(' ', '-', $this->name()));
    }

    abstract public function qualifier($user);
}

//abstract classes just provide templates for child classes to run

class FirstThousandPoints extends AchievementType
{
    public function qualifier($user){

    }
}

$achievement = new FirstThousandPoints();

echo $achievement->name();