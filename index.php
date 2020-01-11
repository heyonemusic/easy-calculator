<?php

// Функции
require 'function.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Easy Calculator</title>
</head>
<body>
<form method="post">
    <input type="text" name="a" placeholder="Введите число a" size="20"
           style="border: 1px solid #4a76a8;padding: 10px;border-radius: 5px;"
           onkeyup="var yratext=/[^0-9 .]/; if(yratext.test(this.value)) this.value=''"
           required><br><br>
    <input type="text" name="b" placeholder="Введите число b" size="20"
           style="border: 1px solid #4a76a8;padding: 10px;border-radius: 5px;"
           onkeyup="var yratext=/[^0-9 .]/; if(yratext.test(this.value)) this.value=''"
           required><br><br>
    <button type="submit" name="+"
            style="border: none;padding: 10px 20px 10px 20px;background: #4a76a8;color: #fff;border-radius: 5px;">+
    </button>
    <button type="submit" name="-"
            style="border: none;padding: 10px 20px 10px 20px;background: #4a76a8;color: #fff;border-radius: 5px;">-
    </button>
    <button type="submit" name="/"
            style="border: none;padding: 10px 20px 10px 20px;background: #4a76a8;color: #fff;border-radius: 5px;">/
    </button>
    <button type="submit" name="*"
            style="border: none;padding: 10px 20px 10px 20px;background: #4a76a8;color: #fff;border-radius: 5px;">*
    </button>
</form>
<br>
<div style="width: 9%;padding: 10px;background: #ddd;font-weight: bold;">
    Результат:
    <!-- Функции -->
    <?= addition($a, $b); ?> <!-- Сложение -->
    <?= subsctraction($a, $b); ?> <!-- Вычитание -->
    <?= division($a, $b); ?> <!-- Деление -->
    <?= multiplication($a, $b); ?> <!-- Умножение -->
</div>
</body>
</html>
