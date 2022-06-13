<?php
$prices = array(1000, 650, 750, 800);
echo '$pricesの値: ';
foreach ($prices as $price) {
  echo $price.' ';
}
echo PHP_EOL;
echo '-----' . PHP_EOL;

$sum = array_sum($prices);
echo "合計金額は" . $sum . "円です" . PHP_EOL;

$max = max($prices);
echo "最高金額は" . $max . "円です" . PHP_EOL;
