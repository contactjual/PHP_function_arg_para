<?php

function new_function ($first, $second, $third) {
    $sum = $first + $second + $third;
    echo $sum;
}
new_function(2, 4, 5);

function new_function ( int $first, int $second, int $third) {
    $sum = $first + $second + $third;
    echo $sum;gti 
}
// new_function(2, 4, "5"); // error: couse third argument must be a int type data

// #41 to ....