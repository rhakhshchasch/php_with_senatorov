<?php
//Write a PHP program to find the factorial of a given number.
$num = 5;
$factorial = 1;
for ($i = 1; $i <= $num; $i++) {
    $factorial *= $i;
}
echo "The factorial of $num is: $factorial";

//Write a PHP program to find the largest element in an array.
$arr = array(3, 7, 1, 9, 4);
$largest = $arr[0];
foreach ($arr as $num) {
    if ($num > $largest) {
        $largest = $num;
    }
}
echo "The largest element in the array is: $largest";

//Write a function that takes a string as input and returns the reverse of that string.

function reverseString($str) {
    return strrev($str);
}
//Write a function that takes an array of integers as input and returns the sum of all the even numbers in the array.
function sumEvenNumbers($arr) {
    $sum = 0;
    foreach ($arr as $num) {
        if ($num % 2 == 0) {
            $sum += $num;
        }
    }
    return $sum;
}

?>

