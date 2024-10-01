<?php

function isPrime($n) : bool
{
    if($n <= 1){
        return false;
    }
    $count = 1;
    for($i = 2; $i<$n;$i++){
        echo " ".$count++ ."\r\n";
        if($n % $i == 0){
            return false;
        }
    }
    return true;
}

function isPrimeAnother(int $n) : bool
{
    if($n <= 1){
        return false;
    }
    $count = 1;
    for($i = 2; $i * $i<=$n;$i++){
        echo " ".$count++ ."\r\n";
        if($n % $i == 0){
            return false;
        }
    }
    return true;
}

function isPrimeSqrt(int $n) : bool
{
    if($n <= 1){
        return false;
    }

    $sqrt = sqrt($n + 1);
    echo $sqrt."\r\n";

    $count = 1;
    for($i = 2; $i <=$sqrt;$i++){
        echo " ".$count++ ."\r\n";
        if($n % $i == 0){
            return false;
        }
    }
    return true;
}

$result = isPrime(11);
var_dump($result);