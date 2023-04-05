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
    switch($operator){
        case '+':
            $result = $num1 + $num2;
            break;
        
        case '-':
            $result = $num1 - $num2;
            break;
        
        case '*':
            $result = $num1 * $num2;
            break;
        
        case '/':
            switch($num2){
                case 0:
                    $result = 'You  cannot divide by zero';
                    break;
                default:
                    $result = $num1 / $num2;
                    break; 
            }
        default:
            echo "Something went wrong";
            break;
    }
    if(isset($result)) echo "Result: " . $result;
}
}

