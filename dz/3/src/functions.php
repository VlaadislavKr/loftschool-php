<?php

function saveToFile(string $text, string $filename)
{
    $fp = fopen($filename, 'w');
    fputs($fp, $text);
    fclose($fp);
}

//Посчитайте количество пользователей с каждым именем в массиве
function countEachArrayFields(array $users_array, string $field)
{
    $array_values = array();
    foreach ($users_array as $each_user) {
        if (!isset($array_values[$each_user[$field]])) {
            $array_values[$each_user[$field]] = 0;
        } else {
            $array_values[$each_user[$field]]++;
        }
    }
    foreach ($array_values as $name => $count) {
        echo "$name: $count<br>";
    }
}

//Посчитайте средний возраст пользователей
function countArrayFieldMedium(array $users_array, string $field)
{
    $age_total = 0;
    foreach ($users_array as $each_user) {

        $age_total += $each_user['age'];
    }
    echo "Средний возраст: " . $age_total / USERS_COUNT . " лет";
}
