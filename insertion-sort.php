<?php

function insertionsFromSmallToBigSort(array $array) : array
{
    for($i = 1; $i < count($array); $i++){
        $temp = $array[$i];
        $j = $i - 1;
        while($j >= 0 && $array[$j] > $temp){
            $array[$j + 1] = $array[$j];
            $j -= 1; 
        }
        $array[$j+1] = $temp;  
    }
    return $array;
}

function insertionFromBIgToSmall(array $array) : array
{
    for($i = 1; $i<count($array); $i ++){
        $temp = $array[$i];
        $j = $i - 1;
        while($j >= 0 && $array[$j] < $temp){
            $array[$j + 1] = $array[$j];
            $j -= 1; 
        }
        $array[$j+1] = $temp;
    }
    return $array;
}

$result = insertionFromBIgToSmall([1,3,2,6,7,5]);

print_r($result);