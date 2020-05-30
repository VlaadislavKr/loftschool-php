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

function calcEverything(... $args)
{
    $operation = $args[0];

    if($operation == "+") {
        for($i = 1; $i < sizeof($args); $i++) {
            $result += $args[$i];
        }
    } elseif($operation == "-") {
        $result = $args[1];
        for($i = 2; $i < sizeof($args); ++$i) {
            $result -= $args[$i];
        }
    } elseif($operation == "*") {
        $result = 1;
        for($i = 1; $i < sizeof($args); $i++) {
            $result *= $args[$i];
        }
    } elseif($operation == "/") {
        if($args[1] == 0) {
            $result = 0;
        } else {
            $result = $args[1];
            for($i = 2; $i < sizeof($args); $i++) {
                $result /= $args[$i];
            }
        }

    }
    echo $result;
}

function task3($row_num, $col_num)
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

function task6($fname)
{
    echo file_get_contents($fname);
}