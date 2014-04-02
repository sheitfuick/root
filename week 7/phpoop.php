<?php

class Car {
    public $color;
    public $merk;
    public $brandstof;
    function sound() {
        echo "vrrroeoeeemm";
    }
}

$beetle = new Car();
$beetle->color = "red";
echo $beetle->color;
$beetle->brandstof = "diesel";
echo $beetle->brandstof;
$beetle->merk = "VW";
echo $beetle->merk;

$golf = new Car();
$golf->color = "blue";
echo $golf->color;
$golf->brandstof = "benzine";
echo $golf->brandstof;
$golf->merk = "VW";
echo $golf->merk;
$golf->sound();

?>                  