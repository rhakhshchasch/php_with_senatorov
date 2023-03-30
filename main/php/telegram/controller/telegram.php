<?php
function d($data){  //debug function, режим дебага - все ошибки выводятся. На этой строке data - параметр функции - принимает данные
    echo "<pre>";
    var_dump($data); //На этой строке data - аргумент функции - передает аргумент (данные)
    echo "</pre>";
}
$get = $_GET; //суперглобальный массив GET, хранит значения, отправленные с фронтенда методом GET
// d($get);
$array = ["car" => "Toyota", "color" => "blue"]; //ассоциативный массив
$array["name"] = "Alexey"; //добавляем новое значение в массив
// d($array);
$get["message"] = "Pershikov"; //переменная с [] - обращение к ирдексу массива, если нет таких данных, то создаёт запись
// d($_POST);
$array_names = ["dyadya", "tyotya", "Toyota"]; //индекс массива начинается с 0 (нуля)
echo $array_names[2];

if(isset($_POST["submit"])) {
    $api_token = "";
    $chat_id = "260509533";
    $responce = file_get_contents("https://api.telegram.org/bot6256030793:AAGz_wgyBEUuq-kPwyDwuKVmOFO3GCOOLnE/sendMessage?chat_id=260509533&text=" . $_POST["first_name"]);
}