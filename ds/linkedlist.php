<?php 
class Node{
    public $data;
    public $next = null;

    public function __construct($data){
        $this->data = $data;
    }
}
class LinkedList{
    public $head = null;
    public function __construct($head){
        $this->head = $head;
    }

    public function addNode($data){
        $node = new Node($data);
        if($this->head == null){
            $this->head = $node;
        }else{
            $pointer = $this->head;
            while($pointer->next != null){
                $pointer = $pointer->next;
            }
            $pointer->next = $node;
        }
    }

    public function printList(){
        $pointer = $this->head;
        if($pointer == null){
            print("Error 420"."\n");
        }else{
            if($pointer->next != null){
                while($pointer->next != null){
                    print($pointer->data."\n");
                    $pointer = $pointer->next;
                }
            }else{
                print($pointer->data."\n");
            }
        }
    }
}

$ll = new LinkedList(new Node(56));
$ll->addNode(89);
$ll->addNode(69);
$ll->addNode(135);
$ll->printList();
