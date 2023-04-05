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


<!-- Альтернативный синтаксис на while() -->
    <?php //$i = 2; while ($i < 4): ?>
        <!-- <input type="text" name="num<?php //echo $i; ?>" id=""><br><br> -->
    <?php //$i++; endwhile;?>



<!-- Обычный синтаксис на while() - 3 варианта представления строки -->
    <?php 
        // $i = 2;
        // while ($i < 4) {
        //     echo "<input type='text' name='num{$i}' id=''><br><br>";
        //     $i++;
        // }

        // $i = 2;
        // while ($i < 4) {
        //     echo "<input type=\"text\" name=\"num{$i}\" id=\"\"><br><br>";
        //     $i++;
        // }

        // $i = 2;
        // while ($i < 4) {
        //     echo '<input type="text" name="num' . $i . '" id=""><br><br>';
        //     $i++;
        // }
    ?>



<!-- Альтернативный синтаксис на for() -->
    <?php //for ($i = 2; $i < 4; $i++): ?>
        <!-- <input type='text' name='num<?php //echo $i; ?>' id=''><br><br> -->
    <?php //endfor; ?>



<!-- Обычный синтаксис на for() -->
    <?php 
        // for ($i = 2; $i < 4; $i++) {
        //     echo "<input type='text' name='num{$i}' id=''><br><br>";
        // }
    ?>



<!-- Синтаксис на foreach() - извращение -->
    <?php
        // $num = [2, 3];
        // foreach ($num as $key => $value) {
        //      echo "<input type='text' name='num{$value}' id=''><br><br>";
        // }
    ?>



 <input type="submit" name="submit" value="Result!"><br><br>
 </form>
</body>
</html>