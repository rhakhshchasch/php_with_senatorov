<!-- 1.  -->
<?php

// If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.

// Find the sum of all the multiples of 3 or 5 below 1000.

/* 
Объявляю переменную счётчик
Инициализирую цикл от 1 до 1000
Если число%3 или число%5 = 0, то увеличиваем счётчик
Печать счётчик
*/

$sum = 0;
for($i = 1; $i < 1000; $i++){
    if($i % 3 == 0 || $i % 5 == 0){
        $sum += $i;
    }
}
echo $sum;


// 2. 
<?php
$fibo = [1 => 0, 1, 1];
$sum = 0;
while($fibo[count($fibo)] <= 4000000){
    array_push($fibo, $fibo[count($fibo)] + $fibo[count($fibo)-1]);
} 
for($i = 1; $i < count($fibo); $i++){
    if($fibo[$i] % 2 == 0){
        $sum += $fibo[$i];
    } 
} echo $sum;
?>