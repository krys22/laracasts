<?php 

class Collection{

    protected $items;

    public function __construct(array $items)
    {
        $this->items = $items;
    }

    public function sum($key){

       return array_sum(array_map(function($item) use($key){
            return $item->$key;
        }, $this->items));
    }

    // public function sumRefactored($key){

    //     return array_sum(array_map(fn($item) => $item->$key, $this->items));
    //  }

     public function sumRefactoredAgain($key){

        return array_sum(array_column($this->items, $key));
     }
}

class VideosCollection extends Collection{

    public function length(){

        return $this->sum('length');
    }
}

class Video{

    public $title;
    public $length;

    public function __construct($title, $length)
    {
        $this->title = $title;
        $this->length = $length;
    }
}

$collection = new Collection([
    new Video('Some Video', 100),
    new Video('Some Video', 200),
    new Video('Some Video', 300),
]);

$videos = new VideosCollection([
    new Video('Some Video', 100),
    new Video('Some Video', 200),
    new Video('Some Video', 300),
]);

var_dump($collection);
var_dump($videos->length());