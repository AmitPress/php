<?php
// access modifiers - public, private, protected
// public - can be accessed globally
// private - can be accessed from the class where it is situated
// protected - can be accessed throughout the file but not from outside
class Reader {
    public $id;
    public $name;
    public $pages;

    function changeName($name){
        $this->name = $name;
    }

    function getPages(){
        return $this->pages;
    }
}

$read1 = new Reader();
$read1->changeName("rahul");
$read1->id = 455;
$read1->pages = 54;

echo($read1->pages."\n"); // 