<?php

function my_count_five(int $nbr){
    $nbr = $nbr + 1;
    for($i = 1;$i < 6;$i++){
        echo $nbr++ . PHP_EOL;
    }
}

