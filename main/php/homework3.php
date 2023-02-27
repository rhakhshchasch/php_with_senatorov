<!--Some notes on GET requests:-->
<!--отображается в URL-->
<!--$_GET-->
<!--GET requests can be cached-->
<!--GET requests remain in the browser history-->
<!--GET requests can be bookmarked-->
<!--GET requests should never be used when dealing with sensitive data-->
<!--GET requests have length restrictions-->
<!--GET requests are only used to request data (not modify)-->
<!---->
<!--Some notes on POST requests:-->
<!--Не отображается в URL-->
<!--$_POST-->
<!--POST requests are never cached-->
<!--POST requests do not remain in the browser history-->
<!--POST requests cannot be bookmarked-->
<!--POST requests have no restrictions on data length-->

1. 
$a and $b	And     "И" - меньший приоритет
$a or $b	Or      "ИЛИ" - меньший приоритет
$a xor $b	Xor     Исключающее "ИЛИ"
! $a	    Not     "НЕ"
$a && $b	And     "И" - больший приоритет
$a || $b	Or      "ИЛИ" - больший приоритет

Но я не понял из примеров разницы между (and и &&) и (or и ||)
Например, не понимаю, как это 

$g = true && false;

$g невозможно быть и true и false одновременно. 
в итоге какой результат в консоли?
посмотреть https://uchim.org/matematika/tablica-istinnosti

2. 
++$a	Pre-increment	Increments $a by one, then returns $a.
$a++	Post-increment	Returns $a, then increments $a by one.
--$a	Pre-decrement	Decrements $a by one, then returns $a.
$a--	Post-decrement	Returns $a, then decrements $a by one.


3. 
$a += $b	$a = $a + $b	Сложение
$a -= $b	$a = $a - $b	Вычитание
$a *= $b	$a = $a * $b	Умножение
$a /= $b	$a = $a / $b	Деление
$a %= $b	$a = $a % $b	Модуль
$a **= $b	$a = $a ** $b	Возведение в степень


4. 
Оператор
clone new	            clone и new
**	                    арифметические операторы
+ - ++ -- ~ (int) (float) (string) (array) (object) (bool) @	арифметические операторы (унарные + и -), инкремент/декремент, побитовые операторы, приведение типов и оператор управления ошибками
instanceof	            типы
!	                    логические операторы
* / %	                арифметические операторы
+ - .	                арифметические операторы (бинарные + и -), операторы, работающие с массивами и строковые операторы (. до PHP 8.0.0)
<< >>	                побитовые операторы
.	                    строковые операторы (начиная с PHP 8.0.0)
< <= > >=	            операторы сравнения
== != === !== <> <=>	операторы сравнения
&	                    побитовые операторы и ссылки
^	                    побитовые операторы
|	                    побитовые операторы
&&	                    логические операторы
||	                    логические операторы
??	                    операторы сравнения с null
? :	                    тернарный оператор (лево-ассоциативный до PHP 8.0.0)
= += -= *= **= /= .= %= &= |= ^= <<= >>= ??=	операторы присваивания
yield from	            yield from
yield	                yield
print	                print
and	                    логические операторы
xor	                    логические операторы
or	                    логические операторы

Большую часть этих операторов я не понимаю. 


5. 
У логического типа (bool) только два значения, которые используются для 
выражения истинностного значения. Он может быть либо true, либо false.

Синтаксис:
Для указания bool используются константы true или false. 
Они обе регистронезависимы.

<?php
$foo = True; // присвоить $foo значение TRUE
?>


6. 
false есть ложь. Например, false есть резальтат сравнения 3 == 4. 
Например, 

<?php 
var_dump(3 == 4);

При преобразовании в bool, следующие значения рассматриваются как false:

само значение boolean false
integer 0 (ноль)
float 0.0 (ноль) и -0.0 (минус ноль)
пустая строка "" и строка "0"
массив без элементов
особый тип NULL (включая неустановленные переменные)
внутренние объекты, которые перегружают своё поведение приведения к логическому типу. Например: объекты SimpleXML, созданные из пустых элементов без атрибутов.
Все остальные значения считаются true (включая resource и NAN).


7. 
<?php 
// echo "<pre>";
$array = array();
$array["name"] = "Aleksei";
print_r($array);

$array1 = [];
$array1["studies"] = " learns PHP";
var_dump($array1);
// echo "</pre>";


8. 
var_dump — это функция, которая выводит информацию о переменной. 


9. 
empty() — проверяет, пуста ли переменная. 
Возвращает true, если параметр проверяемая переменная не существует, 
если значение равно нулю, либо не задано. 
В противном случае возвращает false.

<?php
$var = 1;
var_dump(empty($var));

вернёт bool(false),

а если $var = 1, то bool(true)


10. 
isset() — определяет, установлена переменная значением, отличным от null. 
Возвращает false в случае, если переменная не определена, либо её значение 
равно null. В остальных случаях возвращает true.

<?php

$var = '';

// Проверка вернёт TRUE, поэтому текст будет напечатан.
if (isset($var)) {
    echo "Эта переменная определена, поэтому меня и напечатали.";
}

// В следующем примере мы используем var_dump для вывода
// значения, возвращаемого isset().

$a = "test";
$b = "anothertest";

var_dump(isset($a));     // TRUE
var_dump(isset($a, $b)); // TRUE

unset ($a);

var_dump(isset($a));     // FALSE
var_dump(isset($a, $b)); // FALSE

$foo = NULL;
var_dump(isset($foo));   // FALSE

?>