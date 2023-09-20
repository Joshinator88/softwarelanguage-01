<?php

function randomArray ($array) {
    $randomValue = random_int(0, count($array)-1);
    echo $array[$randomValue];
}

$array = ["stephan", "Jan", "Arie", "Wout"];
randomArray($array);