<?php
echo "Введите сумму покупки: ";
$sum = trim(fgets(STDIN));

if (is_numeric($sum) && $sum >= 0) {
    $sum = (float)$sum;
    if ($sum >= 10000) {
        $discount = 20;
        $final = $sum * 0.8;
    } elseif ($sum >= 5000) {
        $discount = 10;
        $final = $sum * 0.9;
    } else {
        $discount = 0;
        $final = $sum;
    }
    echo "Сумма: $sum\nСкидка: $discount%\nИтого к оплате: $final\n";
} else {
    echo "Ошибка: введите корректную сумму.\n";
}
?>