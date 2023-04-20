<?php


function d($data){  //debug function, режим дебага - все ошибки выводятся. На этой строке data - параметр функции - принимает данные
    echo "<pre>";
    var_dump($data); //На этой строке data - аргумент функции - передает аргумент (данные)
    echo "</pre>";
}

// 3 кита ООП - инкапсуляция, полиморфизм, наследование. Классы создаются по правилам solid

// класс состоит из свойств и методов
// свойства класса - это данные (переменные)
// методы класса - это функции
class Person {
    public static $name; // public - модификатор доступа, static - обращение от класса к свойству без создания объекта (экземпляра класса)
    public static $age;  // свойства и методы public по умолчанию

    public static function setName($name) {
        self::$name = $name;            // self - ключевое слово как ссылка на текщий класс, :: - оператор разрешения области видимости
    }

    public static function setAge($age) {
        self::$age = $age;
    }

    public static function getName() {
        return self::$name;
    }

    public static function getAge() {
        return self::$age;
    }
}

// Person::$name = "Aleksei";
// echo Person::$name;

// Person::setName("Ruslan");
// echo Person::getName();



// Объекты
// class Customer {
    
// }

// $object_customer = new Customer();
// $object_customer->name = "Alexey_(Obj)";
// d($object_customer);


class Customer {
    public $name;
    private $phone;

    public function __construct($name, $phone) {        // конструктор класса
        $this->name = $name;
        $this->phone = $phone;
    }

    public function getName() {
        return $this->name;
    }

    public function getPhone() {
        return $this->phone;
    }
}

$customer1 = new Customer("Aleksei", "+123456789");        // конструктор класса вызывается автоматически при создании экземпляра класса
$customer2 = new Customer("Andrei", "+123456780");
d($customer1);
d($customer2);

$customer2->name = "Ruslan";
echo $customer2->name;

echo $customer2->getPhone();