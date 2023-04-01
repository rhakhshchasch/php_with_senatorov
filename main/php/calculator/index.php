<?php include 'controller/calculator.php'; ?>

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
 <form class="form-message" action="controller/calculator.php" method="post">
 <label for="num1">Enter first number</label>   
 <input type="number" name="num1" id=""><br><br>
 <select name="operator" id="">
    <option value="+">sum</option>
    <option value="-">difference</option>
    <option value="*">multiplication</option>
    <option value="/">division</option>
 </select><br><br>
 <label for="num2">Enter second number</label>   
 <input type="number" name="num2" id=""><br><br>
 <input type="submit" value="Result!"><br><br>
 </form>
</body>
</html>