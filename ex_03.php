<?php
function my_count_chars(string $str, $char){
    $occurence = substr_count($str, $char);
    return $occurence;
}
