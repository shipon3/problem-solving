<?php

function mergeSort(array $array) : array
{
    if (count($array) <= 1) {
        return $array;
    }
    $mid = floor(count($array) / 2);
    $left = array_slice($array,0,$mid);
    $right = array_slice($array, $mid);

    $left = mergeSort($left);
    $right = mergeSort($right);
    return merge($left,$right);
}

function merge(array $left, array $right) : array // 3,2  6
{
    $result = [];
    $i = 0;
    $j = 0;

    while($i < count($left) && $j < count($right)){
        if($left[$i] < $right[$j]){
            $result[] = $left[$i];
            $i++;
        }else{
            $result[] = $right[$j];
            $j++;
        }
    }

   // Append remaining elements from left or right array if any
   while ($i < count($left)) {
        $result[] = $left[$i];
        $i++;
    }

    while ($j < count($right)) {
        $result[] = $right[$j];
        $j++;
    }

    return $result;
}
$result = mergeSort([3,2,6,4,9,23,5,7,1]);

print_r($result);