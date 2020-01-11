<?php

$a = trim($_POST['a']); // Первое число
$b = trim($_POST['b']); // Второе число

//Сложение
function addition($a, $b)
{
    if (isset($_POST['+'])) {
        if (is_numeric($a) && is_numeric($b)) {
            $result = $a + $b;
        } else {
            die('Неправильные данные');
        }
    }
    return $result;
}

//Вычитание
function subsctraction($a, $b)
{
    if (isset($_POST['-'])) {
        if (is_numeric($a) && is_numeric($b)) {
            $result = $a - $b;
        } else {
            die('Неправильные данные');
        }
    }
    return $result;
}

//Деление
function division($a, $b)
{
    if (isset($_POST['/'])) {
        if (is_numeric($a) && is_numeric($b)) {
            $result = $a / $b;
        } else {
            die('Неправильные данные');
        }
    }
    return $result;
}

//Умножение
function multiplication($a, $b)
{
    if (isset($_POST['*'])) {
        if (is_numeric($a) && is_numeric($b)) {
            $result = $a * $b;
        } else {
            die('Неправильные данные');
        }
    }
    return $result;
}