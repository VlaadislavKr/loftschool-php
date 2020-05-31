<?php

function task1($array, $par1 = false)
{
    if ($par1) {
        return implode(", ", $array);
    } else {
        foreach ($array as $value) {
            echo "<p>$value</p>";
        }
    }
}

function calcEverything(string $action, ...$args)
{
    switch ($action) {
        case '+':
            echo implode($action, $args) . "=" . array_sum($args) . "<br>";
            break;
        case '-':
            $arg1 = $args[0];
            array_shift($args);
            $instance = $arg1 . "-" . implode($action, $args);
            $result = $arg1 - array_sum($args);
            echo $instance . "=" . $result;
            break;
        case '*':
            $result = 1;

            for ($i = 0; $i < sizeof($args); $i++) {
                $result *= $args[$i];
            }

            echo implode($action, $args) . "=" . $result;
            break;
        case '/':
            $arg1 = $args[0];
            if ($arg1 == 0) {
                echo 0;
            } else {
                array_shift($args);
                $instance = $arg1 . "/" . implode($action, $args);
                $result = $arg1;

                for ($i = 0; $i < sizeof($args); $i++) {
                    $result /= $args[$i];
                }

                echo $instance . "=" . $result;
                break;
            }
    }
}

function task3(int $row_num, int $col_num)
{
    if (is_int($row_num) and is_int($col_num)) {
        echo "<table style='border-collapse: collapse;'>";
        for ($row = 1; $row < $row_num + 1; $row++) {
            echo "<tr>";
            for ($col = 1; $col < $col_num + 1; $col++) {
                echo "<td>";
                echo $row * $col;
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}

function task4Date($option)
{
    if ($option == "current") {
        date_default_timezone_set("Europe/Tallinn");
        echo date("d.m.Y H:i") . "<br>";
    } else {
        echo strtotime($option) . "<br>";
    }
}

function task6Create($file, $text)
{
    $fp = fopen($file, 'w');
    fputs($fp, $text);
    fclose($fp);
}
function task6Get($fname)
{
    echo file_get_contents($fname);
}
