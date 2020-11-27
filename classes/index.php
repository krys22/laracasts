<?php

class Team 

{


    protected $members = [];
    protected $name;

    public function __construct($name, $members = [])
    {
        $this->name = $name;
        $this->members = $members;
    }

    public static function start(...$params){

        return new static(...$params);
    }

    public function name(){

        return $this->name;
    }


}


$acmee = Team::start('Acme', [
    'John Doe',
    'Jane Doe'
]);