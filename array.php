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



echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Document</title>
    
</head>
<body>";
$titleCol1 = "Valor R$";
$array = array(
    40.00,
    200.00,
    100.00,
    150.00,
    "School of Net",
     true
);
echo "<table style='width:300px; height:400px; text-align:center;';>";
echo "<thead>";
echo "<tr>
        <th style='border: 1px solid';>$titleCol1</th>
     </tr>";
echo "</thead>";
echo "<tbody>";
for ($i = 0; $i < count($array); $i++){
    echo "<tr><td style='border: 1px solid';>$array[$i]</td></tr>";
}
echo "</tbody>";
echo "</table>";
echo "</body>
</html>
    ";





?>