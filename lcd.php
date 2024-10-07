<?php

function gcd(int $a, int $b)
{
    if($a%$b==0) return $b;
    return gcd($b,$a%$b);
}
function multiply(int $a , int $b)
{
    return $a * $b;
}

function lcd(int $a, int $b)
{
    return multiply($a,$b) / gcd($a,$b);
}

function lcdArray(array $array)
{
    $result = 0;
    for($i = 0; $i< count($array) -1;$i++)
    {
        $result = lcd($array[$i],$array[$i+1]);
    }
    return  $result;
}

$result = lcdArray([12,15]);
var_dump($result);