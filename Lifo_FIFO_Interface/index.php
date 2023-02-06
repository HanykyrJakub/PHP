<?php
interface Pushable{
    public function push(mixed $value);
    public function pop(): mixed;
}

class LIFO implements Pushable
{
    public $stack = [];

    public function push ($value)
    {
        array_push($this->stack,$value);
    }

    public function pop()
    {
        return array_pop($this->stack);
    }
}

class FIFO implements Pushable
{
    public $queue = [];
    
    public function push($value)
    {
        array_push($this->queue, $value);
    }

    public function pop()
    {
        return array_shift($this->queue);
    }
}