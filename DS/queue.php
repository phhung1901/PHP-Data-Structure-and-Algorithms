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
        return $this->end - $this->first."\n";
    }

    // add to queue
    public function enQueue($val){
        $this->queue[++$this->end] = $val;
        return $val." is added to Queue \n";
//        print_r($this->queue);
    }

    // delete first val queue
    public function deQueue(){
            if ($this->isEmpty()){
                throw  new  Exception("Queue is empty\n");
            }else{
                $val = $this->queue[++$this->first];
                return $val." is deQueue \n";
            }
    }

    // return first val
    public function front(){
        if ($this->isEmpty()){
            throw  new  Exception("Queue is not empty\n");
        }else{
            $val = $this->queue[$this->first + 1];
            return $val."\n";
        }
    }

    // return end val
    public function after(){
        if ($this->isEmpty()){
            throw  new  Exception("Queue is not empty\n");
        }else{
            $val = $this->queue[$this->end];
            return $val."\n";
        }
    }
}

$queue = new Queue;
if ($queue->isEmpty()){
    echo "Queue is empty...\n";
}else{
    echo "Queue is not empty...\n";
};
echo $queue->size();;
//$queue->enQueue(20);
$queue->enQueue(40);
$queue->enQueue(10);
try {
    echo $queue->deQueue();
//    echo $queue->front();
//    echo $queue->after();
    $queue->enQueue(30);

}catch (Exception $e){
    echo 'Message: ' .$e->getMessage();
};
echo $queue->size();
?>