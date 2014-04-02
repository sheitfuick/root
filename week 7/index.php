<body>
<form action="index.php" method="post">
<input type="text" name="text" align="left" />
<input type="submit" value="click" />
</form>
</body>
<?php

?>

<?php
$ime=$_POST['text'];
$file="db.txt";
$open=fopen($file,"a") or die ("open");
fwrite($open,$ime."\r\n");
fclose($open);
?>












<!--<?php

$list = [
    ["naam" => "piet",
     "leeftijd" => "20",
     "achternaam" => "blip",],
    ["naam" => "jan",
     "leeftijd" => "23",
     "achternaam" => "blup",],
    [ "naam" => "klaas",
     "leeftijd" => "29",
     "achternaam" => "blob",]
];

$fp = fopen('file.csv', 'w');
foreach ($list as $fields) {
    fputcsv($fp, $fields);
}
echo "success";
fclose($fp);
?>


<!--
<?php
$mijnarray = [
    ["naam" => "Jan",
     "telefoon" => "0615115309",
     "email" => "arjanoskam97@gmail.com"],
    ["naam" => "Piet",
     "telefoon" => "0620127761",
     "email" => "shaiyahack97@gmail.com"],
    ["naam" => "Klaas",
     "telefoon" => "0620005060",
     "email" => "shaiyahack2013@gmail.com"],
    ["naam" => "Kees",
     "telefoon" => "0615252253",
     "email" => "muismatjes1@gmail.com"]
];
$mijnArray1 = [
    [
        "naam" => "piet",
        "leeftijd" => "20",
        "achternaam" => "hogeboom",
    ],
    [
        "naam" => "jan",
        "leeftijd" => "23",
        "achternaam" => "blup",
    ],
    [
        "naam" => "klaas",
        "leeftijd" => "29",
        "achternaam" => "blob",
    ]
];
foreach ($mijnarray as $value) {
    echo("<tr>");
    foreach ($value as $porn) {
        echo("<td>" . $porn . "</td>");
    }
    echo("</tr>");
}
?>

-->








<!--?php
$behandel = fopen("csv/test.csv", "r");

$i = 0;
while ($record = fgetcsv($behandel, 1000, ",")){
echo "naam: " . $record[0] . " ";
echo "achternaam: " . $record[1] . " ";
echo "leeftijd: " . $record[2] . "<br />";
$mijnarrray[$i]['naam'] = $record[0];
$mijnarrray[$i]['achternaam'] = $record[1];
$mijnarrray[$i]['leeftijd'] = $record[2];
$i++;
}

echo "<pre>";
print_r($mijnarrray);
echo "</pre>";

?>
-->





















<!--

<?php


?>


<!--<?php
$mijnLeeftijd = 33;
$nix18 = 18;
$prijs = 9001;

echo " komt kassa bij de man.";
if ( $mijnLeeftijd >= $nix18 && $prijs > 9000) {
    echo " drank mag deze kopen.";
} else {
    echo " drank mag hem niet kopen.";
}
echo " kassa verlaat de winkel.";
?>








<h3>php lab 03</h3> 
<?php 
$integer =  5;
$float =  5.1;
$string =  " string ";
$boolean =  true;
echo gettype($integer);
echo gettype($float);
echo gettype($string);
echo gettype($boolean);
$toshiba["merk"] = " Toshiba Satellite "; $toshiba["model"] = " A100 "; 
$toshiba["os"] = " Windows XP "; 
$toshiba["voorraad"] = 80; 
$toshiba["prijs"] = 999;
$acer["merk"] = " de Acer Aspire laptop "; 
$acer["model"] = " 5732Z "; 
$acer["os"] = " Linux "; 
$acer["voorraad"] = 0; 
$acer["prijs"] = 888; 
$hp["merk"] = " HP laptop ";
$hp["model"] = " 200X "; 
$hp["os"] = " Vista "; 
$hp["voorraad"] = 50; 
$hp["prijs"] = 777; 
$voorraadT =  $toshiba["voorraad"] >= 1 ? "in voorraad" : "niet in voorraad";
$voorraadA =  $acer["voorraad"] >= 1 ? "in voorraad" : "niet in voorraad";
$voorraadH =  $hp["voorraad"] >= 1 ? "in voorraad" : "niet in voorraad";
$totaal = $toshiba["prijs"] + $hp["prijs"] + $acer["prijs"]; 
echo("<table border='1'> " . 
     "<caption> 
 	<strong>SML laptops</strong> 
 	</caption> 
 	<thead> 
 	<tr><th>Merk</th><th>Model</th><th>Operating system 
 	</th><th>Voorraad</th><th>Prijs</th></tr> 
 	</thead> 
 	<tbody> 
 	<tr> 
 	<td>" . $toshiba["merk"] . "</td>" . 
     "<td>" . $voorraadT . "</td>" . 
     "<td>" . $toshiba["os"] . "</td>" . 
     "<td>" . $voorraadT . "</td>" . 
     "<td>" . $toshiba["prijs"] . "</td>" . 
     "</tr> 
    <td>" . $acer["merk"] . "</td>" . 
     "<td>" . $acer["model"] . "</td>" . 
     "<td>" . $acer["os"] . "</td>" . 
     "<td>" . $voorraadA . "</td>" . 
     "<td>" . $acer["prijs"] . "</td>" . 
     "</tr> 
    <td>" . $hp["merk"] . "</td>" . 
     "<td>" . $hp["model"] . "</td>" . 
     "<td>" . $hp["os"] . "</td>" . 
     "<td>" . $voorraadH . "</td>" . 
     "<td>" . $hp["prijs"] . "</td>" . 
     "</tr> 
 	<tfoot> 
 	<tr><td colspan='4'>Totaal</td><td>" . $totaal . " 
 	</td></tr></tfoot></table>"); 
?> -->