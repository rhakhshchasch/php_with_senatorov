<?php include 'controller/calculator.php'; ?>

<?php
    function decoder($str) {
        $reversed = strrev($str);   //локальная переменная, локальная область видимости
        $decoded = base64_decode($reversed);
        return $decoded;
    }
    
    $string = "VGhpcyBpcyBhIHN0cmluZyB0ZXN0IHN0cmluZw==";   //глобальная переменная, глобальная область видимости
    echo decoder($string);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="access/styles/style.css">
    <script src="access/js/scrypt.js"></script>
    <title>Calculator</title>
</head>

<body>
<h1>Calculator</h1>
 <form class="form-message" action="controller/calculator.php" method="POST">
 <label for="num1">Enter first number</label>   
 <input type="text" name="num1" id=""><br><br>
 <select name="operator" id="">
    <option value="+">sum</option>
    <option value="-">difference</option>
    <option value="*">multiplication</option>
    <option value="/">division</option>
 </select><br><br>
 <label for="num2">Enter second number</label>   
 <input type="text" name="num2" id=""><br><br>
 <input type="submit" name="submit" value="Result!"><br><br>
 </form>
</body>
</html>