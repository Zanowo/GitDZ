<?php
echo "Введите координаты x и y через пробел: ";
$input = trim(fgets(STDIN));
$parts = explode(' ', $input);

if (count($parts) == 2 && is_numeric($parts[0]) && is_numeric($parts[1])) {
    $x = (float)$parts[0];
    $y = (float)$parts[1];

    if ($x == 0 && $y == 0) {
        echo "Точка находится в начале координат.\n";
    } elseif ($x == 0) {
        echo "Точка лежит на оси Y.\n";
    } elseif ($y == 0) {
        echo "Точка лежит на оси X.\n";
    } elseif ($x > 0 && $y > 0) {
        echo "Точка находится в I четверти.\n";
    } elseif ($x < 0 && $y > 0) {
        echo "Точка находится во II четверти.\n";
    } elseif ($x < 0 && $y < 0) {
        echo "Точка находится в III четверти.\n";
    } else {
        echo "Точка находится в IV четверти.\n";
    }
} else {
    echo "Ошибка: введите два числа через пробел.\n";
}
?>