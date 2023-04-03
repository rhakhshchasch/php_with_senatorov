<?php
function d($data){  //debug function, режим дебага - все ошибки выводятся. На этой строке data - параметр функции - принимает данные
    echo "<pre>";
    var_dump($data); //На этой строке data - аргумент функции - передает аргумент (данные)
    echo "</pre>";
}
// d($_POST);

if(isset($_POST["submit"])){

$num1 = $_POST["num1"];//@ - игнорирование ошибок
$num2 = $_POST["num2"];
$operator = $_POST["operator"];
$result = NULL;

if($num1 == NULL || $num2 == NULL){
    echo "Enter both values first";
} else {
    if($operator == "+"){
        $result = $num1 + $num2;
    } else if ($operator == "-"){ //если "else if():", то не компилируется 
            $result = $num1 - $num2;
    } else if ($operator == "*"){
        $result = $num1 * $num2;
    } else if ($operator == "/"){
        if($num2 == 0){
            $result = "You cannot divide by zero";
        } else {
            $result = $num1 / $num2;
        }
    } else {
        echo "Something went wrong";
    }
    if(isset($result)) echo "Result: " . $result;
}
}
