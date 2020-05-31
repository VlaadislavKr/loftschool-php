<?php

require("src/functions.php");

//task1
task1(array("str1", "str2", "str3"));
echo task1(array("str1", "str2", "str3"), true);
echo "<br><br>";

//task2
calcEverything("/", 2, 3, 4);
echo "<br><br>";

//task3
task3(6, 4);
echo "<br>";

//task4
task4Date("current");
task4Date("24.02.2016 00:00:00");
echo "<br>";

//task5
echo str_replace("К", "", "Карл у Клары украл Кораллы")."<br>";
echo str_replace("Две", "Три", "Две бутылки лимонада");
echo "<br><br>";

//task6
task6Create("test.txt", "Hello again!");
task6Get("test.txt");
