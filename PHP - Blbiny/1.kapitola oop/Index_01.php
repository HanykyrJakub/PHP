<?php

$mess = new Messages();

$mess->add(new Message("Wrong...", "err"));

$message = (new Message())->setText("Beware...")->setType("war");
$mess->add($message);

$mess->add(
    new Message("one"),
    new Message("two"),
    new Message("three")
);

echo $mess;

class Messages
{

}

class Message
{
    public function  add(){
        
    }
}