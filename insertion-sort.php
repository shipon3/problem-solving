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

function insertionSortForLoop(array $array) : array
{
    for($i = 1; $i < count($array); $i ++){
        $temp = $array[$i];
        $j = $i - 1;
        for($j; $j >=0 && $array[$j] < $temp; $j --){
            $array[$j + 1] = $array[$j];
        }
        $array[$j+1] = $temp;
    }
    return $array;
}

function insertionSortForeach(array $array) : array
{
    foreach($array as $key => $item){
        $j = $key;
        $temp_array = array_reverse(array_slice($array, 0, $key),true);
        foreach($temp_array as $index => $inItem){
            if($inItem > $item){
                break;
            }else{
                $array[$index +1] = $inItem;
                $j = $index;
            }
        }
        $array[$j] = $item;
    }
    return $array;
}

$result = insertionSortForeach([1,3,2,6,7,5]);

print_r($result);