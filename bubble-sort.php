<?php

function bubbleSort(array $array) : array
{
    $length = count($array); // 9
    for($i = 0; $i < $length - 1; $i++){ // 0; 0 < 9 ;
        for($j = 0; $j < $length - 1; $j++) // 1; 1< 9
        {
            if($array[$j+1] < $array[$j]){ // 9 > 2
                $temp = $array[$j]; // 2
                $array[$j] = $array[$j+1]; // 
                $array[$j+1] = $temp;
            }
        }
    }

    return $array;
}

function bubbleSortWhile(array $array) : array
{
    $i = 0;
    $length = count($array); // 9
    while($i<$length - 1){
        $j = 0;
        while($j<$length - 1){
            if($array[$j+1] < $array[$j]){ // 9 > 2
                $temp = $array[$j]; // 2
                $array[$j] = $array[$j+1]; // 
                $array[$j+1] = $temp;
            }
            $j++;
        }
        $i++;
    }

    return $array;
}
function bubbleSortForeach(array $array) : array
{
    $length = count($array) - 1;
    foreach($array as $i => $item){
        foreach($array as $j => $stateItem){
            if($length > $j && $array[$j+1]>$array[$j]){
                $temp = $array[$j];
                $array[$j] = $array[$j+1];
                $array[$j+1] = $temp;
            }
        }
    }

    return $array;
}

$result = bubbleSortForeach([5,2,9,5,7,16,4,6,1,11]);

print_r($result);