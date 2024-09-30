<?php

function sum(array $data)
{
    $arr_len = count($data);
    $sum = 0;

    if($arr_len === 0){
        return $sum;
    }
    for($i=0;$i< $arr_len;$i++){
        if($sum < 0){
            $sum = 0;
        }
        $sum += $data[$i];
    }
    return $sum;

}

$array = [-1,-2,1,2,3,-5,4,5];

$result = sum($array);
echo $result;

// this programe time complexity O(n)