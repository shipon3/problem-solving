<?php

function gcd(int $a, int $b)
{
    if($a % $b == 0) return $b;
    return gcd($b, $a % $b);
}

function gcdArray(array $array)
{
    if(empty($array)){
        return 0;
    }
    $result = 0;
    for($i = 0; $i < count($array) - 1; $i++){
        $result = gcd($array[$i],$array[$i + 1]);
    }
    return $result;
}

$result = gcdArray([12,42,54]);
var_dump($result);