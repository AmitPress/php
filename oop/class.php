<?php
// access modifiers - public, private, protected
// public - can be accessed globally
// private - can be accessed from the class where it is situated
// protected - can be accessed throughout the file but not from outside
class Reader {
    public $id;
    public $name;
    public $pages;
    function __construct($id, $name, $pages){
        $this->id = $id;
        $this->$name = $name;
        $this->pages = $pages;
    }
    function changeName($name){
        $this->name = $name;
    }

    function getPages(){
        return $this->pages;
    }
}

// $read1 = new Reader("kavita", "2013-1-69-077", '72p');
// $read1->changeName("rahul");
// $read1->id = 455;
// $read1->pages = 54;
// $read2 = new Reader("Kabitra", 227788, 78);
// echo($read1->pages."\n");
// echo($read2->pages);
// here we can see type of the pages attribute of two different object of same class is different
