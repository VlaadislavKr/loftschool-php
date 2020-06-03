<?php

require('src/functions.php');

const USERS_COUNT = 50;

/*Задание #3.1

Программно создайте массив из 50 пользователей, у каждого пользователя есть поля id, name и age:
id - уникальный идентификатор, равен номеру эл-та в массиве
name - случайное имя из 5-ти возможных (сами придумайте каких)
age - случайное число от 18 до 45
Преобразуйте массив в json и сохраните в файл users.json
Откройте файл users.json и преобразуйте данные из него обратно ассоциативный массив РНР.
Посчитайте количество пользователей с каждым именем в массиве
Посчитайте средний возраст пользователей*/

$users = array();
$names = array ("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
for ($users_num = 1; $users_num < USERS_COUNT; $users_num++) {
    $users[$users_num]['id'] = $users_num;
    $users[$users_num]['name'] = $names[array_rand($names)];
    $users[$users_num]['age'] = rand(18, 45);
}
saveToFile(json_encode($users), "users.json");

$users_array = json_decode(file_get_contents("users.json"), true);

countEachArrayFields($users_array, "name");

countArrayFieldMedium($users_array, "age");

//countValuesOfObject($arrayOfObjs, "names");
//echo count($name_ar["Tank"]);
/*echo "<pre>";
var_dump($array_values);
echo "</pre>";*/