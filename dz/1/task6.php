<?php

echo "<table style='border-collapse: collapse;'>";
for ($row = 1; $row < 11; $row++) {
    echo "<tr>";
    for ($col = 1; $col < 11; $col++) {
        $result = $row * $col;
        echo "<td style='border:1px solid;padding:5px;'>";
        if ((($row % 2) == 0) and (($col % 2) == 0)) {
            echo "($result)";
        } elseif ((($row % 2) !== 0) and (($col % 2) !== 0) and ($row != 1) and ($col != 1)) {
            echo "[$result]";
        } else {
            echo "$result";
        }
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
