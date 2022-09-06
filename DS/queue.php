<?php
class Queue{
    public $first;
    public $end;
    public $queue = [];

    function __construct()
    {
        $this->first = -1;
        $this->end = -1;
    }

    // empty check
    public function isEmpty(){
        if ($this->first == $this->end){
            return true;
        }else{
            return false;
        }
    }

    // size check
    public function size(){
        echo $this->end - $this->first."\n";
    }

    // add to queue
    public function enQueue($val){
        $this->queue[++$this->end] = $val;
        echo $val." is added to Queue \n";
        print_r($this->queue);
    }

    // delete first val queue
    public function deQueue(){
            if ($this->isEmpty()){
                echo "Queue is empty...\n";
            }else{
                $val = $this->queue[++$this->first];
                echo $val." is deQueue \n";
            }
    }

    // return first val
    public function front(){
        if ($this->isEmpty()){
            echo "Queue is empty...\n";
        }else{
            $val = $this->queue[$this->first + 1];
            echo $val."\n";
        }
    }

    // return end val
    public function after(){
        if ($this->isEmpty()){
            echo "Queue is empty...\n";
        }else{
            $val = $this->queue[$this->end];
            echo $val."\n";
        }
    }
}

$queue = new Queue;
if ($queue->isEmpty()){
    echo "Queue is empty...\n";
}else{
    echo "Queue is not empty...\n";
};
$queue->size();
$queue->enQueue(10);
$queue->enQueue(15);
$queue->enQueue(8);
$queue->deQueue();
$queue->front();
$queue->after();
$queue->enQueue(30);

?>