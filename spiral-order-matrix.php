<?php
function spiralOrder($matrix) {
    $result = [];
    
    if (count($matrix) == 0) {
        return $result;
    }

    $top = 0;
    $bottom = count($matrix) - 1;
    $left = 0;
    $right = count($matrix[0]) - 1;

 
        // Traverse from left to right
        for ($i = $left; $i <= $right; $i++) {
            $result[] = $matrix[$top][$i];
        }
        $top++;

        // Traverse from top to bottom
        for ($i = $top; $i <= $bottom; $i++) {
            $result[] = $matrix[$i][$right];
        }
        $right--;

        // Traverse from right to left, if there's still a row
       
            for ($i = $right; $i >= $left; $i--) {
                $result[] = $matrix[$bottom][$i];
            }
            $bottom--;
        

        // Traverse from bottom to top, if there's still a column
        
            for ($i = $bottom; $i >= $top; $i--) {
                $result[] = $matrix[$i][$left];
            }
            $left++;
            
    return $result;
}

// Example usage:
$matrix = [
    [1, 2, 3,4, 5, 6],
    [7, 8, 9,10,11,12],
    [13,14,15,16,17,18],
    [19,20,21,22,23,24]
];

$result = spiralOrder($matrix);
print_r($result);
?>
