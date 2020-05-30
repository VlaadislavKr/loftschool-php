<?php

$day = 4;
switch ($day) {
    case ($day > 0 and $day < 5):
        echo "Это рабочий день";
        break;
    case ($day = 6 or $day = 7):
        echo "Это выходной день";
        break;
    default:
        echo "Неизвестный день";
}
