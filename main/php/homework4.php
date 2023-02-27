<!-- 1.  -->
<?php
$number = 0;
if($number == 0){
    $fl = 1;
    echo $number . "! = " . $fl;
}    else {
        $fl = 1;
        for($i = 1; $i <= $number; $i++){
            $fl *= $i;
        } echo $number . "! = " . $fl;
    }
?>

<!-- Как input делать пока не знаю, понял только, что через HTML можно, но это 
как-то слишком сложно. -->


<!-- 2.  -->
<?php
$array = [1, 7, 3, 5, 17, 19];
sort($array);
$number = count($array)-1;
var_dump($array[$number]);
?>


<!-- 3.  -->
<?php
$string = "Hello World!";
$rev_string = strrev($string);
echo $rev_string;
?>


<!-- 4.  -->
<?php
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
$sum = 0;
for($i = 0; $i < count($array); $i++){
    if($array[$i] % 2 == 0){
        $sum += $array[$i];
    } 
} echo $sum;
?>