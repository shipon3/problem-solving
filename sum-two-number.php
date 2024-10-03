<?php

function twoSum($nums, $target) {
    $length = count($nums);
    if($length < 1){
        return 0;
    }
    for ($i = 0; $i < $length; $i++) {
        $result = $target - $nums[$i];
        for($j = $i + 1; $j < $length; $j++){
            if($result == $nums[$j]){
                return [$i, $j];
            }
        }
    }
}

$result = twoSum([-2,3,11,5,7,15,8],13);
print_r($result);