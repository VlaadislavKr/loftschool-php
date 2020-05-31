<?php

$bmw = array("model" => "X5", "speed" => 120, "doors" => 5, "year" => 2015);
$toyota = array("model" => "m1", "speed" => 100, "doors" => 10, "year" => 2014);
$opel = array("model" => "m2", "speed" => 150, "doors" => 20, "year" => 2013);

$arr = array("bmw" => $bmw, "toyota" => $toyota, "opel" => $opel);

foreach ($arr as $key => $value) {
    echo "car $key<br>";
    echo "{$value['model']} {$value['speed']} {$value['doors']} {$value['year']}";
    echo "<br><br>";
}
