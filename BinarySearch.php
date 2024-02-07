<?php

$arr = [2, 16, 30, 31, 18, 63, 1];
sort($arr);

$low = 0;
$h = count($arr) - 1;
$mid = $low + ($h - $low) / 2;
$S = 18;

function BinarySearch($arr, $low, $h, $S) {
    while($low <= $h)
    {
        if($arr[$mid] == $S)
        {
            return $mid;
        }
        
    if ($arr[$mid] < $S)
    {
        return  $low = $mid + 1;
    }
    
    else
    $low = $mid - 1;
    
    }
    
}

