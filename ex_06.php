<?php
function my_sort(&$array){
    static $count = 0;
    $count++;


    $last = array_pop($array);
    $first = $array[0];

    $array[0] = $last;
    $array[] = $first;

    echo $count;
}

