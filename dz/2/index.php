<?php

require("src/functions.php");

task1(array("str1", "str2", "str3"));
echo task1(array("str1", "str2", "str3"), true);
echo "<br><br>";
calcEverything("+", 2, 3, 4);
task3(6, 4);

date_default_timezone_set("Europe/Tallinn");
echo date("d.m.Y H:i");
echo strtotime("24.02.2016 00:00:00");

$str = "Карл у Клары украл Кораллы";
var_dump(str_replace("К", "", $str));
$str = "Две бутылки лимонада";
var_dump(str_replace("Две", "Три", $str));

$fp = fopen("test.txt", w);
fputs($fp, "Hello again!");
fclose($fp);

task6("test.txt");