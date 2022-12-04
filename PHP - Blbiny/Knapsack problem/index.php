<?php

function Knapsack($capacity, $weight, $value, $itemscount)
{
    if ($itemscount == 0 || $capacity = 0)
        return 0;


    
    if ($weight[$itemscount - 1]> $capacity)
        return Knapsack($capacity, $weight, $value, $itemscount - 1);


    else
        return max($value[$itemscount - 1] +
        Knapsack($capacity - $weight[$itemscount-1],
        $weight, $value, $itemscount),
        Knapsack($capacity, $weight, $value, $itemscount));
}

//Uživatelský kód:
$value = array(32,55,345);
$weight = array(20,30,45);
$capacity = 100;
$itemscount = count($value);
echo Knapsack($capacity, $weight, $value, $itemscount);

?>