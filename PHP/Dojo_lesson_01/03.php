<?php
$price = 1000;
$taxRate = 0.08;
echo '変数$priceの値: '.$price . PHP_EOL;
echo '変数$taxRateの値: '.$taxRate . PHP_EOL;
echo '-----' . PHP_EOL;

$i = $price * (1 + $taxRate);
echo "税込金額は" . $i . "円です";
