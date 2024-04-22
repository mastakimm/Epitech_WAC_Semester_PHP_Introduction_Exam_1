<?php

function CLI(...$args){

    $second = md5($args[1]);
    $third = md5($args[2]);
    $fourth = md5($args[3]);

    echo $second . PHP_EOL . $third . PHP_EOL . $fourth . PHP_EOL;
}

CLI(...$argv);


?>