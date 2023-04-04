<?php
function d($data){  //debug function, режим дебага - все ошибки выводятся. На этой строке data - параметр функции - принимает данные
    echo "<pre>";
    var_dump($data); //На этой строке data - аргумент функции - передает аргумент (данные)
    echo "</pre>";
}
// d($_POST);

function add($num1, $num2){
    return $num1 + $num2;
}

function subtract($num1, $num2){
    return $num1 - $num2;
}

function multiply($num1, $num2){
    return $num1 * $num2;
}

function divide($num1, $num2){
    if($num2 == 0){
        return 'You cannot divide by zero';
    } else {
        return $num1 / $num2;
    } 
}

if(isset($_POST["submit"])){

$num1 = $_POST["num1"]; //@ - игнорирование ошибок
$num2 = $_POST["num2"];
$operator = $_POST["operator"];
$result = NULL;

if($num1 == NULL || $num2 == NULL){
    echo "Enter both values first";
} else {
    switch($operator){
        case '+':
            $result = add($num1, $num2);
            break;
        
        case '-':
            $result = subtract($num1, $num2);
            break;
        
        case '*':
            $result = multiply($num1, $num2);
            break;
        
        case '/':
            $result = divide($num1, $num2);
            break;

        default:
            echo "Something went wrong";
            break;
    }
    if(isset($result)) echo "Result: " . $result;
}
}