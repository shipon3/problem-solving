<?php



function ruman($s)
{
    if($s == ''){
        return 'empty string not resolve this function please provide string ruman number thank you';
    }
    $total = 0;
    $prev_value = 0;
    for($i = strlen($s) - 1; $i >= 0 ; $i--){
        $current_value = 0;
        switch($s[$i]){
            case "I":
                $current_value = 1;
                break;
            case "V":
                $current_value = 5;
                break;
            case "X":
                $current_value = 10;
                break;
            case "L":
                $current_value = 50;
                break;
            case "C":
                $current_value = 100;
                break;
            case "D":
                $current_value = 500;
                break;
            case "M":
                $current_value = 1000;
                break;
            case "i":
                $current_value = 1;
                break;
            case "v":
                $current_value = 5;
                break;
            case "x":
                $current_value = 10;
                break;
            case "l":
                $current_value = 50;
                break;
            case "c":
                $current_value = 100;
                break;
            case "d":
                $current_value = 500;
                break;
            case "m":
                $current_value = 1000;
                break;
            }
        $total += ($current_value < $prev_value) ? - $current_value : $current_value;
        $prev_value = $current_value;
    }
    return $total;
}

$result = ruman('');
var_dump($result);