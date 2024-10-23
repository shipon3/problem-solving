<?php

function selectionSort(array $array) : array
{
    for($i = 0; $i < count($array) - 1; $i ++){
        $min_index = $i;
        for($j=$i+1;$j<count($array);$j ++){   
            if($array[$i] > $array[$j]){
                $min_index = $j;
            }
        }
        $temp = $array[$i];
        $array[$i] = $array[$min_index];
        $array[$min_index] = $temp;
    }
    return $array;
}
function selectionForeach(array $array) : array
{
    foreach($array as $key => $item) {
        $min_index = $key;
        
        foreach($array as $index => $stateItem){
            if($item > $stateItem){
                $min_index = $index;
            }
        }
        print_r($array);
        // echo $array[$min_index];
        // die;
        $temp = $item;
        $array[$key] = $array[$min_index];
        $array[$min_index] = $temp;
    }
    return $array;
}
$result = selectionForeach([3,2,6,7,1,5]);

print_r($result);