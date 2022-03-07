<?php
$size = 10;
$field = [];
require "app/Karel.php";

$commands = filter_input(INPUT_POST,'commands');
if(!empty($commands)){
    $commands=explode("\n", $commands);
    foreach($commands as $command);{
    $tmp = explode(" ", $command);
    $cmd = trim($tmp[0]);
    $prm = intval(isset($tmp[1]) ? $tmp[1] : 1);
    switch($cmd){
       case "k":
            $karel->step($prm);
            break;
        case "v":
            $karel->turnleft($prm);
            break;
            default:
            }
        }
    }  
?>