<?php

function rotone($str){
    $str = strtolower($str);
    $resultat = "";

    for($i = 0; $i < strlen($str);$i++){
        $caractere = $str[$i];

        if($caractere == "z"){
            $resultat .= "a";
        } elseif($caractere >= "a" && $caractere < "z"){
            $resultat .= chr(ord($caractere) +1);
        } else {
            $resultat .= $caractere;
        }
    }
    echo $resultat . PHP_EOL;
}
