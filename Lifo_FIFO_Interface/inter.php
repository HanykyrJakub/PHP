<?php

require 'index.php';

$lifo = new LIFO();
$lifo->push(1);
$lifo->push(2);
$lifo->push(3);

echo $lifo->pop() . PHP_EOL;
echo $lifo->pop() . PHP_EOL;
echo $lifo->pop() . PHP_EOL;

$fifo = new FIFO();

$fifo = new FIFO();
$fifo->push(1);
$fifo->push(2);
$fifo->push(3);

echo $fifo->pop() . PHP_EOL;
echo $fifo->pop() . PHP_EOL;
echo $fifo->pop() . PHP_EOL;