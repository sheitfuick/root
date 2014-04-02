<?php
$array = array(array('hshsh', 'dsfsd'), "dsfdsfsd", "fsdfsd");
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
?>
<html>
    <head>
        <title>Leuke Array</title>
    </head>
    <body>
        <table border="1">
            <?php
            foreach ($mijnarray as $value) {
                echo("<tr>");
                foreach ($value as $porn) {
                    echo("<td>" . $porn . "</td>");
                }
                echo("</tr>");
            }
            ?>
        </table>
    </body>
</html>