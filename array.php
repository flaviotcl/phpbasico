<?php

$array = array(
            40,
            200,
            100,
            150,
            "School of Net",
             true
        );

// Forma mais utilizada p/ criação de Arrays.
$array1 = [
            45,
            210,
            110,
            160,
            "School of .....",
            false
        ];

echo $array[0];
echo "\n";

echo $array[1];
echo "\n";

echo count($array);
echo "\n";


for ($i = 0; $i < count($array); $i++){
    echo $array[$i]."\n";
}