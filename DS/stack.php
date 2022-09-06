<?php
class Stack{
    public $top;
    public $stack = [];

    function __construct()
    {
        $this->top = -1;
    }

    // check empty
    public function isEpmty(){
        if ($this->top == -1){
            return true;
        }else{
            return false;
        }
    }

    //check size
    public function size(){
        echo ($this->top + 1)."\n";
    }

    //push
    public function push($val){
        $this->stack[++$this->top] = $val;
        echo $val." is added to stack \n";
        print_r($this->stack);
    }

    // pop first val
    public function pop(){
        if ($this->isEpmty()){
            echo "Stack is empty...\n";
        }else{
            $val = $this->stack[$this->top--];
            echo $val." is deleted stack \n";
        }
    }

    // select first val
    public function topElement() {
        if($this->top < 0) {
            echo "Stack is empty...\n";
        } else {
            echo $this->stack[$this->top]."\n";
        }
    }
}

$stack = new Stack;
if ($stack->isEpmty()){
    echo "Stack is empty...\n";
}else{
    echo "Stack is not empty...\n";
};
$stack->size();
$stack->push(4);
$stack->push(6);
$stack->push(1);
$stack->pop();
$stack->push(7);
$stack->topElement();

?>