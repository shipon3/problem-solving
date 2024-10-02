<?php

function sieveOfEratosthenes($n)
{
    $prime = array_fill(0,$n+1,true);
    // $first = 0;
    // $second = 0;
    for($p = 2; $p * $p <=$n; $p++){
        // $first ++;
        if($prime[$p] == true){
            for($i = $p * $p; $i<=$n; $i += $p){
                // $second++;
                $prime[$i] = false;
            }
        }
    }

    for($p = 2; $p<=$n; $p++){
        if($prime[$p]){
            echo $p." ";
        }
    }

    // echo "\n".'First loog'. $first."\n";
    // echo 'Second loog'. $second."\n";
}
$n = 100;
    echo "Following are the prime numbers "
     ."smaller than or equal to " .$n."\n" ;
sieveOfEratosthenes($n);