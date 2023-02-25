<?php
function d($data){
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}
$get = $_GET;//отправка данных на сервер с помощью HTTP
// d($get);
$array = ["car" => "Toyota", "color" => "blue"];
$array["name"] = "Alexey";
// d($array);
$get["message"] = "Pershikov";
// d($_POST);


if(isset($_POST["submit"])) {
    $api_token = "6256030793:AAGz_wgyBEUuq-kPwyDwuKVmOFO3GCOOLnE";
    $chat_id = "260509533";
    $responce = file_get_contents("https://api.telegram.org/bot6256030793:AAGz_wgyBEUuq-kPwyDwuKVmOFO3GCOOLnE/sendMessage?chat_id=260509533&text=" . $_POST["first_name"]);
}