<?php

$behandel = fopen("Data.csv", "r");
$i = 0;
while ($record = fgetcsv($behandel, 1000, ",")) {
    echo("Naam: " . $record[0] . " ");
    echo("Telefoon Nr.: " . $record[1] . " ");
    echo("E-mail: " . $record[2] . " " . "<br />");
    $mijnarray[$i][0] = $record[0];
    $mijnarray[$i][1] = $record[1];
    $mijnarray[$i][2] = $record[2];
    $i++;
}




echo("<pre>");
print_r($mijnarray);
echo("<pre>");
?>