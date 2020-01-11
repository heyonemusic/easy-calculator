<?php

$a = trim($_POST['a']); // Первое число
$b = trim($_POST['b']); // Второе число

//Сложение
function addition($a, $b)
{
    if (isset($_POST['+'])) {
        $result = $a + $b;
    }
    return $result;
}

//Вычитание
function subsctraction($a, $b)
{
    if (isset($_POST['-'])) {
        $result = $a - $b;
    }
    return $result;
}

//Деление
function division($a, $b)
{
    if (isset($_POST['/'])) {
        $result = $a / $b;
    }
    return $result;
}

//Умножение
function multiplication($a, $b)
{
    if (isset($_POST['*'])) {
        $result = $a * $b;
    }
    return $result;
}