<?php
$money = 2000;
$price = 1000;
$taxRate = 0.08;
echo '変数$moneyの値: '.$money . PHP_EOL;
echo '変数$priceの値: '.$price . PHP_EOL;
echo '変数$taxRateの値: '.$taxRate . PHP_EOL;
echo '-----' . PHP_EOL;

$taxPrice = $price * (1 + $taxRate);

if ($money > $taxPrice) {
    echo "商品を買うことができます";
} elseif ($money === $taxPrice) {
    echo "商品を買うことができますが、所持金がなくなります";
} else {
    echo "商品を買うことができません";
}
